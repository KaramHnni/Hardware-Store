<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'channels';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getStatusNameAttribute(){
        if($this->status == false){
            return " Inactive ";
        }
        if($this->status == true){
            return " Active " ; 
        }
    }

    public static function active(){
       
        return self::where('status',1);
    }
 
    public function setActive(){
        $this->status = 1;
        $this->updated_at = now();
        $this->save();
    }
 
    public function setInactive(){
        $this->status = 0;
        $this->updated_at = now();
        $this->save();
    }

    public static function fetchBySlug($slug){
        return self::where('slug',$slug)->first();
    }

    public static function myChannels(){

        return self::where('user_id',auth()->user()->id);
    }

    public function store($request){

        $channel = new self;

        $channel->name = $request->name;
        $channel->user_id = auth()->user()->id;
        $channel->slug =str_slug($request->name , '-');
        if($request->hasFile('channel_image')){
                $image = $request->file('channel_image');
                $filenameToStore = $image->getClientOriginalName(). '__' . time() . '.' .$image->getClientOriginalExtension() ;
                $path = public_path('/images/Blog/Channels/Channel_Images');
                $image->move($path, $filenameToStore);
            }else{
               $filenameToStore = 'noimage.jpg'; 
            }
        $channel->image = $filenameToStore;
        $channel->status = 1;
        $channel->save();
    }


    public function posts(){

            return $this->hasMany('\App\Models\Post','channel_id','id');
    }

    public function user(){
        return $this->hasOne('\App\Models\User','id','user_id');
    }
}

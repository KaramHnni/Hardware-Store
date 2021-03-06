<?php

namespace App\Models\Blog;

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

    public function store($request,$id){

        $channel = new self;
        $channel->name = $request->name;
        $channel->owner_id = $id;
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
        $channel->created_at = now();
        $channel->updated_at = now();
        $channel->save();
    }


    public function updateDetails($request){


        $this->name = $request->name;
        $this->slug =str_slug($request->name, '-');
        $this->updated_at = now();
        $this->save();
        return $this;
    }
    public function posts(){

            return $this->hasMany('\App\Models\Blog\Post','channel_id','id');
    }

   
    public function owner(){

        return $this->hasOne('\App\Models\Blog\Owner','id','owner_id');
        
    }

    public function users(){
        return $this->belongsToMany('\App\Models\User');
    }
}

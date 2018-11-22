<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    
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

    public static function myPosts(){

        return self::where('user_id',auth()->user()->id);
    }

    public function store($request,$id){

        $post = new self;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->publisher_id = $id;
        $post->category_id = $request->category;
        $post->slug = str_slug($request->title , '-');
        $post->channel_id = $request->channel;
            if($request->hasFile('cover_image')){
                $image = $request->file('cover_image');
                $filenameToStore = $image->getClientOriginalName(). '__' . time() . '.' .$image->getClientOriginalExtension() ;
                $path = public_path('/images/Blog/Posts/Cover_Images');
                $image->move($path, $filenameToStore);
            }else{
               $filenameToStore = 'noimage.jpg'; 
            }
        $post->image = $filenameToStore;
        $post->status = 1;
        $post->save();
    }

    public function updateDetails($request){


        $this->title = $request->title;
        $this->slug =str_slug($request->title, '-');
        $this->body = $request->body;
        $this->updated_at = now();
        $this->save();
        return $this;
    }
    public function category(){

        return $this->hasOne('\App\Models\Category', 'id', 'category_id');
    }

    public function publisher(){

        return $this->hasOne('\App\Models\Publisher','id','publisher_id');
    }

    public function channel(){

        return $this->hasOne('\App\Models\Channel','id','channel_id');
    }

    public function users(){

        return $this->belongsToMany('\App\Models\User');
    }
}

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


    public function store($request){

        $post = new self;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category->id;
            if($request->hasFile('cover_image')){
                $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $filenameToStore = $filename . '__' . time() . '__' . $extension;
                $path = $request->file('cover_image')->storeAs('public/Posts/Cover_Images',$filenameToStore);


            }
            else{
               $fileNameToStore('noimage.jpg'); 
            }
        $post->image = $fileNameToStore;
        $post->save();
    }

    public function category(){

        return $this->hasOne('\App\Models\Category', 'id', 'category_id');
    }

    public function user(){

        return $this->hasOne('\App\Models\User','id','user_id');
    }
}

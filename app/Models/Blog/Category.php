<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_categories';
    
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

   public static function fetchBySlug($slug){
    return self::where('slug',$slug)->first();
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

   public function posts(){

    return $this->hasMany('\App\Models\Blog\Post','category_id','id');
   }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'publishers';
    
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

    public function store($id){

        $publisher = new self;
        $publisher->user_id =$id;
        $publisher->status = 1;
        $publisher->save();
        return $publisher;

    }


    public function posts(){

        return $this->hasMany('\App\Models\Post','publisher_id','id');
    }

    public function user(){

        return $this->hasOne('\App\Models\User','id','user_id');
    }

    
}

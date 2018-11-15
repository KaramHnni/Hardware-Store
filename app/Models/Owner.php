<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'owners';
    
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

        $owner = new self;
        $owner->user_id =$id;
        $owner->status = 1;
        $owner->save();
        return $owner;

    }


    public function channels(){

        return $this->hasMany('\App\Models\Channel','owner_id','id');
    }

    public function user(){

        return $this->hasOne('\App\Models\User','id','user_id');
    }
}

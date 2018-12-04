<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function getFullNameAttribute(){

        return  $this->last_name.' '.$this->name ;

    }
    public function getStatusNameAttribute(){
        if($this->status == false){
            return " Inactive ";
        }
        if($this->status == true){
            return " Active " ; 
        }
    }
 
    public static function active(){
       
        return self::where('status', 1);
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

    public function registernewUser($request){
        $user = new User;
        $user->username=$request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->status = 1;
        $user->created_at = now();
        $user->save();
    }

    

   

    public function owners(){

        return $this->hasMany('\App\Models\Blog\Owner','user_id','id');
    }

    public function channel(){

        return $this->belongsToMany('\App\Models\Blog\Channel');
    }

    public function posts(){

        return $this->belongsToMany('\App\Models\Blog\Post');
    }
    

}

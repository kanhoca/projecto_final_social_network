<?php
/**
 * Created by lvntayn
 * Date: 03/06/2017
 * Time: 22:45
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserRelationship extends Model
{

    protected $table = 'user_relationship';

    public $timestamps = false;


    public function relative(){
        return $this->belongsTo('App\Models\User', 'related_user_id');
    }

    public function main(){
        return $this->belongsTo('App\Models\User', 'main_user_id');
    }

    public function getAllow(){
        return $this->allow;
    }

    public function getType(){
        if ($this->relation_type == 0){
            return "Mãe";
        }else if($this->relation_type == 1){
            return "Pai";
        }else if($this->relation_type == 2){
            return "Esposa";
        }else if($this->relation_type == 3){
            return "Irmã";
        }else if($this->relation_type == 4){
            return "Irmão";
        }else{
            return "Relativo";
        }
    }
}
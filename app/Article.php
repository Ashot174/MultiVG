<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    protected $fillable = ['user_id','title', 'description', 'modified_by'];

    public function getUserName(){
        $id = $this->user_id;
        $name = User::findOrFail($id)->name;
        return ('Created By: '.$name);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

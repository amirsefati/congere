<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['user_id','article_code','reserved','price'];

    public function pay_to_article(){
        return $this->belongsTo('App\Article','article_code','code');
    }
}

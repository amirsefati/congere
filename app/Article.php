<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','titleen','axialofarticle','author','langarticle','abstractfa','abstracten','keywordfa','keyworden','filedocs','filepdf'];
    
    public function user_article()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function user_article_teacher()
    {
        return $this->belongsTo('App\User','teacher');
    }

    public function admin_show_pay()
    {
        return $this->hasOne('App\Payment','article_code','code');
    }


}

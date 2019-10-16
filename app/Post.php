<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'imagem', 'descricao', 'tags', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public $timestamps = true;
}

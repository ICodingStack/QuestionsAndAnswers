<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    protected $table ="questions";
    protected $primaryKey ="id";
    protected $fillable = [
      'id',
      'user_id',
      'title',
      'body',
      'slug',
      'views',
      'like',
      'dislike',
      'created_at',
      'updated_at'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getCreatedDateAttributes()
    {
        return $this->created_at->diffForHumans();
    }
}

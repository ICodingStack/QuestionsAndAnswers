<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    protected $table ="answers";
    protected $primaryKey ="id";
    protected $fillable = [
        'id',
        'user_id',
        'question_id',
        'body',
        'like',
        'dislike',
        'created_at',
        'updated_at'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function question(){
        return $this->belongsTo(questions::class);
    }

    public function getCreatedDateAttributes()
    {
        return $this->created_at->diffForHumans();
    }
}

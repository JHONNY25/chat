<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chats';
    protected $fillable = [
        'user_recive',
        'user_sent',
    ];

    public function userrecive(){
        return $this->belongsTo(User::class,'user_recive');
    }

    public function usersent(){
        return $this->belongsTo(User::class,'user_sent');
    }

    public function messages(){
        return $this->hasMany(Messages::class,'chat_id');
    }
}

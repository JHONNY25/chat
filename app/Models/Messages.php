<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = [
        'chat_id',
        'user_id',
        'text',
        'image_path',
        'file_path',
        'send_date',
    ];

    public function chat(){
        return $this->belongsTo(Chat::class,'chat_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

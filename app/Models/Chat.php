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
        'text',
        'image_path',
        'file_path',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

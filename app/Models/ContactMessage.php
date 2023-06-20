<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactMessage extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'contact_messages';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}

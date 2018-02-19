<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EmailCustomer extends Model
{
    use Notifiable;

    const EMAIL = 'email';

    protected $fillable = [
        'email',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuote extends Model
{
    protected $table = 'requests_quote';

    use HasFactory;

    protected $fillable = [
        'service',
        'name',
        'phone',
        'email',
        'msg',
    ];
}

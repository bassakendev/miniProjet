<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class monbeatmakers extends Model
{
    use HasFactory;

    protected $fillabel = ['nom', 'prenom', 'email', 'ville', 'pays', 'tel', 'password'];
}

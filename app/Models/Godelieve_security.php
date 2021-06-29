<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Godelieve_security extends Model
{
    use HasFactory;

    protected $table = "godelieve_securities";

    protected $fillable = ['EXPIRATION','AVERTISSEMENT','BLOCAGE','BLASPHEME'];
}

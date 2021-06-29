<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $table = "avis";

    protected $fillable = ['IDENTIFIANT','HOPITAL','PROVINCE','DATE_SEND','TIME_AVIS','AVIS','CODEP','TEL','CODE_AVIS','PAYS','FONCTION'];
}

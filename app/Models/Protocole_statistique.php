<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocole_statistique extends Model
{
    use HasFactory;

    protected $table = "protocole_statistiques";

    protected $fillable = ['TEL','IDENTIFIANT','CODEP','JAIME','VUE','FAVORIS','ID_CODE'];
}

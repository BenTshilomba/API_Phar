<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis_statistique extends Model
{
    use HasFactory;

    protected $table = "avis_statiatiques";

    protected $fillable = ['TEL','IDENTIFIANT','CODE_AVIS','JAIME','ID_CODE'];


}

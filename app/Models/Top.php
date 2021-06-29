<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;

    protected $table = "tops";

    protected $fillable = ['IDENTIFIANT','LOCK_MY','TELEPHONE','FONCTION','SAUVEGARDE','HOPITAL','PROVINCE','PAYS','CNOM','IMEI','TOP'];
}

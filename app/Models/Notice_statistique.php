<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice_statistique extends Model
{
    use HasFactory;

    protected $table = "notice_statistiques";

    protected $fillable = ['TEL','IDENTIFIANT','CODE_NC','NC','DCI','JAIME','VUE','FAVORIS','ID_CODE'];
}

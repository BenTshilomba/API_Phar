<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance_protocole extends Model
{
    use HasFactory;

    protected $table = "ordonnance_protocoles";

    protected $fillable = ['CODEP','NC','DCI','FG','DOSE','DT','POSOLOGIE','VA','DURE','DUREE','NOTE','ID_CODE'];
}

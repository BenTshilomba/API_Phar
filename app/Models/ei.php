<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ei extends Model
{
    use HasFactory;

    protected $table = "eis";

    protected $fillable = ['NC','DCI','CT','FIRME','DETAILS_EI','QUANTITE','ATTITUDE','URGENCE','CATEGORIE','ADRESSE','DATE','IDENTIFIANT','TEL','HOPITAL','CODE_EI'];
}

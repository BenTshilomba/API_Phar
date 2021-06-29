<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocole extends Model
{
    use HasFactory;

    protected $table = "protocoles";

    protected $fillable = ['CODEP','INTITULE','CATEGORIE','SERVICE','ATTESTE_SELON','ATTESTEUR','HOPITAL_ATTESTEUR','PROVINCE_ATTESTEUR','TEL_ATTESTEUR','DETAILS','AUTRES_DETAIL','DATE','PAYS','FONCTION','VALIDATION'];
}

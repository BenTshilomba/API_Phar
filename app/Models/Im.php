<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Im extends Model
{
    use HasFactory;

    protected $table = "ims";

    protected $fillable = ['DCI1','DCI2','IM','NIVEAU_C'];
}

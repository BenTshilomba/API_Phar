<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = "notices";

    protected $fillable = ['CODE_NC','NC','FG','DCI','CT','INDICATION','CI','DOSAGE','EI','IM','PEC','COMPOSITION','FIRME','COUT','LIEU','MA','PRECAUTION','ES','AUTRES','NOUVEAU','PAYANT','VALIDATION'];
}

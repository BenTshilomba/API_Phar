<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comm extends Model
{
    use HasFactory;

    protected $table = "comms";

    protected $fillable =['txtNAME','txtEMAIL','txtPHONE','txtMESSAGE'];
}

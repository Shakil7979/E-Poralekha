<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer_text_model extends Model
{
    public $table = "footer_text_table";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps =false;
}

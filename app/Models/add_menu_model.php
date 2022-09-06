<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_menu_model extends Model
{
    public $table = "add_menu";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps =false;
}

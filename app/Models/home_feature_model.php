<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_feature_model extends Model
{
    public $table = "home_feature_table";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps =false;
}

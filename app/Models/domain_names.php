<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domain_names extends Model
{
    public $table = "domain_names";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps =false;
}

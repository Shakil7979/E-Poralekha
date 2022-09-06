<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeBannerModel extends Model
{
    public $table = "home_banner_table";
    public $primaryKey = "id";
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps =false;
}

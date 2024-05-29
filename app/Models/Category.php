<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service(){
        $this->belongsTo(Service::class);
    }
}

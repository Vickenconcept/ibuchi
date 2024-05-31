<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * [Description for isCleaning]
     *
     * @return bool
     *
     */
    public function isCleaning() : bool
    {
        return $this->type == 'cleaning';
    }
}

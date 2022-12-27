<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'zipcode',
        'street',
        'neighborhood',
        'complement',
        'city',
        'state',
    ];

    public function addresseable()
    {
        return $this->morphTo();
    }
}

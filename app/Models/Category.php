<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    public function scopeIsActive($query)
    {
        $query->where('status', 'Ativo');
    }

    public function scopeIsInactive($query)
    {
        $query->where('status', 'Inativo');
    }
}

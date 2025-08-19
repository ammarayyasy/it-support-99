<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class, 'portfolio_tag');
    }
}

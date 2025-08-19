<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['tags'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'portfolio_tag');
    }

    protected static function booted()
    {
        static::updating(function ($portfolio) {
            if ($portfolio->isDirty('thumbnail')) {
                Storage::disk('public')->delete($portfolio->getOriginal('thumbnail'));
            }
        });

        static::deleting(function ($portfolio) {
            Storage::disk('public')->delete($portfolio->thumbnail);
        });
    }

}

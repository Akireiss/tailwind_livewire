<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'reports_images';

    protected $fillable = [
        'reports_id',
        'images'
    ];

    public function reports()
    {
        return $this->belongsTo(Reports::class, 'reports_id', 'id');
    }
}

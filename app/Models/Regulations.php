<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulations extends Model
{
    use HasFactory;

    protected $table = 'regulations';

    protected $fillable = [
        'name',
        'description',
    ];


    public function reports()
    {
        return $this->hasMany(Reports::class, 'regulation_id', 'id');
    }




}

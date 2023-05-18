<?php

namespace App\Models;

use App\Models\Reports;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_Reports extends Model
{
    use HasFactory;

    protected $table = 'user_reports';

    protected $fillable = [
        'user_id',
        'reports_id'
    ];

    public function reports()
    {
        return $this->belongsTo(Reports::class, 'reports_id', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\Reports;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'grade_level',
        'teachers_id'
    ];

    public function reports()
    {
        return $this->hasMany(Reports::class, 'students_id', 'id');
    }

    public function reporting_parties()
    {
        return $this->hasMany(Reporting_parties::class, 'reports_id', 'id');
    }
}

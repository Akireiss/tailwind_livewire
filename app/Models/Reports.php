<?php

namespace App\Models;

use App\Models\Images;
use App\Models\Students;
use App\Models\Regulations;
use App\Models\Reporting_parties;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionContextPass;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reports extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'students_id',
        'description',
        'regulation_id',
    ];

    public function students()
    {
        return $this->belongsTo(Students::class, 'students_id', 'id');
    }



    public function reporting_parties()
    {
        return $this->hasMany(Reporting_parties::class, 'reports_id', 'id');
    }



    public function images()
    {
        return $this->hasMany(Images::class, 'reports_id', 'id');
    }

    public function regulations()
    {
        return $this->belongsTo(Regulations::class, 'regulation_id', 'id');
    }


}

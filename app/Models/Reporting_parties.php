<?php

namespace App\Models;

use App\Models\Reports;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reporting_parties extends Model
{
    use HasFactory;

    protected $table = 'reporting_parties';

    protected $fillable = [
        'reports_id',
        'name',
        'grade',
        'contact_details'
    ];



}

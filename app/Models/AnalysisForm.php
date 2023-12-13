<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnalysisForm extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'analysis_form';

    protected $fillable = [
		'name',
		'email',
        'contact_number'
	];
}

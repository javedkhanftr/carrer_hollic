<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_location_id',
        'department_id',
        'job_type_id',
        'status_id',
        'stages',
        'posted_by',
        'name',
        'salary',
        'vacancy_count',
        'description',
        'responsibilities',
        'slug',
        'last_submission_date',
        'job_post_settings',
        'apply_form_settings',
    ];

    protected $casts = [
        'company_location_id' => 'integer',
        'department_id' => 'integer',
        'job_type_id' => 'integer',
        'status_id' => 'integer',
        'posted_by' => 'integer',
        'last_submission_date' => 'datetime:Y-m-d',
        'job_post_settings' => 'object',
        'apply_form_settings' => 'object',
    ];
}

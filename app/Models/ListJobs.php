<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ListJobs extends Model
{
    protected $table = 'job_listing_table';

    protected $fillable = [
        'id',
        'title',
        'description',
        'company',
        'location',
        'salary'
    ];
}
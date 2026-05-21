<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ListJobs extends Model
{
     use HasFactory;
     
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
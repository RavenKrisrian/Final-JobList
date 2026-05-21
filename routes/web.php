<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('jobs', [
        'jobs' => Job::allJobs()
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::allJobs()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findJob($id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});
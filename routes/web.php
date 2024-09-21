<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$jobs = [
    [
        'id' => 1,
        'title' => 'Associate Software Engineer',
        'salary' => 50000,
        'currency' => 'BDT',
        'vacancy'=> 5,
        'deadline' => '2024-12-12',
        'description' => 'Test description'
    ],
    [
        'id' => 2,
        'title' => 'Software Engineer',
        'salary' => 70000,
        'currency' => 'BDT',
        'vacancy'=> 5,
        'deadline' => '2024-12-12',
        'description' => 'Test description'
    ],
    [
        'id' => 3,
        'title' => 'Senior Software Engineer',
        'salary' => 120000,
        'currency' => 'BDT',
        'vacancy'=> 5,
        'deadline' => '2024-12-12',
        'description' => 'Test description'
    ],
    [
        'id' => 4,
        'title' => 'Technical Lead',
        'salary' => 150000,
        'currency' => 'BDT',
        'vacancy'=> 5,
        'deadline' => '2024-12-12',
        'description' => 'Test description'
    ],
    [
        'id' => 5,
        'title' => 'Principal Engineer',
        'salary' => 200000,
        'currency' => 'BDT',
        'vacancy'=> 5,
        'deadline' => '2024-12-12',
        'description' => 'Test description'
    ]
];

Route::get('/', function () {
    return view('home', [
        'greeting_message' => 'Welcome',
        'username' => 'Rifat'
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/jobs', function() use($jobs) {
    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job/{id}', function($id) use($jobs) {
    $job = Illuminate\Support\Arr::first($jobs, function($job) use($id) {
        return $job['id'] == $id;
    });

    return view('job_details', [
        'job' => $job
    ]);
});
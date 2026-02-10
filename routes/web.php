<?php

use Illuminate\Support\Facades\Route;

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Engineer',
            'salary' => '$40,000'
        ],
        [
            'id' => 3,
            'title' => 'Assisstant',
            'salary' => '$30,000'
        ]
    ];

    $job = \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    return view('job', ['job' => $job]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    $jobs = [
        ['id' => 1, 'title' => 'Manager', 'salary' => '$50,000'],
        ['id' => 2, 'title' => 'Engineer', 'salary' => '$40,000'],
        ['id' => 3, 'title' => 'Assisstant', 'salary' => '$30,000']
    ];

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});


        

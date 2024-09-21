<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// class Job
class Job extends Model
{
    use HasFactory;

    // public static function all(): array { 
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Associate Software Engineer',
    //             'salary' => 50000,
    //             'currency' => 'BDT',
    //             'vacancy'=> 5,
    //             'deadline' => '2024-12-12',
    //             'description' => 'Test description'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Software Engineer',
    //             'salary' => 70000,
    //             'currency' => 'BDT',
    //             'vacancy'=> 5,
    //             'deadline' => '2024-12-12',
    //             'description' => 'Test description'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Senior Software Engineer',
    //             'salary' => 120000,
    //             'currency' => 'BDT',
    //             'vacancy'=> 5,
    //             'deadline' => '2024-12-12',
    //             'description' => 'Test description'
    //         ],
    //         [
    //             'id' => 4,
    //             'title' => 'Technical Lead',
    //             'salary' => 150000,
    //             'currency' => 'BDT',
    //             'vacancy'=> 5,
    //             'deadline' => '2024-12-12',
    //             'description' => 'Test description'
    //         ],
    //         [
    //             'id' => 5,
    //             'title' => 'Principal Engineer',
    //             'salary' => 200000,
    //             'currency' => 'BDT',
    //             'vacancy'=> 5,
    //             'deadline' => '2024-12-12',
    //             'description' => 'Test description'
    //         ]
    //     ];
    // }

    // public static function find($id): array {
    //     $id = (int)$id;
    //     $jobs = static::all();
    //     $job = Arr::first($jobs, function($job) use($id) {
    //         return $job['id'] === $id;
    //     });
        
    //     if(!$job) {
    //         abort(404);
    //     }

    //     return $job;
    // }

    protected $table = 'job_items'; // Assign this table name explicitely as laravel core has another `jobs` table 
    protected $fillable = ['title', 'salary', 'currency', 'description'];
}

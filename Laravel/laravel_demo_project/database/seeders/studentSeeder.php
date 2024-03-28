<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // This method is used  to add single record in the database but if you want to add multiple data as an array then 
        // student::create([
        //     'name' => 'Haresh Prajapati',
        //     'email' => 'harry@gmail.com',
        //     'gender' => 'Male',
        //     'age' => 10,
        //     'percentage' => 80.90
        // ]);

        $students = collect([
            // [
            //     'name' => 'Vishnu Prajapati',
            //     'email' => 'vishnu@gmail.com',
            //     'gender' => 'Male',
            //     'age' => 22,
            //     'percentage' => 80.90
            // ],
            // [
            //     'name' => 'Haresh Prajapati',
            //     'email' => 'harry@gmail.com',
            //     'gender' => 'Male',
            //     'age' => 21,
            //     'percentage' => 80.9
            // ],
            // [
            //     'name' => 'Manav Patel',
            //     'email' => 'manav@gmail.com',
            //     'gender' => 'Male',
            //     'age' => 23,
            //     'percentage' => 80.9
            // ]
            [
                'name' => fake()->name(),     // to add fake name and unique email
                'email' => fake()->unique()->email(), 
                'gender' => 'Male',
                'age' => 22,
                'percentage' => 70.00
            ],
        ]);

        $students->each(function($student){
            student::create($student);   // create will add timestamp in create_at and updated_at while insert will add null in those fields
        });
    }
}
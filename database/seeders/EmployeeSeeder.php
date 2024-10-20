<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $tok =file::get('database/json/Employee.json');
$employee =collect(json_decode($tok));

$employee->each(function($employee){
    Employee::create([
        'name' => $employee->name,
        'age' => $employee->age,
        'address' => $employee->address,
        'salary' => $employee->salary
    ]);
});
       

    }
}

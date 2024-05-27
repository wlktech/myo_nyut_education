<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ["name" => "မောင်အေးချမ်း", "image" => "1.png", "grade" => "နဝမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
            ["name" => "မအေးသန်း", "image" => "2.png", "grade" => "ဒသမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
            ["name" => "မမမျိုး", "image" => "3.png", "grade" => "အဌမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
            ["name" => "မနှင်းနှင်း", "image" => "4.png", "grade" => "နဝမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
            ["name" => "မောင်ခိုင်ဝင်း", "image" => "5.png", "grade" => "ဒသမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
            ["name" => "မောင်အောင်မျိုး", "image" => "6.png", "grade" => "အဌမတန်း", "prize" => "ဘက်စုံထူးချွန် လူရည်ချွန်", "year" => "2023-2024 ပညာသင်နှစ်"],
        ];
        foreach($students as $student)
        {
            Student::create($student);
        }
    }
}

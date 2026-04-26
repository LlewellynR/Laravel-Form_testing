<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormData;

class FormDataSeeder extends Seeder
{
    public function run(): void
    {
        FormData::factory(10)->create();
    }
}

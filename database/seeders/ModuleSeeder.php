<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        Module::create([
            'title' => 'Introduction to Algebra',
            'description' => 'A comprehensive module on algebraic principles.',
            'featured' => true,
        ]);

        Module::create([
            'title' => 'Basic Geometry',
            'description' => 'Understanding shapes, sizes, and the properties of space.',
            'featured' => false,
        ]);

        // Add more modules as needed
    }
}


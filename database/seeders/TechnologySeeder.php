<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use Illuminate\Support\Str;
class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Laravel',
            'Vue.js',
        ];

        foreach ($array as $value) {
            $new_technology = new Technology();
            $new_technology->name = $value;
            $new_technology->slug = Str::slug($value, '-');
            $new_technology->save();
        }
    }
}

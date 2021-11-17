<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::create([
            'total_sales' => 1231,
            'total_visited' => 1446,
            'total_growth' => 65
        ]);
    }
}

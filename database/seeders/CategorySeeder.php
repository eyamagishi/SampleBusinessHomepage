<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => "その他",
                'created_at'    => $currentTimestamp,
                'updated_at'    => $currentTimestamp,
            ],
            [
                'id' => 2,
                'category_name' => "重要",
                'created_at'    => $currentTimestamp,
                'updated_at'    => $currentTimestamp,
            ],
            [
                'id' => 3,
                'category_name' => "サービス",
                'created_at'    => $currentTimestamp,
                'updated_at'    => $currentTimestamp,
            ],
        ]);
    }
}

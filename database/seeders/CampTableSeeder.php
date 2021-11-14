<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Pro Studies',
                'slug' => Str::slug('Pro-Studies'),
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Started Studies',
                'slug' => Str::slug('Started-Studies'),
                'price' => 180,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // // 1 method
        // foreach ($camps as $key => $camp) {
        //    Camps::create($camp);
        // }

        // 2 Method
        Camps::insert($camps);
    }
}

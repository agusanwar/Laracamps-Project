<?php

namespace Database\Seeders;
use Str;
use App\Models\CampBenefit;

use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $campBenefit = [
            [
                'camps_id' => 1,
                'name' => 'Pro Fullstack Tech',
            ],
            [
                'camps_id' => 1,
                'name' => 'iMacbook M1 pro 2020',
            ],
            [
                'camps_id' => 1,
                'name' => '1-1 Mentoring',
            ],
            [
                'camps_id' => 1,
                'name' => 'Final Project Serrificate',
            ],
            [
                'camps_id' => 1,
                'name' => 'Offline Course Project',
            ],
            [
                'camps_id' => 1,
                'name' => 'Future Job Offourtunity',
            ],
            [
                'camps_id' => 1,
                'name' => 'Premium Design kit ',
            ],
            [
                'camps_id' => 1,
                'name' => 'Website And Mobile Builder',
            ],
            [
                'camps_id' => 2,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camps_id' => 2,
                'name' => 'Final Project Sertificate',
            ],
            [
                'camps_id' => 2,
                'name' => 'Offline Course Project',
            ],
        ];
          // // 1 method
        // foreach ($camps as $key => $camp) {
        //    Camps::create($camp);
        // }

        // 2 Method
        CampBenefit::insert($campBenefit);
    }
}

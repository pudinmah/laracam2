<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit'
            ],
          
        ];

        CampBenefit::insert($campBenefits);

    }
}

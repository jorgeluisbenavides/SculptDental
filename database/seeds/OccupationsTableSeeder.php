<?php

use Illuminate\Database\Seeder;
//add
use App\Occupation;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Occupation::class, 10)->create();

        $occupations = [
        	['title' => 'Ama de Casa'],
        	['title' => 'Campesino'],
        	['title' => 'Doctor'],
            ['title' => 'Estudiante']
        ];

        foreach ($occupations as $ocu) {
        	Occupation::create( $ocu );
        }
    }
}

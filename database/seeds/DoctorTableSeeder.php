<?php

use Illuminate\Database\Seeder;

use App\Doctor;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Doctor::class, 5)->create();

        $doctors = [
        	[
        		'name' 					=> 'Juan',
        		'last_name_one' 		=> 'Perez',
        		'last_name_two' 		=> 'Fortoso',
                'full_name'             => 'Perez Fortoso Juan',
        		'speciality' 			=> 'Pediatria',
        		'professional_license' 	=> 'CED1244738333',
        		'cell_phone'			=> '44434344',
        		'home_phone'			=> '23343483',
        		'graduate_university' 	=> 'Benemerita Universidad Autonoma de Puebla'
        	],
        	[
        		'name' 					=> 'Daniel',
        		'last_name_one' 		=> 'Balbuena',
        		'last_name_two' 		=> 'Tellez',
                'full_name'             => 'Balbuena Tellez Daniel',
        		'speciality' 			=> 'Ortodoncia',
        		'professional_license' 	=> 'CED1244228333',
        		'cell_phone'			=> '44564344',
        		'home_phone'			=> '90343483',        		
        		'graduate_university' 	=> 'Tecnologico de Monterrey'
        	],        	
        ];

        foreach ($doctors as $doctor) {
        	Doctor::create( $doctor );
        }
    }
}

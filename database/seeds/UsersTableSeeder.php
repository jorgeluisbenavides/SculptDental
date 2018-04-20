<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
    		Type:
    			1 - Admin
    			2 - Doctor
    			3 - Recep
    	*/
        $users = [
        	[
	        	'name' 			=> 'Marco A.',
	        	'lastname_one'	=> 'Ramirez',
	        	'lastname_two'	=> 'Cesar',
	        	'email' 		=> 'admin@goodental.com',
	        	'type'			=> '1',
	        	'password' 		=> bcrypt('123'),        		
        	],
			[
	        	'name' 			=> 'Jorge L.',
	        	'lastname_one'	=> 'Benavides',
	        	'lastname_two'	=> 'Amable',
	        	'email' 		=> 'benavides_amable@goodental.com',
	        	'type'			=> '1',
	        	'password' 		=> bcrypt('123'),        		
        	],
        	[
	        	'name' 			=> 'Juan',
	        	'lastname_one'	=> 'Perez',
	        	'lastname_two'	=> 'Fortoso',
	        	'email' 		=> 'juan_perez@goodental.com',
	        	'type'			=> '2',
                'doctor_id'     => '1',
	        	'password' 		=> bcrypt('123'),        		
        	],
        	[
	        	'name' 			=> 'Daniel',
	        	'lastname_one'	=> 'Balbuena',
	        	'lastname_two'	=> 'Tellez',
	        	'email' 		=> 'daniel_balvuena@goodental.com',
	        	'type'			=> '2',
                'doctor_id'     => '2',
	        	'password' 		=> bcrypt('123'),        		
        	],
        	[
	        	'name' 			=> 'Dolores',
	        	'lastname_one'	=> 'Tellez',
	        	'lastname_two'	=> 'Sanchez',
	        	'email' 		=> 'dolores_tellez@goodental.com',
	        	'type'			=> '3',
	        	'password' 		=> bcrypt('123'),        		
        	],        	
        ];

        foreach ($users as $user) {
        	User::create( $user );
        }

    }
}
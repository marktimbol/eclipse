<?php

use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$packages = [
    		[
    			'category_id'	=> 1,
    			'name'			=> 'Desert Safari',
    			'subtitle'		=> 'A Thrilling Adventure in the Magnificent Sands of Arabia',
    			'description'	=>	'',
    			'departs'		=>	'14:30 - 15:30',
    			'returns'		=> 	'21:30 - 22:15',
    			'duration'		=>	'7 Hours',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],

    		[
    			'category_id'	=> 1,
    			'name'			=> 'Ovenight Desert Safari',
    			'subtitle'		=> 'A night under the stars',
    			'description'	=>	'',
    			'departs'		=>	'14:30 - 15:30',
    			'returns'		=> 	'08:30 - 09:30',
    			'duration'		=>	'18 Hours',
    			'adult_price'	=>	'400',
    			'child_price'	=>	'250',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],

    		[
    			'category_id'	=> 1,
    			'name'			=> 'Dinner in the Desert',
    			'subtitle'		=> 'Traditional Arabic Dining in a Bedouin',
    			'description'	=>	'',
    			'departs'		=>	'18:00 - 18:45',
    			'returns'		=> 	'21:00 - 22:00',
    			'duration'		=>	'4 Hours',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],    		

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Dune Buggy Drive',
    			'subtitle'		=> 'Action Packed Off Road Exploring',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'12:00 - 12:30',
    			'duration'		=>	'3 Hours',
    			'adult_price'	=>	'550',
    			'child_price'	=>	'390',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],   

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Quad Biking',
    			'subtitle'		=> 'Quad - the experience of a lifetime',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'12:00 - 12:30',
    			'duration'		=>	'3 Hours',
    			'adult_price'	=>	'380',
    			'child_price'	=>	'0',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],      

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Dune Bashing',
    			'subtitle'		=> 'Thrilling Roller Coaster Drive',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'12:00 - 12:30',
    			'duration'		=>	'2-3 Hours',
    			'adult_price'	=>	'250',
    			'child_price'	=>	'120',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		], 

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Sand Boarding',
    			'subtitle'		=> 'Experience the Exhilarating Rush',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'12:00 - 12:30',
    			'duration'		=>	'3 Hours',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],     		         		 		 	

    		[
    			'category_id'	=> 2,
    			'name'			=> 'Camel Ride',
    			'subtitle'		=> 'An adventure whilst experiencing nature',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'12:00 - 12:30',
    			'duration'		=>	'3 Hours',
    			'adult_price'	=>	'370',
    			'child_price'	=>	'370',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],  

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Dubai Marina Tour',
    			'subtitle'		=> 'Panoramic Skyline of New Dubai',
    			'description'	=>	'',
    			'departs'		=>	'',
    			'returns'		=> 	'',
    			'duration'		=>	'2 Hours',
    			'adult_price'	=>	'160',
    			'child_price'	=>	'120',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],    

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Sightseeing Palm Cruise',
    			'subtitle'		=> 'Panoramic views of Glittering sky scrappers',
    			'description'	=>	'',
    			'departs'		=>	'',
    			'returns'		=> 	'',
    			'duration'		=>	'3 Hours',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'175',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],       

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Dhow Dinner Cruise',
    			'subtitle'		=> 'A moonlight dinner onboard a dhow – Simply Divine',
    			'description'	=>	'',
    			'departs'		=>	'',
    			'returns'		=> 	'',
    			'duration'		=>	'3-4 Hours',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'180',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		], 

    		[
    			'category_id'	=> 3,
    			'name'			=> 'Rustar Dhow Dinner Cruise',
    			'subtitle'		=> 'A moonlight dinner onboard a dhow – Simply Divine',
    			'description'	=>	'',
    			'departs'		=>	'',
    			'returns'		=> 	'',
    			'duration'		=>	'3-4 Hours',
    			'adult_price'	=>	'250',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		], 

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Dubai',
    			'subtitle'		=> 'Touring the City of Gold',
    			'description'	=>	'',
    			'departs'		=>	'09:00 - 09:30',
    			'returns'		=> 	'13:00 - 13:30',
    			'duration'		=>	'4 Hours',
    			'adult_price'	=>	'150',
    			'child_price'	=>	'100',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],  

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Abu Dhabi',
    			'subtitle'		=> 'Discover the beautiful capital city of Abu Dhabi',
    			'description'	=>	'',
    			'departs'		=>	'08:00 - 08:30',
    			'returns'		=> 	'',
    			'duration'		=>	'6-7 Hours',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		], 

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Al Ain',
    			'subtitle'		=> 'The Garden City of The Gulf',
    			'description'	=>	'',
    			'departs'		=>	'08:00 - 08:30',
    			'returns'		=> 	'',
    			'duration'		=>	'6-7 Hours',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],    

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Sharjah & Ajman',
    			'subtitle'		=> 'Magnificent show piece of local heritage',
    			'description'	=>	'',
    			'departs'		=>	'08:30 - 09:00',
    			'returns'		=> 	'',
    			'duration'		=>	'4-5 Hours',
    			'adult_price'	=>	'200',
    			'child_price'	=>	'125',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],        		 		     		   		    		          		 		  		   		         		 		 	

    		[
    			'category_id'	=> 4,
    			'name'			=> 'East Coast (Fujaira) Tour',
    			'subtitle'		=> 'A Cultural Experience',
    			'description'	=>	'',
    			'departs'		=>	'08:00',
    			'returns'		=> 	'14:30 - 15:00',
    			'duration'		=>	'6-7 Hours',
    			'adult_price'	=>	'300',
    			'child_price'	=>	'150',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Khasab Tour - Musandam',
    			'subtitle'		=> 'A Calm Oasis & Village',
    			'description'	=>	'',
    			'departs'		=>	'06:00 - 06:30',
    			'returns'		=> 	'19:00 - 20:00',
    			'duration'		=>	'12 Hours',
    			'adult_price'	=>	'495',
    			'child_price'	=>	'350',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],    

    		[
    			'category_id'	=> 4,
    			'name'			=> 'Hatta Mountain Trek Tour',
    			'subtitle'		=> 'Ultimate Location for Endurance Driving',
    			'description'	=>	'',
    			'departs'		=>	'08:00',
    			'returns'		=> 	'15:00',
    			'duration'		=>	'7 Hours',
    			'adult_price'	=>	'350',
    			'child_price'	=>	'250',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],        				        		 		     		   		    		          		 		  		   		         		 		 	

    		[
    			'category_id'	=> 5,
    			'name'			=> 'Wonder Bus Tours',
    			'subtitle'		=> 'A sea & Land Adventure',
    			'description'	=>	'',
    			'departs'		=>	'08:00',
    			'returns'		=> 	'15:00',
    			'duration'		=>	'7 Hours',
    			'adult_price'	=>	'350',
    			'child_price'	=>	'250',
    			'has_time_options'	=> 0,
    			'confirm_availability'	=> 0
    		],        				        		 		     		   		    		          		 		  		   		         		 		 	



    	];
        
    }
}

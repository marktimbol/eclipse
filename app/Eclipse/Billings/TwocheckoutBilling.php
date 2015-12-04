<?php

namespace Eclipse\Billings;

use App\User;

use Twocheckout;
use Twocheckout_Charge;

class TwocheckoutBilling implements BillingGateway {
	
	public function __construct() {

		Twocheckout::privateKey(env('TWOCHECKOUT_PRIVATE_KEY'));
		Twocheckout::sellerId(env('TWOCHECKOUT_ACCOUNT_NUMBER'));
		Twocheckout::sandbox(env('TWOCHECKOUT_SANDBOX'));

	}

	public function charge(User $user, $total, $token) {

		try {
		    $charge = Twocheckout_Charge::auth(array(
		        "merchantOrderId" => time(),
		        "token"      => $token,
		        "currency"   => 'AED',
		        "total"      => $total,
		        "billingAddr" => array(
		            "name" => $user->name,
		            "addrLine1" => '221B Baker Street',
		            "city" => $user->city,
		            "state" => '',
		            "zipCode" => '',
		            "country" => $user->country,
		            "email" => $user->email,
		            "phoneNumber" => $user->phone
		        )
		    ));

		    if ($charge['response']['responseCode'] == 'APPROVED') {
		        
		        return $charge;

		    }
		} catch (Twocheckout_Error $e) {
		
			return $e->getMessage();
		
		}	

	}
}
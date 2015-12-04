<?php

namespace Eclipse\Billings;

use App\User;

class StripeBilling implements BillingGateway {
	
	public function charge(User $user, $total, $token) {

		$amountInUSD = convertAmountInUSD($total);
		
		return $user->charge(round($amountInUSD * 100), [
            'source' => $token,
            'receipt_email' => $user->email,
            'description'  => $user->email . ' paid the booking.'
        ]);   
	}
}
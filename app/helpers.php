<?php

function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	if( func_num_args() == 0 )
	{
		return $flash;
	}

	return $flash->info($title, $message);
}

function companyName() {
	return env('COMPANY_NAME');
}

function companyEmail() {
	return env('COMPANY_EMAIL');
}

function calculateTotalAmount($packages) {

    $subtotal = 0;

    $total = 0;

    foreach( $packages as $package ) {

        $subtotal = ( $package->adult_price * $package->pivot->adult_quantity ) +
                    ( $package->child_price * $package->pivot->child_quantity );

        $total += $subtotal;
    }

    return $total;

}

/**
 * Check to see if the package is subject for availability or no
 */
function subjectForAvailability($package) {

	return $package->options->package->confirm_availability;

}

function bookingReference($data) {

    $paymentGateway = env('PAYMENT_GATEWAY');

    if($paymentGateway == 'stripe') {
        
        return time();
    
    } elseif( $paymentGateway == 'twocheckout') {

        return $data['response']['orderNumber'];

    }

}

function currentCurrency() {

    if( empty( session('currency') ) ) {

        session(['currency' => 'AED']);
    	
    	return session('currency');
    	
    }

    return session('currency');
}

function formatNumber($number) {

	return number_format($number);
	
}

/**
 * Display the converted amount and currency format
 */
function convertedAmountWithCurrency($amount) {

	$converter = app('Eclipse\CurrencyConverter\CurrencyConverter');

	$result = $converter->convert($amount, currentCurrency());
	
	$formattedResult = number_format(floor($result));

	$html = $formattedResult . '&nbsp; <span class="current-currency">' . currentCurrency() .'</span>';

	return $html;

}

/**
 * Convert the amount in USD for Stripe payment
 */
function convertAmountInUSD($amount) {

	$toCurrency = 'USD';

	$converter = app('Eclipse\CurrencyConverter\CurrencyConverter');

	return $converter->convert($amount, $toCurrency);

}

function photoUrl($path) {
	return '<img src="'. asset($path) .'" 
			alt="" 
			title=""
			class="responsive-img img-rounded" />';
}

function display($photos, $class='', $width = '') {
	
	if( count($photos) > 0 ) {
		foreach( $photos as $photo ) {
			return '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					width="'.$width.'"
					class="responsive-img '.$class.'" />';
		}

	} else {
		return defaultImage();
	}
}

function displayAll($photos, $class='') {
	if( count($photos) > 0 ) {
		$html = '';
		foreach( $photos as $photo ) {
			$html .= '<img src="'. asset('/images/uploads/'.$photo->path) .'" 
					alt="'.$photo->imageable->name .'" 
					title="'.$photo->imageable->name.'" 
					class="responsive-img '.$class.'" />';
		}

		return $html;
		
	} else {
		return defaultImage();
	}
}

function getUploadedPhoto($filename) {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/uploads/'. $filename).'" 
					alt="" 
					title=""
					class="img-responsive img-rounded" />';
	} else {
		return defaultImage($title);
	}
}

function getPhoto($filename, $title = "Eclipse Tourism", $class="img-rounded") {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'"
					class="responsive-img '.$class.'" />';
	} else {
		return defaultImage($title);
	}
}

function getEmailAsset($filename, $title = "Eclipse Tourism") {
	if( ! empty($filename) ) {
		return '<img src="'.asset('images/email/'. $filename).'" 
					alt="'. $title.'" 
					title="'.$title .'"
					class="responsive-img" />';
	} else {
		return defaultImage($title);
	}
}

function defaultImage($title = "Eclipse Tourism") {
	return '<img src="'.asset('/images/default.jpg').'" 
				alt="'. $title.'" 
				title="'.$title .'" 
				width=70
				class="img-responsive responsive-img" />';
}
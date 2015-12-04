<?php
namespace Eclipse\Mailers;

use App\User;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;

class UserMailer extends Mailer {	

	protected $user;

	protected $booking;

	public function __construct(UserRepositoryInterface $user, BookingRepositoryInterface $booking) {
		
		$this->user = $user;

		$this->booking = $booking;
	}

	public function sendPaymentReceipt(User $user, $booking_reference) {

		$subject = sprintf('%s: %s', companyName(), 'Your Payment Receipt');

		$view = 'emails.payment-receipt';

		$result = $this->booking->findByReference($booking_reference);

		$customerData = $result->user;

		$bookedPackages = $result->packages;

		$this->sendTo($user->email, $subject, $view, $customerData, $bookedPackages);

	}

	public function sendBookingConfirmation($user_id, $booking_reference) {
		
		$subject = sprintf('%s: %s', companyName(), 'Your Booking Date was confirmed!');

		$view = 'emails.booking-confirmation';

		$user = $this->user->find($user_id);

		$bookedPackages = $this->booking->findByReference($booking_reference);

		$this->sendTo($user->email, $subject, $view, $user, $bookedPackages);
		
	}
	

	public function sendBookingInformation(User $user, $booking_reference) {
		
		$subject = sprintf('%s: %s', companyName(), 'Your Booking Information');

		$view = 'emails.booking-information';

		$result = $this->booking->findByReference($booking_reference);

		$bookedPackages = $result->packages;

		$this->sendTo($user->email, $subject, $view, $user, $bookedPackages);

	}	

	public function sendPurchaseError(User $user) {

		$subject = sprintf('%s: %s', companyName(), 'Your purchase was not successfully processed.');

		$view = '';

		$data = [];

		$this->sendTo($user->email, $subject, $view, $data);

	}	

	public function sendBookingError(User $user) {

		$subject = sprintf('%s: %s', companyName(), 'Your booking was not successfully processed.');

		$view = '';
		
		$data = [];

		$this->sendTo($user->email, $subject, $view, $data);

	}		

}
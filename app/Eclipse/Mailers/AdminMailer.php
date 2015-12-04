<?php
namespace Eclipse\Mailers;

use App\User;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;

class AdminMailer extends Mailer {	

	protected $user;

	protected $booking;

	public function __construct(UserRepositoryInterface $user, BookingRepositoryInterface $booking) {

		$this->user = $user;

		$this->booking = $booking;
	}

	public function sendPurchaseNotification(User $user, $booking_reference) {

		$subject = sprintf('%s: %s', companyName(), 'New Online Booking Notification');

		$view = 'emails.admin.new-purchase-notification';

		$adminEmail = env('COMPANY_EMAIL');

		$result = $this->booking->findByReference($booking_reference);

		$bookedPackages = $result->packages;

		$this->sendTo($adminEmail, $subject, $view, $user, $bookedPackages);

	}

	public function sendBookingNotification(User $user, $booking_reference) {

		$subject = sprintf('%s: %s', companyName(), 'New Online Booking Notification.');

		$view = 'emails.admin.new-booking-notification';
	
		$adminEmail = env('COMPANY_EMAIL');

		$result = $this->booking->findByReference($booking_reference);

		$bookedPackages = $result->packages;		

		$this->sendTo($adminEmail, $subject, $view, $user, $bookedPackages);

	}

}
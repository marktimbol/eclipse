<?php

namespace Eclipse\Mailers;

use App\Message;
use App\User;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;

class AdminMailer extends Mailer {	

	protected $user;

	protected $booking;

	protected $adminEmail;

	public function __construct(UserRepositoryInterface $user, BookingRepositoryInterface $booking)
	{
		$this->user = $user;
		$this->booking = $booking;
		$this->adminEmail = env('COMPANY_EMAIL');
	}

	public function sendPurchaseNotification(User $user, $booking_reference)
	{
		$subject = sprintf('%s: %s', companyName(), 'New Online Booking Notification');

		$view = 'emails.admin.new-purchase-notification';

		$result = $this->booking->findByReference($booking_reference);

		$bookedPackages = $result->packages;

		$this->sendTo($this->adminEmail, $subject, $view, $user, $bookedPackages);

	}

	public function sendBookingNotification(User $user, $booking_reference)
	{
		$subject = sprintf('%s: %s', companyName(), 'New Online Booking Notification.');

		$view = 'emails.admin.new-booking-notification';
	
		$result = $this->booking->findByReference($booking_reference);

		$bookedPackages = $result->packages;		

		$this->sendTo($this->adminEmail, $subject, $view, $user, $bookedPackages);

	}

	public function sendEnquiry(Message $message)
	{
		$subject = 'Enquiry from the website';

		$view = 'emails.admin.new-enquiry';

		$this->sendTo($this->adminEmail, $subject, $view, [], $message );
	}

}
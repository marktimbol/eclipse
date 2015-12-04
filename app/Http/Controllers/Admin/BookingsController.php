<?php

namespace App\Http\Controllers\Admin;

use App\Events\BookingWasConfirmed;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class BookingsController extends Controller
{

    protected $booking;

    protected $user;

    public function __construct(BookingRepositoryInterface $booking, UserRepositoryInterface $user) {

        $this->booking = $booking;

        $this->user = $user;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userWithBookings = $this->user->all();

        return view('admin.bookings.index', compact('userWithBookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm($booking_reference, $user_id) {

        event( new BookingWasConfirmed($user_id, $booking_reference) );

        flash()->success( companyName(), 'An email was sent to the customer.');

        return redirect()->route('admin.bookings.index');
    }   
}

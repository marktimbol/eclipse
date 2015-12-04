@extends('admin.layouts.admin')

@section('pageTitle', 'Bookings')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1 class="page-header">Bookings</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Booking #</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <th>&nbsp;</th>
                    </tr>   
                </thead>

                <tbody>

                    @forelse( $userWithBookings as $user )
                        @foreach($user->bookings as $booking) 
                            <?php 
                                $booking_reference = $booking->booking_reference;
                                $status = $booking->status;
                            ?>
                        @endforeach                    
                        <tr class="{{ $status ? '' : 'danger' }}">
                            <td>{{ $booking_reference }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ sprintf('%s, %s', $user->city, $user->country) }}</td>
                            <td>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#bookingInformation{{$user->id}}">
                                    View Booking
                                </button>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="6">No bookings yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @include('admin.bookings.show') <!-- modal view -->

        </div>
    </div>
@endsection
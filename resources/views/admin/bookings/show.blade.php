@foreach( $userWithBookings as $user )

    <?php
        $booking_reference = $user->bookings->first()->booking_reference
    ?>

    <div class="modal fade" id="bookingInformation{{$user->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Booking Reference: {{ $booking_reference }}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                                <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
                                <li class="list-group-item"><strong>Address 1:</strong> {{ $user->address1 }}</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Address 2:</strong> {{ $user->address2 }}</li>
                                <li class="list-group-item"><strong>City:</strong> {{ $user->city }}</li>
                                <li class="list-group-item"><strong>State:</strong> {{ $user->state }}</li>
                                <li class="list-group-item"><strong>Country:</strong> {{ $user->country }}</li>
                            </ul>  
                        </div>
                    </div>

                    <div class="cart">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th class="text-right">Subtotal</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $total = 0; ?>

                                @foreach($user->bookings as $booking)
                                    
                                    <?php 
                                        $status = $booking->status; 
                                        $booking_reference = $booking->booking_reference;
                                    ?>

                                    @foreach($booking->packages as $package)
                                        <tr>
                                            <td width="500">
                                                <p>
                                                    {{ $package->name }}
                                                </p>
                                                <p class="text-muted">
                                                    <i class="fa fa-calendar"></i> 
                                                    {{ $package->pivot->date }}
                                                    {{ $package->pivot->time }}
                                                </p>

                                                <ul class="collection">
                                                    <li class="collection-item">
                                                        Child:
                                                        {{ $package->pivot->child_quantity }} &times; 
                                                        {{ number_format($package->child_price) }} <span class="current-currency">AED</span>
                                                    </li>
                                                </ul>
                                                
                                            </td>

                                            <td class="nowrap">{{ number_format($package->adult_price) }}  <span class="current-currency">AED</span></td>
                                            
                                            <td>
                                                {{ $package->pivot->adult_quantity }}
                                            </td>

                                            <td class="text-right nowrap">
                                                <?php
                                                $subtotal =  ($package->adult_price * $package->pivot->adult_quantity) + ($package->child_price * $package->pivot->child_quantity);
                                                ?>
                                                {{ number_format($subtotal) }} <span class="current-currency">AED</span>
                                            </td>

                                            <?php 
                                                $total += $subtotal; 
                                            ?>
                                        </tr>
                                    @endforeach

                                @endforeach

                                <tr>
                                    <td colspan="4">
                                        <h4 class="text-right">Total: {{ number_format($total) }} <span class="current-currency">AED</span></h4>
                                    </td>
                                </tr>

                            </tbody>   
                        </table>

                        @if( $status == 0 )

                            <div class="alert alert-danger">
                                <p class="text-center">NOT YET PAID</p>
                            </div>  

                            <form method="POST" action="{{ route('bookings.confirm', [ $booking_reference, $user->id ]) }}">
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-success">
                                    Date is confirmed, send the confirmation email to customer
                                </button>

                            </form>
                        @elseif( $status == 1)
                            <div class="alert alert-success">
                                <p class="text-center">PAID</p>
                            </div>  
                        @endif                        
                    </div>                            

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endforeach
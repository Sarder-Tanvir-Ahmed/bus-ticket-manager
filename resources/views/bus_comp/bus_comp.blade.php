@extends('layouts.app')

@section('content')

<style>
    .rwd-table {
        width: 95%;
    }
</style>

    <!--End sidebar-wrapper-->

    <div class="container-fluid">
        <!-- show cancel request -->

        <div class="row py-4">
            <div class="col-12 col-lg-12">
                <div class="card bg-yelish border-black">
                    <div class="card-header">
                        <h4 class="heading tcenter">Cancel Requests </h4>
                    </div>
                    <div>


                        <form action="cancel_sold_tickets" method="POST">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <table class="rwd-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Cumtomer Ticket Number</th>
                                            <th class="text-center">Ticket ID</th>
                                            <th class="text-center">Customer Name</th>
                                            <!-- <th>Bus Company ID</th>
                                                    <th>Bus Company Name</th> -->
                                            <th class="text-center">Seat Count</th>
                                            <th class="text-center">Seat Numbers</th>
                                            <th class="text-center">Cancel Request</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($soldtickets as $item)
                                        @if($item['cancel_ticket_request'] == 1)
                                        <tr>
                                            <td class="text-center">{{ $item['id'] }}</td>
                                            <td class="text-center">{{ $item['TicketID'] }}</td>

                                            <td class="text-center">{{ $item['customer_name'] }} </td>
                                            <!-- <td class="text-center">{{ $item['bus_comp_id'] }}</td>
                                                            <td class="text-center">{{ $item['bus_comp_name'] }} </td> -->
                                            <td class="text-center">{{ count(unserialize($item['seats'])) }}</td>
                                            <!-- <td class="text-center">{{ $item['seats'] }}</td> -->
                                            <td>
                                                @foreach( unserialize($item['seats']) as $i)
                                                <p class="text-center"> {{ $i }}</p>

                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center mt-4">
                                                    <div class="form-group center">
                                                        <input type="hidden" name="TicketID" value="{{ $item -> TicketID}}">
                                                        <input type="hidden" name="booked_seats" value="{{ $item -> seats}}">
                                                        <button onclick="saveValue(this);" name="customer_bought_ticket_id" value="{{ $item->id }}" type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Cancel Ticket</button>
                                                    </div>
                                                </div>







                                            </td>

                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        <!-- show cancel request ends -->
        <br>
        <br>



        <!--show all ticket-->

        <!--Start Dashboard Content-->
        <!-- sold tickets -->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card bg-yelish border-black">
                    <div class="card-header">
                        <h4 class="heading tcenter">Sold Tickets </h4>
                    </div>
                    <div>
                        <form action="cancel_sold_tickets" method="POST">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <table class="rwd-table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Cumtomer Ticket Number</th>
                                            <th>Ticket ID</th>
                                            <th>Customer Name</th>
                                            <!-- <th>Bus Company ID</th>
                                                    <th>Bus Company Name</th> -->
                                            <th>Seat Count</th>
                                            <th>Seat Numbers</th>
                                            <th>Revenue</th>
                                            <th>Cancel </th>
                                        </tr>
                                    </thead>


                                    <!-- Fectching item  information -->
                                    <tbody>

                                        @foreach($soldtickets as $item)
                                        <tr>
                                            <td class="text-center">{{ $item['id'] }}</td>
                                            <td class="text-center">{{ $item['TicketID'] }}</td>
                                            <td class="text-center">{{ $item['customer_name'] }} </td>
                                            <!-- <td class="text-center">{{ $item['bus_comp_id'] }}</td>
                                                        <td class="text-center">{{ $item['bus_comp_name'] }} </td> -->
                                            <td class="text-center">{{ count(unserialize($item['seats'])) }}</td>
                                            <!-- <td class="text-center">{{ $item['seats'] }}</td> -->
                                            <td class="text-center">{{ $item['total_price'] }}</td>
                                            <td>
                                                @foreach( unserialize($item['seats']) as $i)
                                                <p class="text-center"> {{ $i }}</p>

                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="hidden" name="TicketID" value="{{ $item -> TicketID}}">
                                                    <input type="hidden" name="booked_seats" value="{{ $item -> seats}}">
                                                    <button onclick="saveValue(this);" name="customer_bought_ticket_id" value="{{ $item->id }}" type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Cancel Ticket</button>
                                                </div>

                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="card table-color">
                <div class="card-body">

                    TOTAL REVENUE (BDT): {{ collect($soldtickets)->sum('total_price') }} TK

                </div>
            </div>
        </div>
        <!-- sold tickets ends-->
        <br>
        <br>
        <!--End Dashboard Content-->
        <!--show all ticket-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card bg-yelish border-black">
                    <div class="card-header">
                        <h4 class="tcenter heading">All Available Tickets </h4>
                    </div>
                    <div class="d-flex justify-content-center">
                        <table class="rwd-table">
                            <thead>
                                <tr>
                                    <th>Ticket-ID</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Departure</th>
                                    <th>Available Seats</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($brandSpecifiedTicket as $item)
                                <tr>
                                    <td> {{ $item->id}} </td>
                                    <td> {{ $item->b_comp_ticket_from}} </td>
                                    <td> {{ $item->b_comp_ticket_to}} </td>
                                    <td> {{ $item->b_comp_ticket_date}} </td>
                                    <td> {{ $item->b_comp_ticket_seat}} </td>
                                    <td> {{ $item->b_comp_ticket_price}} </td>
                                    <td> {{ $item->created_at   }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--show all ticket ends==-->
        <br>
        <!--show all expired ticket-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card bg-yelish border-black">
                    <div class="card-header">
                        <h4 class="heading tcenter">Expired Tickets</h4>
                    </div>
                    <div class="d-flex justify-content-center">
                        <table class="rwd-table">
                            <thead>
                                <tr>
                                    <th>Ticket-ID</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Departure</th>
                                    <th>Available Seats</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($brandSpecifiedExpiredTicketDate as $item)
                                <td> {{ $item->id}} </td>
                                <td> {{ $item->b_comp_ticket_from}} </td>
                                <td> {{ $item->b_comp_ticket_to}} </td>
                                <td> {{ $item->b_comp_ticket_date}} </td>
                                <td> {{ $item->b_comp_ticket_seat}} </td>
                                <td> {{ $item->b_comp_ticket_price}} </td>
                                <td> {{ $item->created_at   }} </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--show all expired ticket ends==-->
        <br>
        <!-- start ticket form--->
        <form action="BrandAddTicketSubmit" method="POST">
            @csrf
            <div class="card bg-yelish border-black">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="heading tcenter">Register New Ticket</h4>
                    </div>
                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="from">
                                <H6>From:</H6>
                            </label>
                            <!-- <input type="text" class="form-control" id="from-place" placeholder="Dhaka, Bangladesh"/> -->
                            <select required class="form-control form-control-rounded" name="Start_RouteName" id="input-6" placeholder="select">>
                                @foreach($allRoutes as $item)
                                <option onkeyup="saveValue(this);" value="{{ $item->route_name }}"> {{ $item->route_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="from">
                                <H6>To:</H6>
                            </label>
                            <select required class="form-control form-control-rounded" name="Destination_RouteName" id="input-6" placeholder="select">>
                                @foreach($allRoutes as $item)
                                <option onkeyup="saveValue(this);" value="{{ $item->route_name }}"> {{ $item->route_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="quantity">
                                <H6>Seats:</H6>
                            </label>
                            <input name="No_Seats" type="number" class="form-control rounded-0" placeholder="Seats" required="" min="0" max="40" step="1" pattern="\d*">
                        </div>
                    </div>
                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="quantity">
                                <H6>Time:</H6>
                            </label>
                            <input class="form-control rounded-0" type="datetime-local" id="starttime" name="Start_Time" onfocus="(this.type='datetime-local')" onblur="(this.type='datetime-local')">
                        </div>
                    </div>
                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="quantity">
                                <H6>Price(BDT):</H6>
                            </label>
                            <input name="Ticket_Price" type="number" class="form-control rounded-0" placeholder="BDT" value="1000" required="" min="200" max="10000" step="1" pattern="\d*">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Submit-Ticket</button>
                    </div>
                </div>
            </div>
        </form>

        <br>
        <!--delete ticket-->
        <form action="BrandDeleteTicketSubmit" method="POST">
            @csrf
            <div class="card bg-yelish border-black">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="heading tcenter">Remove Ticket</h4>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="input-6">Remove</label>
                        <select required class="form-control form-control-rounded" name="ticket_delete" id="input-6" placeholder="select">>
                            @foreach($brandSpecifiedTicket as $item)
                            <option onkeyup="saveValue(this);" value="{{ $item->id }}"> Ticket-ID: {{ $item->id}} </option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i> Remove</button>
                    </div>

                </div>
            </div>
        </form>
        <!--end ticket form -->

        <button class="btn btn-outline-secondary"><i class="icon-lock"></i>>
            <a href="{{ route('edit_ticket') }}">Edit Ticket!</a>
        </button>
    </div>


@endsection
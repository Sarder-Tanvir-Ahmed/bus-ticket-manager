@extends('layouts.app')

@section('content')


<div id="wrapper">
    <div class=" container-fluid">
        <!-- search bar -->
        <div class="d-flex justify-content-center py-4">
            <form class="seventyvw" action="buy_ticket" method="POST">
                @csrf
                <div class="card bg-yelish">
                    <div class="card-body">
                        <div class="card-title">
                            <H4>Ticket</H4>
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
                        <!-- <div class="col-xxs-12 col-xs-6 mt">
                                <div class="input-field">
                                    <label for="quantity">
                                        <H6>Seats:</H6>
                                    </label>
                                    <input name="No_Seats" type="number" class="form-control rounded-0" placeholder="Seats" required="" min="0" max="41" step="1" pattern="\d*">
                                </div>
                            </div> -->
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

                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <!-- search bar ends -->

        <!--show all ticket ends==-->
        <br>
        <form action="BuyingTheSelectedTicket" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <table class="rwd-table">
                    <thead>
                        <tr>

                            <th>Ticket-ID</th>
                            <th>Company Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Departure</th>
                            <th>Available Seats</th>
                            <th>Price</th>
                            <th>Created At</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $item)
                        <tr>
                            <td> {{ $item->id}} </td>
                            <td> {{ $item->b_comp_ticket_author_name}} </td>
                            <td> {{ $item->b_comp_ticket_from}} </td>
                            <td> {{ $item->b_comp_ticket_to}} </td>
                            <td> {{ $item->b_comp_ticket_date}} </td>
                            <td> {{ $item->b_comp_ticket_seat}} </td>
                            <td> {{ $item->b_comp_ticket_price}} </td>
                            <td> {{ $item->created_at   }} </td>

                            <td>
                                <div class="form-group">
                                    <button onclick="saveValue(this);" name="ticket_id" value="{{ $item->id }}" type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Buy</button>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <!-- <div class="form-group">
                                <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Submit-Ticket</button>
                        </div> -->
            </div>
        </form>

        <!--end ticket form -->
    </div>
</div>


@endsection
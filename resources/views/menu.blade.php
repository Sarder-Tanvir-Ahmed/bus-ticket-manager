@extends('layouts.app')

@section('content')



<!-- Start wrapper-->
<style>

    .rwd-table{
        width: 95%;
    }
</style>



<div class="content-wrapper">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card bg-yelish my-4 mb-4 border-black">
                    <div class="card-header">
                        <h4 class="heading tcenter"> Menu </h4>
                    </div>
                    <div class="d-flex justify-content-center">
                        <table class="rwd-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ticket ID</th>
                                    <th>Name</th>
                                    <th>Price</th>


                                </tr>
                            </thead>
                            <tbody>


                                @foreach($allshoppingitems as $item)
                                <tr>

                                    <td> {{ $item->item_id}} </td>
                                    <td> {{ $item->ticket_id}} </td>
                                    <td> {{ $item->name}} </td>
                                    <td> {{ $item->price}} </td>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!--end Dashboard Content -->

        <form action="addToMenu" method="POST">
            @csrf
            <div class="card bg-yelish border-black">
                <div class="card-body">
                    <div class="card-title">
                        <H4 class="heading tcenter">New item</H4>
                    </div>

                    <hr>

                    <hr>
                    <div class="form-group">
                        <label for="input-6">Ticket</label>
                        <select required class="form-control form-control-rounded" name="ticket_id" id="input-6" placeholder="select">>
                            @foreach($brandSpecifiedTicket as $item)
                            <option onkeyup="saveValue(this);" value="{{ $item->id }}"> Ticket-ID: {{ $item->id}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                            <label for="text">
                                <H6>Name:</H6>
                            </label>
                            <input name="item_name" type="text" class="form-control rounded-0" placeholder="Name of item" required="">
                        </div>
                    </div>
                    <hr>

                    <hr>
                    <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">

                            <label for="quantity">
                                <H6>Price(BDT):</H6>
                            </label>
                            <input name="item_Price" type="number" class="form-control rounded-0" placeholder="BDT" value="10" required="" min="1" max="10000" step="1" pattern="\d*">
                        </div>
                    </div>
                    <hr>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Add Food </button>
                    </div>
                </div>
            </div>
        </form>

        <br>


    </div>
</div>
<!---------------------------------->







@endsection
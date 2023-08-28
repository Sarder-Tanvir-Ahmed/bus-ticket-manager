@extends('layouts.app')

@section('content')
<style>
    .rwd-table{
        min-width: 100%;
    }
    .transparent{
        background-color: hsla(0, 0%, 0%, 0.5);
        background-color: transparent;
        border: 1px solid black;
        padding: 2em;
    }
</style>
<!-- 
<div id="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid"> -->

            <form action="submit_seat" method="POST">
                @csrf
                <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                    <div class="transparent">
                        <div class="card-title">
                            <H4 class="heading">Bus seat</H4>
                        </div>
                        <hr>
                        <table class="rwd-table">
                            <thead>
                                <tr class="text-center">
                                    <th>Coloumn A</th>
                                    <th>Coloumn B</th>
                                    <th>Coloumn C</th>
                                    <th>Coloumn D</th>
                                </tr>
                            </thead>


                            <!-- Fectching item  information -->
                            <tbody>

                                @for ($i = 1; $i < count($empty_seat); $i=$i+4) <tr>

                                    <td class="text-center">
                                        @if ($empty_seat[$i] == False)
                                        <input type="checkbox" name="seat[]" value="{{ $i }}"> {{ $i }}<br>
                                        @else
                                        <p>{{ $i }}</p>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if ($empty_seat[$i+1] == False)
                                        <input type="checkbox" name="seat[]" value="{{ $i+1 }}"> {{ $i+1 }}<br>
                                        @else
                                        <p>{{ $i+1 }}</p>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if ($empty_seat[$i+2] == False)
                                        <input type="checkbox" name="seat[]" value="{{ $i+2 }}"> {{ $i+2 }}<br>
                                        @else
                                        <p>{{ $i+2 }}</p>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if ($empty_seat[$i+3] == False)
                                        <input type="checkbox" name="seat[]" value="{{ $i+3 }}"> {{ $i+3 }}<br>
                                        @else
                                        <p>{{ $i+3 }}</p>
                                        @endif
                                    </td>



                                    </tr>

                                    @endfor


                            </tbody>

                        </table>
                        <input type="hidden" name="TicketID" value={{$TicketID}}>
                        <input type="hidden" name="tickets" value={{$Ticket}}>
                        <input type="hidden" name="b_comp_ticket_author_id" value={{$b_comp_ticket_author_id}}>
                        <input type="hidden" name="b_comp_ticket_author_name" value={{$b_comp_ticket_author_name}}>
                        <input type="hidden" name="empty_seat" value={{$Empty_seat}}>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Submit</button>
                        </div>
                    </div>
                <!-- </div> -->
            </form>

            <br>




            <!--  -->

            <!--end ticket form -->
        </div>
    <!-- </div>
</div>
</div> -->


@endsection
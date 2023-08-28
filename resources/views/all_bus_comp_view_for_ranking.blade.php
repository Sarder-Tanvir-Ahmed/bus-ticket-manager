@extends('layouts.app')

@section('content')


<style>
    
        .rwd-table {
            margin: 1em 0;
            min-width: 50%;
            min-height: 30vh;
        }
</style>

<!-- Start wrapper-->
<div id="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid">


            <h1 class="heading tcenter py-4">Bus Companies</h1>
            <form action="rating_of_bus_comp" method="POST">
                @csrf
                <div class="d-flex justify-content-center">
                    <table class="rwd-table">
                        <thead>
                            <tr >
                                <th>Bus Company Name</th>
                                <th>Email</th>
                                <th>Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allBusComp as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>

                                <td>
                                    <div class="form-group flex jcenter">
                                        <button onclick="saveValue(this);" name="comp_id" value="{{ $item->id }}" type="submit" class="btn">Feedback</button>
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

        </div>
    </div>
</div>
<!---------------------------------->

<!--start overlay-->
<!--end overlay-->
<!-- End container-fluid-->
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<!--End Back To Top Button-->

<!--Start footer-->
<!-- <footer class="footer">
        <div class="container">
        </div>
    </footer> -->
<!--End footer-->





@endsection
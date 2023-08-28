@extends('layouts.app')

@section('content')
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        user-select: none;
    }

    .gold {
        background-color: gold;
    }

    .align-flex-start {
        align-content: flex-start;
    }

    .head {
        width: 100%;
        /* justify-content: center; */
    }

    .frameContainer {
        height: 50vh;
        /* border: 1px solid black; */
        position: relative;
    }

    .frameP {
        position: relative;
        /* top: 50%; */
        height: 50vh;
        /* left: 25%; */
        /* width: 70%; */
        /* height: 400px; */
        margin-top: -200px;
        margin-left: -200px;
        border-radius: 2px;
        box-shadow: 1px 2px 10px 0px rgba(0, 0, 0, 0.3);
        background: #CA7C4E;
        background: -webkit-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
        background: -moz-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
        background: -o-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
        background: linear-gradient(to top right, #EEBE6C 0%, #CA7C4E 100%);
        filter: progid:DXimagePTransform.Microsoft.gradient(startColorstr='#EEBE6C', endColorstr='#CA7C4E', GradientType=1);
        color: #786450;
        font-family: 'Open Sans', Helvetica, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .centerP {
        position: absolute;
        /* top: 50px; */
        /* left: 40px; */
        height: 95%;
        width: 95%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* background: #fff; */
        /* border-radius: 3px; */
        overflow: hidden;
        box-shadow: 10px 10px 15px 0 rgba(0, 0, 0, 0.3);
        display: flex;

    }

    .left-side {
        /* border: 2px double red; */
        width: 30%;
        height: 100%;
        background-color: #F9C403;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .right-side {
        border: 2px double black;
        width: 70%;
    }

    .profileP {
        /* width: 200px; */
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .profileP .imageP {
        position: relative;
        width: 70px;
        height: 70px;
        margin: 38px auto 0 auto;
    }

    .profileP .imageP .circle-1,
    .profileP .imageP .circle-2 {
        position: absolute;
        box-sizing: border-box;
        width: 76px;
        height: 76px;
        top: -3px;
        left: -3px;
        border-width: 1px;
        border-style: solid;
        border-color: #786450 #786450 #786450 transparent;
        border-radius: 50%;
        transition: all 1.5s ease-in-out;
    }

    .profileP .imageP .circle-2 {
        width: 82px;
        height: 82px;
        top: -6px;
        left: -6px;
        border-color: #786450 transparent #786450 #786450;
    }

    .profileP .imageP img {
        display: block;
        border-radius: 50%;
        background: #f5e8df;
    }

    .profileP .imageP:hover {
        cursor: pointer;
    }

    .profileP .imageP:hover .circle-1,
    .profileP .imageP .imageP:hover .circle-2 {
        transform: rotate(360deg);
    }

    .profileP .imageP:hover .circle-2 {
        transform: rotate(-360deg);
    }

    .profileP .nameP {
        font-size: 3rem;
        font-weight: 600;
        margin-top: 20px;
    }

    .profileP .jobP {
        font-size: 2rem;

        line-height: 15px;
    }

    .profileP .actionsP {
        margin-top: 33px;
    }

    .actionsP .btn {
        text-align: center;

    }


    .stats {
        display: flex;
        flex-wrap: wrap;
        height: 100%;
        flex-direction: column;
        justify-content: center;
    }

    .stats .box {
        box-sizing: border-box;
        width: 100%;
        height: 40%;
        display: flex;
        flex-direction: column;
        text-align: center;
        /* padding: 1rem; */
        /* margin:1rem; */
        transition: all 0.4s ease-in-out;
    }

    .stats .box:hover {
        background: #e1cfc2;
        cursor: pointer;
    }

    /* .stats .box:nth-child(2) {
        margin: 1px 0;
    } */

    .stats span {
        display: block;
        margin: auto;
    }

    .stats .value {
        font-size: 18px;
        font-weight: 600;
    }

    .stats .parameter {
        font-size: 11px;
    }

    .textarea {
        outline: none;
        resize: none;
        width: 90%;
        margin: auto;
        height: 120px;
        border: 2px solid #000;
        border-radius: 10px;
        font-size: 1.3rem;
        padding: 0.6rem 1.8rem;
        line-height: 1.7rem;
        background: transparent;
        transition: 2s ease
    }

    textarea:focus,
    textarea:active,
    .rate:focus,
    .rate:active {
        border: 2px solid #f3cc3e;
        box-shadow: 0 0 0 2px #f3cc3e;
        transition: 2s ease
    }

    .textarea {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .textarea p {
        font-size: 1.2rem;
    }

    .rate {
        outline: none;
        width: 90%;
        border: 2px solid #000;
        margin: auto;
        border-radius: 10px;
        font-size: 1.3rem;
        padding: 0.6rem 1.8rem;
        line-height: 1.7rem;
        background: transparent;
        transition: 2s ease;

    }

    label {
        display: block;
    }

    .form-group button {
        display: block;
        width: 90%;
        margin: auto;
    }

    .Rating,
    .Review,
    .form-group {
        /* border: 1px solid red; */
        width: 100%;
        /* background-color: #CA7C4E; */
    }
</style>
<!-- <div class="content-wrapper"> -->
<div class="container-fluid">
    
    <form action="submit_rating" class="frameContainer" method="POST">
        @csrf
        <div class="centerP">

            <input type="hidden" name="company_id_to_show_rating" value={{$company_id_to_show_rating}}>
            <div class="left-side">
                <div class="profileP">
                    <div class="Rating">
                        <label for="quantity">
                            <h6>Rating (1 to 5):</h6>
                        </label>
                        <input name="rating" type="number" class="rate" required="" min="1" max="5" step="1">
                    </div>
                    <!-- <input type="hidden" name="company_id_to_show_rating" value={{$company_id_to_show_rating}}> -->
                    <div class="Review">
                        <label for="quantity">
                            <h6>Share your experience:</h6>
                        </label>
                        <textarea name="review" type="text" class="textarea" placeholder="Let us know..." required=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary"><i class="icon-lock"></i>Submit</button>
                    </div>
                    <!-- !!!! -->

                </div>
            </div>

        </div>
    </form>
    
        <div class="d-flex justify-content-center">
            <table class="rwd-table">
                <thead>
                    <tr>
                        <th>rating_id </th>
                        <th>bus_comp_id </th>
                        <th>company_name </th>
                        <th>customer_id </th>
                        <th>customer_name </th>
                        <th>review </th>
                        <th>rating </th>
                        <th>created_date </th>
                        <th>updated_date </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($company_rating as $item)
                    <tr>
                        <td>{{ $item->rating_id }}</td>
                        <td>{{ $item->bus_comp_id }}</td>
                        <td>{{ $item->company_name }}</td>
                        <td>{{ $item->customer_id }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->review }}</td>
                        <td>{{ $item->rating }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
</div>
<!-- </div> -->


@endsection
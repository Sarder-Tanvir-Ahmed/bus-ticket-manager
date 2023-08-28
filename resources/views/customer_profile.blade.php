@extends('layouts.app')

@section('content')

<style>
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
</style>

<!-- Sidebar and content wrapper -->

<div class="container-fluid">

    <!-- Customer profileP Section -->
    <div class="frameContainer">
        <div class="centerP">
            <div class="left-side">
                <div class="profileP">
                    <div class="imageP">
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <img src="{{asset('food_images/anoprofile.jpeg')}}" width="70" height="70" alt="Jessica Potter">
                    </div>
                    <div class="user-details">
                        <div class="nameP">{{$user -> name}}</div>
                        <div class="jobP">{{$user -> email}}</div>

                    </div>

                    <div class="actionsP">
                        <a href="{{ route('profile_edit') }}" class="btn">
                            Edit profile!
                        </a>
                        <!-- <button class="btn">Follow</button> -->
                        <!-- <button class="btn">Message</button> -->
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="stats">
                    <div class="box bg-yelish">
                        <span class="value">{{ (new DateTime($user->created_at))->format('F j, Y - g:i A') }}</span>
                        <span class="parameter">Profile Created</span>
                    </div>
                    <div class="box bg-yelish">
                        <span class="value">{{ (new DateTime($user->updated_at))->format('F j, Y - g:i A') }}</span>
                        <span class="parameter">Last Updated</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- <hr>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('profile_edit') }}" class="btn">
                <i class="icon-lock"></i> Edit profile!
            </a>
        </div>
        <br>  -->


<!-- Services Description Section -->
<div class="containerA">
    <div class="headerA">
        <h3 class="text-center heading">Explore EasyGo Services</h3>
        <p class="text-center ">We're here to provide you with convenient and comfortable travel experiences.</p>

    </div>
    <div class="showA">
        <div class="featureA width-one-third">
            <div class="imageA">
                <a href="https://imgbb.com/"><img src="{{asset('food_images/ticket.jpg')}}" alt="Bus Ticket Booking"></a>
            </div>
            <div class="contentA">
                <h4>Bus Ticket Booking</h5>
                    <p>Book your bus tickets hassle-free and enjoy your journey.</p>
            </div>
        </div>
        <div class="featureA width-one-third">
            <div class="imageA">
                <a href="https://ibb.co/nfDbxt0"><img src="{{asset('food_images/route.jpg')}}" alt="Routes"></a>
            </div>
            <div class="contentA">
                <h4>Routes</h5>
                    <p>Explore our wide range of routes to travel to your desired destinations.</p>
            </div>
        </div>
        <div class="featureA width-one-third">
            <div class="imageA">
                <a href="https://imgbb.com/"><img src="{{asset('food_images/customization.png')}}" alt="Easy Customization"></a>
            </div>
            <div class="contentA">
                <h4>Easy Customization</h5>
                    <p>Customize your travel preferences and make your journey uniquely yours.</p>
            </div>
        </div>
    </div>
</div>


<!-- Additional styles and scripts -->

@endsection
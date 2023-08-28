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

    /* Animation styles */
    .welcome-animation {
        animation: fadeInUp 2s ease-in-out;
        opacity: 0;
        animation-fill-mode: forwards;
        transition: all;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Card Styling */
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        border-radius: 8px 8px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    /* Cover Photo Styling */
    .cover-photo {
        text-align: center;
        margin-bottom: 20px;
    }

    .cover-img {
        max-width: 100%;
        height: auto;
        max-height: 40vh;
        /* Adjust the value as needed */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="container-fluid">
    <div class="frameContainer">
        <div class="centerP">
            <div class="left-side">
                <div class="profileP">
                    <div class="imageP">
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <img src="{{asset('food_images/bus1.jpg')}}" width="70" height="70" alt="Jessica Potter">
                    </div>
                    <div class="user-details">
                        <div class="nameP welcome-animation">{{$user -> name}}</div>
                        <div class="jobP welcome-animation">{{$user -> email}}</div>

                    </div>

                    <div class="actionsP">
                        <a href="{{ route('profile_edit') }}" class="btn">
                            Edit profile!
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="stats">
                    <div class="box bg-yelish">
                        <span class="value welcome-animation">{{ (new DateTime($user->created_at))->format('F j, Y - g:i A') }}</span>
                        <span class="parameter">Profile Created</span>
                    </div>
                    <div class="box bg-yelish">
                        <span class="value welcome-animation">{{ (new DateTime($user->updated_at))->format('F j, Y - g:i A') }}</span>
                        <span class="parameter">Last Updated</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Show company profile -->
    <!-- <div class="row mt-4">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0 welcome-animation">BUS COMPANY PROFILE</h4>
                        </div>
                        <div class="card-body">
                            <div class="cover-photo">
                                <a href="https://ibb.co/KyZQwm7"><img src="https://i.ibb.co/QmBqdXn/bus2.jpg" alt="Cover Photo" class="img-fluid cover-img"></a>
                            </div>
                            <table class="table table-borderless mt-4">
                                <thead>
                                    <tr>
                                        <th>COMPANY_ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="welcome-animation">{{ $user -> id }}</td>
                                        <td class="welcome-animation">{{ $user -> name }}</td>
                                        <td class="welcome-animation">{{ $user -> email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- End company profile -->

    <!-- <div class="d-flex justify-content-center mt-4">
                <div class="row mt-3">
                    <div class="col-12 col-lg-12">
                        <button class="btn btn-outline-primary">
                            <a href="{{ route('profile_edit') }}" style="text-decoration: none; color: inherit;">
                                <i class="fa fa-pencil"></i> Edit Profile
                            </a>
                        </button>
                    </div>
                </div>
            </div> -->



    <!-- Welcome message from EasyGo -->
    <div class="row mt-4 ">
        <div class="col-12 col-lg-12">
            <div class="card bg-yelish">
                <div class="card-body welcome-animation">
                    <h4 class="card-title">Welcome to EasyGo</h4>
                    <p class="card-text">
                        At EasyGo, we strive to provide you with the best travel experience. We welcome you to have a smooth and
                        hassle-free journey with us. Our dedicated team is committed to offering top-notch service to our customers.
                        Your comfort and satisfaction are our top priorities. As we embark on this journey together, we kindly
                        request your cooperation in ensuring the best service for all passengers. Let's make every trip memorable and
                        enjoyable!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End welcome message -->

</div>

<!-- ... (Your existing overlay, back to top button, and closing tags) ... -->

<!-- Additional styles -->

<script>
    // JavaScript to trigger the welcome animation on page load
    document.addEventListener("DOMContentLoaded", function() {
        const profileName = document.querySelectorAll(".welcome-animation");
        for (let i = 0; i < profileName.length; i++) {
            profileName[i].style.opacity = "1";
        }
    });
</script>

</body>

@endsection
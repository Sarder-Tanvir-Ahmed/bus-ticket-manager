@extends('layouts.app')

@section('content')


    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <h3>
                    <a style="color:#FFFAF0">
                        <i>{{ Auth::user()->name }}</i>
                    </a>
                </h3>
            </div>
        </div>
        <!--End sidebar-wrapper-->

        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Bus_company_profile_edit starts -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="profile_update" method="POST">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control rounded-0 bg-dark text-white"
                                            value="{{ $name }}" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control rounded-0 bg-dark text-white"
                                            value="{{ $email }}" required>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="role">Role</label>
                                        <select required class="form-control form-control-rounded bg-dark text-white"
                                            name="role" id="role">
                                            @foreach($all_roles as $item)
                                            <option value="{{ $item }}" @if($role === $item) selected @endif>
                                                {{ ucfirst($item) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-outline-light btn-block">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Bus_company_profile_edit ends -->
            </div>
        </div>
    </div>
    <!---------------------------------->

    <!--Start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->

    <!--End footer-->



<style>
    /* Body Background Styling */
    body {
        background-color: #222;
        font-family: 'Arial', sans-serif;
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

    /* Button Styling */
    .btn-outline-light {
        color: #fff;
        border-color: #fff;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #007bff;
    }

    /* Footer Styling */
    .footer {
        background-color: #007bff;
        color: #fff;
    }
</style>

@endsection

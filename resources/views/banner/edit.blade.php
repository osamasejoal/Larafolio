@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"Edit Banner", <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section style="margin-top: 10px" id="main-content" class="get-in-touch text-center">
                    <div class="row">

                        {{-- <section class="get-in-touch"> --}}
                        <h1 class="title m-auto">Update Your Banner</h1>
                        <form action="{{route('banner.update', $banner_edit->id)}}" method="POST" enctype="multipart/form-data" class="contact-form row m-auto">
                            @csrf
                            @method('PUT')
                            <div class="form-field col-lg-6">
                                <input value="{{$banner_edit->your_name}}" name="your_name" id="your_name" class="input-text js-input" type="text">
                                <label class="label mb-5" for="name">Your Name</label>
                            </div>
                            <div class="form-field col-lg-12 ">
                                <input value="{{$banner_edit->your_bio}}" name="your_bio" id="your_bio" class="input-text js-input" type="text">
                                <label class="label mb-5" for="your_bio">Your Bio</label>
                            </div>

                            <div class="form-field col-lg-12">
                                <img style="border-radius: 50%" width="150px"
                                    src="{{ asset('uploads/banner_img' . '/' . $banner_edit->your_img) }}" alt="" id="previous_img">
                                <label style="margin-bottom: 60px" class="label" for="previous_img">Previous
                                    Image</label>



                            </div>

                            <div class="form-field col-lg-6">
                                <input name="your_img" id="your_img" class="input-text js-input" type="file">
                                <label class="label mb-5" for="your_img">Choose your new Image</label>
                            </div>

                            <div class="form-field col-lg-12">
                                <input class="submit-btn" type="submit" value="submit" name="submit">
                            </div>
                        </form>
                        {{-- </section> --}}


                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection

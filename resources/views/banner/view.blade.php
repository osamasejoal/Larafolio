@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"View Page", <span>Welcome Here</span></h1>
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
                {{-- <section id="main-content">
                    <div class="row"> --}}


                {{-- <div class="mt-5">
                            {{$banner_data}}
                        </div> --}}
                <section style="margin-top: -100px" class="ftco-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="table table-responsive-xl">
                                        <thead>
                                            <tr>
                                                <th>Your Image</th>
                                                <th>Your Name</th>
                                                <th style="margin-left: 50%">Your Bio</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($banner_data as $banner_datas)

                                                <tr class="alert" role="alert">
                                                    <td class="d-flex align-items-center">
                                                        <div class="img">
                                                            <img style="border-radius: 50%" src="{{ asset('uploads/banner_img') . '/' . $banner_datas->your_img }}"
                                                            alt="img not found" width="50px">
                                                        </div>
                                                        
                                                    </td>
                                                    <td>{{ $banner_datas->your_name }}</td>
                                                    <td>{{ $banner_datas->your_bio }}</td>
                                                    
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-5 text-center">
                                    <a class="btn btn-primary" href="{{route('banner.edit', $banner_datas->id)}}">Edit Banner</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


                {{-- </div>
                </section> --}}

            </div>
        </div>
    </div>
@endsection

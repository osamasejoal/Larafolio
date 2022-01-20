@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"Edit Relative Companies", <span>Welcome Here</span></h1>
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
                        <h1 class="title m-auto">Edit Relative Company</h1>
                        @if (session('success'))
                            <div class="alert alert-success col-12 mb-5">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('relative_companies.update', $rc_edit->id) }}" method="POST"
                            enctype="multipart/form-data" class="contact-form row m-auto">
                            @csrf
                            @method('PUT')
                            <div class="form-field col-lg-6">
                                <input value="{{ $rc_edit->company_name }}" name="company_name" id="company_name"
                                    class="input-text js-input" type="text">
                                <label class="label mb-5" for="company_name">Company Name</label>
                            </div>
                            @error('company_name')
                                <span style="margin-top: -42px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror
                            <div class="form-field col-lg-12 ">
                                <input value="{{ $rc_edit->company_link }}" name="company_link" id="company_link"
                                    class="input-text js-input" type="url">
                                <label class="label mb-5" for="company_link">Company Link</label>
                            </div>
                            @error('company_link')
                                <span style="margin-top: -42px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror
                            <div class="form-field col-lg-12">
                                <img style="height: 3rem"
                                    src="{{ asset('uploads/relative_c_logos' . '/' . $rc_edit->company_logo) }}" alt=""
                                    id="previous_img">
                                <label class="label" for="previous_img">Previous
                                    Image</label>
                            </div>

                            <div class="form-field col-lg-6 mt-5">
                                <input name="your_img" id="your_img" class="input-text js-input" type="file">
                                <label class="label mb-5" for="your_img">Choose your new Image</label>
                            </div>
                            @error('company_logo')
                                <span style="margin-top: -48px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror
                            <div class="form-field col-lg-12">
                                <input class="submit-btn" type="submit" value="submit" name="submit">
                            </div>
                        </form>


                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection

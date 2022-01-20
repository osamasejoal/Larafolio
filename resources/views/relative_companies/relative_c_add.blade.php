@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"Add Relative Companies", <span>Welcome Here</span></h1>
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

                        <h1 class="title m-auto">Create Relative Companies</h1>
                        @if (session('error'))
                            <div class="alert alert-danger col-12">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success col-12">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('relative_companies.store') }}" method="POST" enctype="multipart/form-data"
                            class="contact-form row m-auto">
                            @csrf

                            <div class="form-field col-lg-6">
                                <input value="{{ old('company_name') }}" name="company_name" id="company_name"
                                    class="input-text js-input" type="text">
                                <label style="margin-bottom: 40px" class="label" for="company_name">Company
                                    Name *</label>
                            </div>
                            @error('company_name')
                                <span style="margin-top: -42px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror

                            <div class="form-field col-lg-12">
                                <input value="{{ old('company_link') }}" name="company_link" id="company_link"
                                    class="input-text js-input" type="url">
                                <label style="margin-bottom: 40px" class="label" for="company_link">Company
                                    Link *</label>
                            </div>
                            @error('company_link')
                                <span style="margin-top: -42px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror
                            <div class="form-field col-lg-6 mt-5">
                                <input name="company_logo" id="company_logo" class="input-text js-input" type="file">

                                <label style="margin-bottom: 60px" class="label" for="company_logo">Company
                                    Logo *</label>
                            </div>
                            @error('company_logo')
                                <span style="margin-top: -48px"
                                    class="text-danger d-flex col-lg-12 mb-4">{{ $message }}</span>
                            @enderror

                            <div class="form-field col-lg-12">
                                <button type="submit" class="custom-button">Submit</button>
                            </div>
                        </form>
                        {{-- </section> --}}


                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection

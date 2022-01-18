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
                        <form action="{{ route('relative_companies.store') }}" method="POST" enctype="multipart/form-data"
                            class="contact-form row m-auto">
                            @csrf
                            <div class="form-field col-lg-6">
                                <input value="" style="margin-bottom: 65px" name="company_name" id="company_name"
                                    class="input-text js-input" type="text" placeholder="fdsbkgc">
                                {{-- style="margin-bottom: 65px" --}}
                                <label class="label" for="company_name">Company Name</label>
                                {{-- <span style="" class="text-danger d-flex">NAME field is required bla bal bla bla</span> --}}
                            </div>
                            <div class="form-field col-lg-12">
                                <input value="" name="company_link" id="company_link" class="input-text js-input"
                                    type="text">
                                {{ $errors }}
                                @foreach ($errors as $error)
                                    @if (strpos($error, 'company_link'))
                                        <span class="text-danger">ace</span>
                                        {{-- <label style="bottom:80px" class="label" for="company_link">Company
                                            Link</label> --}}
                                    @else
                                        <span class="text-danger">nai</span>
                                        {{-- <label style="bottom:40px" class="label" for="company_link">Company
                                            Link</label> --}}
                                    @endif
                                @endforeach

                                @error('company_link')
                                    <span class="text-danger d-flex" style="margin-top: 15px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-field col-lg-6 mt-5">
                                <input name="company_logo" id="company_logo" class="input-text js-input" type="file">
                                <span class="text-danger d-flex">It must be a png</span>
                                <label style="margin-bottom: 80px" class="label" for="company_logo">Company
                                    Logo</label>

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

@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"Trash Relative Companies", <span>Welcome Here</span></h1>
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

                <div style="padding: 2rem 0rem" class="container">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-image">
                                <thead>
                                    <tr class="text-center">
                                        <th style="vertical-align: middle">Company Logo</th>
                                        <th style="vertical-align: middle">Company Name</th>
                                        <th style="vertical-align: middle">Company Link</th>
                                        <th style="vertical-align: middle" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($trashed as $trash)
                                        <tr class="text-center">
                                            <td style="vertical-align: middle" class="w-25">
                                                <img style="vertical-align: middle; height: 3rem"
                                                    src="{{ asset('uploads/relative_c_logos' . '/' . $trash->company_logo) }}"
                                                    class="img-fluid" alt="Sheep">
                                            </td>
                                            <td style="vertical-align: middle">
                                                {{ $trash->company_name }}
                                            </td>
                                            <td style="vertical-align: middle">
                                                {{ $trash->company_link }}
                                            </td>
                                            <td style="vertical-align: middle" class="text-center col-3">

                                                    <a href="{{route('rc-restore', $trash->id)}}" class="btn btn-primary btn-sm mr-2">Restore</a>

                                                    <a href="{{route('rc-force-delete', $trash->id)}}" class="btn btn-danger btn-sm">Force Delete</a>
                                                
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-danger" colspan="50">No Companies to show here</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

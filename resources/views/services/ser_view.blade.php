@extends('layouts.dashboard_master')

@section('dashboard_content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>"View Relative Companies", <span>Welcome Here</span></h1>
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
                                    @forelse ($rc_datas as $rc_data)
                                        <tr class="text-center">
                                            <td style="vertical-align: middle" class="w-25">
                                                <img style="vertical-align: middle; height: 2rem"
                                                    src="{{ asset('uploads/relative_c_logos' . '/' . $rc_data->company_logo) }}"
                                                    class="img-fluid" alt="Sheep">
                                            </td>
                                            <td style="vertical-align: middle">{{ $rc_data->company_name }}</td>
                                            <td style="vertical-align: middle">
                                                {{ $rc_data->company_link }}
                                            </td>
                                            <td style="vertical-align: middle" class="text-center col-2">
                                                <a href="{{ route('relative_companies.edit', $rc_data->id) }}"
                                                    class="btn btn-info btn-sm mr-2">Edit</a>

                                                <form class="d-inline" action="{{route('relative_companies.destroy', $rc_data->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        Delete
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-danger" colspan="50">No Companies to show here</td>
                                        </tr>
                                    @endforelse
                                    {{-- @foreach ($rc_datas as $rc_data)
                                        
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

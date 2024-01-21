@extends('layouts.app')
@section('title', 'Nominee\'s List')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h4 class="card-title mb-4">Nominee's List</h4>
                                </div>
                            </div>
                         
                            @include('custom.alert')
                            <div class="tab-content p-3">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered  nowrap w-100">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <th>Name</th>
                                                <th>Voter</th>
                                                <th>Nominees Name</th>
                                                <th>Nominees Occupation</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Business Website URL</th>
                                                <th>Personal Website URL</th>
                                                <th>IG HANDLE</th>
                                                <th>LINKEDIN HANDLE</th>
                                                <th>Reason</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nominees as $key2 => $nominee)
                                                <tr>
                                                    <td>{{ $key2 + 1 }}</td>
                                                    <td>{{ $nominee->firstname }} {{ $nominee->lastname }}</td>
                                                    <td>{{ $nominee->voter }}</td>
                                                    <td>{{ $nominee->nominees_firstname }} {{ $nominee->nominees_lastname }}</td>
                                                    <td>{{ $nominee->nominees_lastname }} </td>
                                                    <td>{{ $nominee->country }}</td>
                                                    <td>{{ $nominee->city }}</td>
                                                    <td>{{ $nominee->business }}</td>
                                                    <td>{{ $nominee->personal }}</td>
                                                    <td>{{ $nominee->ig }}</td>
                                                    <td>{{ $nominee->linked }}</td>
                                                    <td>{{ $nominee->reason }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                          
                            <!-- end table-responsive -->
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
    </div>

    @include('custom.footer')
</div>
@endsection


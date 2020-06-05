@extends('admin.layout.master')

@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{ $users->total() }}</h5>
                            <h6 class="text-white">Total employees</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{ $totalLeave_pending }}</h5>
                            <h6 class="text-white">Total leaves</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{ $totalLeave }}</h5>
                            <h6 class="text-white">On leave</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Informasi cuti karyawan - SIMPER [v1.0.0-beta]</h4>
                                </div>
                            </div>
                                <div class="card-body b-l calender-sidebar">
                                    <div id="calendar">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    {!! $calendar->calendar() !!}
                                                    {!! $calendar->script() !!}
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer text-center">
            All Rights Reserved by Daniel Budi Setaywan Designed and Developed by <a href="https://dbsetyawan.github.io/portfolio">Daniel Budi Setyawan</a>.
        </footer>

    </div>

@endsection

@section('js')
@endsection

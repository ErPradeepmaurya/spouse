@extends('client.clientLayout.app')
@section('title', 'Dashboard')
@section('content')

    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light rounded-2 p-3">
                    <h2 class="card-title">All Users</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-2">38</span>
                        <a href="#" class="btn btn-danger">View All</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card bg-light rounded-2 p-3">
                    <h2 class="card-title">New Registrants</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-2">38</span>
                        <a href="#" class="btn btn-danger">View All</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

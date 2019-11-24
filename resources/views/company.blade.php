@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="add_button">
                        <a href="{{route('company.add_job')}}" type="button" class="btn btn-info" role="button">Post Job</a>
                    </div>

                    You are logged in as Company!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
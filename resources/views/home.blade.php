@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as User!

                    <table class="table table-striped table-bordered">
             <thead>
                <tr>
                   <th>Job Title</th>
                   <th>Description</th>
                   <th>Salary</th>
                   <th>Location</th>
               </tr>
           </thead>
           <tbody>
            @foreach($my_job as $job_info)
            <tr>
                
                <td>{{$job_info -> job_title}}</td>
                <td>{{$job_info -> job_des}}</td>
                <td>{{$job_info -> salary}}</td>
                <td>
                    {{$job_info -> location}}<br>
                    {{$job_info -> country}}
                </td>
                <td><button id="#" type="submit" class="btn btn-primary" style="margin: 2px;">Apply</button></td>
            </tr>

            

           @endforeach
       </tbody>
   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

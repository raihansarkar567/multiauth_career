@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Job</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- form start --}}

                    <form class="well form-horizontal" action="{{route('company.add_job.submit')}}" method="post"  id="product_form">
                        {{csrf_field()}}
                        <fieldset>

                            <!-- Form Name -->
                            <legend><center><h2><b>Post Product</b></h2></center></legend><br>

                            <!-- Text input-->

                            <div class="form-group">
                              <label class="col-md-4 control-label">Business ID</label>  
                              <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                  <input  name="business_id" placeholder="business_id" class="form-control"  type="text" value="{{Auth::id()}}" readonly>
                              </div>
                          </div>
                      </div>

                      <!-- Text input-->

                      <div class="form-group">
                          <label class="col-md-4 control-label">Job Title</label>  
                          <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                              <input  name="job_title" placeholder="job Name" class="form-control"  type="text">
                          </div>
                      </div>
                  </div>

                  
                  <!-- Text input-->

                  <div class="form-group">
                      <label class="col-md-4 control-label">Job Description</label>  
                      <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                          <input  name="job_des" placeholder="Job Description" class="form-control"  type="text">
                      </div>
                  </div>
              </div>

              <!-- Text input-->

              <div class="form-group">
                  <label class="col-md-4 control-label" >Salary</label> 
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      <input name="salary" placeholder="Salary" class="form-control"  type="number">
                  </div>
              </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
              <label class="col-md-4 control-label" >Location</label> 
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <input name="location" placeholder="Location" class="form-control"  type="text">
              </div>
          </div>
      </div>

  <div class="form-group"> 
      <label class="col-md-4 control-label">Country</label>
      <div class="col-md-4 selectContainer">
        <div class="input-group">
          <select name="country" class="form-control selectpicker">
            <option value="Country">Select your Country</option>
            <option>Bangladesh</option>
            <option>USA</option>
            <option>UK</option>
            <option>India</option>
            <option>Pak</option>   
        </select>
    </div>
</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    <button type="submit" class="btn btn-warning" >Submit</button>
</div>
</div>

</fieldset>
</form>

{{-- form end --}}

</div>
</div>
</div>
</div>
</div>
@endsection

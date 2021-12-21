@extends('admin.layouts.default')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-transparent card-block card-stretch card-height border-none">
        <div class="card-body p-0 mt-lg-2 mt-0">
          <h3 class="mb-3">Hi  {{$userdata->name}}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row">

      </div>
    </div>

    <div class="col-12 row p-0">
      <div class="col-lg-4 col-md-4">
        <div class="card card-block card-stretch card-height">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4 card-total-sale">
              <div class="icon iq-icon-box-2 bg-info-light">
                <img src="{{url('/assets/images/product/school.png')}}" class="img-fluid" alt="image">
              </div>
              <div>
                <p class="mb-2">Total Number Of School</p>
                <h4>{{$school}}</h4>
              </div>
            </div>
            <div class="iq-progress-bar mt-2">
              <span class="bg-info iq-progress progress-1" data-percent="{{$school}}">
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card card-block card-stretch card-height">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4 card-total-sale">
              <div class="icon iq-icon-box-2 bg-info-light">
                <img src="{{url('/assets/images/product/teacher.png')}}" class="img-fluid" alt="image">
              </div>
              <div>
                <p class="mb-2">Total Number Of Teacher</p>
                <h4>{{$teacher}}</h4>
              </div>
            </div>
            <div class="iq-progress-bar mt-2">
              <span class="bg-danger iq-progress progress-1" data-percent="{{$teacher}}">
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card card-block card-stretch card-height">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4 card-total-sale">
              <div class="icon iq-icon-box-2 bg-info-light">
                <img src="{{url('/assets/images/product/student.png')}}" class="img-fluid" alt="image">
              </div>
             <div>
                <p class="mb-2">Total Number Of Student</p>
                <h4>{{$student}}</h4>
              </div>
            </div>
            <div class="iq-progress-bar mt-2">
              <span class="bg-success iq-progress progress-1" data-percent="{{$student}}">
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card card-block card-stretch card-height">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4 card-total-sale">
              <div class="icon iq-icon-box-2 bg-info-light">
                <img src="{{url('/assets/images/product/education.png')}}" class="img-fluid" alt="image">
              </div>
             <div>
                <p class="mb-2">Total Number Of Books</p>
                <h4>{{$book}}</h4>
              </div>
            </div>
            <div class="iq-progress-bar mt-2">
              <span class="bg-success iq-progress progress-1" data-percent="{{$book}}">
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
</div>
@endsection
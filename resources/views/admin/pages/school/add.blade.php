@extends('admin.layouts.default')
{{-- @section('styles')
 <style>
  .cat-image{
    width: 100px;
    height: 100px;
  }
  h4.error-msg {
        color: red;
        text-align: center;
        font-size: 1.25rem;
    }
    .logo-text{
        display: block;
        margin: 0 auto;
        color: #000;
        padding: 21px 0;
    }

</style>
@endsection --}}


@section('content')
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add School</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/addallschool')}}" data-toggle="validator" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <h4 class="error-msg">{{$errors->first()}}</h4>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>School Name *</label>
                                        <input type="text" class="form-control" name="school_name" value=""
                                            placeholder="Enter School Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add School</button>
                            <button type="reset" class="btn btn-danger" onclick="resetForm()">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function preview(file) {
            document.getElementById('catImage').src = window.URL.createObjectURL(file.files[0]);
            $('#catImage').width(100).height(100);
        }
 
    </script>
@stop

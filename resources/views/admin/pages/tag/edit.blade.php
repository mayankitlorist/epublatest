@extends('admin.layouts.default')
@section('content')
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Tag Category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                      
                        <form action="{{url('admin/updatetagdata')}}" data-toggle="validator" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <h4 class="error-msg">{{$errors->first()}}</h4>
                            @endif
                            <input type="hidden" name="tagid" value="{{$tag->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tag Name *</label>
                                        <input type="text" class="form-control" name="tag_name" value="{{$tag->tag_name}}"
                                            placeholder="Enter Tag Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Edit Tag category</button>
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
        // $(document).ready( function () {
        function preview(file) {
            document.getElementById('catImage').src = window.URL.createObjectURL(file.files[0]);
            $('#catImage').width(100).height(100);
        }
        // });
    </script>
@stop

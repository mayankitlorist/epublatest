@extends('admin.layouts.default')
@section('styles')
 <style>
 

</style>
@endsection
{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" /> --}}
@section('content')

    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Book</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/addallbook')}}" data-toggle="validator" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Book Category*</label>
                                        <select name="book_category_id" id="book_category_id" class="form-control" required>
                                            <option value="">Select Book Category</option>/>
                                            @foreach ($books as $bookss)
                                            <option value="{{ $bookss->id }}"/>
                                                {{ $bookss->book_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language*</label>
                                        <select name="language_id" id="language_id" class="form-control" required>
                                            <option value="">Select Book Category</option>/>
                                            @foreach ($language as $languages)
                                            <option value="{{ $languages->id }}"/>
                                                {{ $languages->language_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Book Name*</label>
                                        <input type="text" class="form-control" name="book_name" value=""
                                            placeholder="Enter Book Name" data-errors="Please Enter Product Book Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Image*</label>
                                            <div class="preview-image"> </div>
                                            <input type="file" class="form-control image-file" id="thumbnail_image" name="thumbnail_image"
                                             accept="image/*"> 
                                            {{-- <img id="productImage" />
                                            <input type="file" class="form-control image-file" name="thumbnail_image"
                                                onchange="preview(this)" accept="image/*"> --}}
                                        </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discription*</label>
                                        <input type="text" class="form-control" name="Discription" value=""
                                            placeholder="Enter Discription" data-errors="Please Enter Product Book Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tag*</label>
                                        <select name="tag_id[]" class="form-control select2-multiple" multiple="multiple" required>
                                            <option value="">Select Book Category</option>/>
                                            @foreach ($tag as $tags)
                                            <option value="{{ $tags->id }}"/>
                                                {{ $tags->tag_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Grade*</label>
                                        <select name="grade[]" class="form-control select2-multiple" multiple="multiple" required>
                                            <option value="">Select grade</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>EPUB File*</label>
                                        <div class="preview-image"> </div>
                                        <input type="file" class="form-control image-file" id="epub_file_path" name="epub_file_path"
                                      accept="epub/*"> 
                                        {{-- <img id="productImage" />
                                        <input type="file" class="form-control image-file" name="epub_file_path"
                                            onchange="preview(this)" accept="epub/*"> --}}
                                    </div>
                                </div>
                               
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Add Book</button>
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
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script type="text/javascript">

        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

    //   var $ = jQuery.noConflict();
    //  $(document).ready(function(){
    //     $("#inputTag").tagsinput('items');
    // });
     // Multiple images preview with JavaScript
     var multiImgPreview = function(input, imgPreviewPlaceholder) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img style="width: 100px;height: 100px; margin-right: 1%;}">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#images').on('change', function() {
        multiImgPreview(this, 'div.preview-image');
    });
        // function preview(file) {
        //     document.getElementById('productImage').src = window.URL.createObjectURL(file.files[0]);
        //     $('#productImage').width(100).height(100);
        // }
    </script>
@stop

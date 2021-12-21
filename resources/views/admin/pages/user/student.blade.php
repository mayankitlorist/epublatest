@extends('admin.layouts.default')

@section('content')
<style>
    .buttonsize{
        white-space:nowrap;
    }
    .multiselect .dropdown-toggle{
        width:auto !important;  
    }
    .schoolSearch{
        max-width:100%;
    }
</style>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Student List</h4>
                        </div>
                        <!-- <a href="{{url('admin/addSchool')}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add
                            School</a> -->
                    </div>
                </div>

                <div class="col-lg-12 row mb-3">
                        <div class="col-md-3 schoolSearch">
                            <select class="school_id" id="framework" name="school_id[]"  multiple>
                                    <option value="">Select School</option>/>
                                    @foreach ($school as $schools)
                                    <option value="{{ $schools->id }}">
                                        {{ $schools->school_name }}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-md-2">
                           <button class="btn btn-primary schoolsub">Submit</button>
                        </div>
                        <div class="col-md-5">
                            <form action="{{url('import')}}" method="POST" enctype="multipart/form-data" class="d-flex">
                                @csrf
                                <input type="file" name="file" required>
                                &nbsp;&nbsp;<button class="btn btn-primary buttonsize">Import User</button>  
                            </form>
                            <a href="{{url('studentImport.xlsx')}}"><button class="btn btn-primary ">Dummy Import</button></a>
                        </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-table table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>School Name</th>
                                    <th>Role Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body student1">
                                @foreach($users as $users)
                              
                                <tr>
                                  <td>{{$users->first_name}}</td>
                                  <td>{{$users->email}}</td>
                                  <td>{{$users->school_name}}</td>
                                  <td>{{$users->role_name}}</td>
                                  <td>
                                      <div class="d-flex align-items-center list-action">
                                          <!-- <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                              title="" data-original-title="Edit" href="{{url('admin/updateuser/'.$users->user_id)}}"><i
                                                  class="ri-pencil-line mr-0"></i></a> -->
                                          <a onclick="return confirm('Are you sure you want to delete this item?');" class="badge bg-warning mr-2 deleteteacher" data-id="{{$users->user_id}}" data-toggle="tooltip" data-placement="top"
                                              title="" data-original-title="Delete"><i class="ri-delete-bin-line mr-0"></i></a>
                                      </div>
                                  </td>
                                 </tr>
                                @endforeach
                            
                            </tbody>
                            <tbody class="ligth-body student2">
                                <tr>
                                 
                              </tr>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">
                                <h3 class="mb-3">Product</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content edit-notes">
                                <div class="card card-transparent card-block card-stretch event-note mb-0">
                                    <div class="card-body px-0 bukmark">
                                        <div
                                            class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                            <div class="quill-tool">
                                            </div>
                                        </div>
                                        <div id="quill-toolbar1">
                                            <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                                Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0">
                                        <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                            <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                            <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    


@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script type="text/javascript">
        $(document).ready(function(){
            $('#framework').multiselect({
            nonSelectedText: 'Select School',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth:'400px'
            });
        });

        $(document).ready(function(){
            $('.student1').show();
            $('.student2').hide();
        })

        $(document).on('click', '.schoolsub', function(){
            
            var schoolid = $('.school_id').val();
            if(schoolid){
                $.ajax({

                    url: "{{ url('admin/getstudent') }}",
                    method: 'post',
                    data: { "_token" : "{{csrf_token()}}", 'schoolid': schoolid },

                    success: function(data){
                        if(data){ 
                            $(".student2").empty();
                            $.each(data , function (index, value){
                                var searcht = '<tr>'+
                                                '<td>'+value.name+'</td>'+
                                                '<td>'+value.email+'</td>'+
                                                '<td>'+value.role_name+'</td>'+
                                                '<td>'+value.school_name+'</td>'+
                                                '<td>'+
                                                    '<div class="d-flex align-items-center list-action">'+
                                                    ' <a class="badge bg-warning mr-2 deleteteacher" data-id="'+value.user_id+'"><i class="ri-delete-bin-line mr-0"></i></a>'+
                                                    '</div>'+
                                                '</td>'+
                                            '</tr>'
                                
                                $(".student2").append(searcht)
                            });
                            $('.student2').show();
                            $('.student1').hide();
                        }
                    }
                });
            }
        });

        $(document).on('click', '.deleteteacher', function(){

            var teachid = $(this).attr('data-id');
            $.ajax({

                url: "{{ url('admin/deleteteacher') }}",
                method: 'post',
                data: { "_token" : "{{csrf_token()}}", 'teachid': teachid },

                success: function(data){
                    console.log(data)
                    location.reload();
                }
            });
        });
    </script>
@stop

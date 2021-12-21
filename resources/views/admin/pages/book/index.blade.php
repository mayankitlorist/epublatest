@extends('admin.layouts.default')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Book List</h4>
                    </div>
                    <a href="{{url('admin/addBook')}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add
                        Book</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-table table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>Book Category</th>
                                <th>Book name</th>
                                <th>Discription</th>
                                <th>Book Image</th>
                                <th>Book File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            @foreach($book as $books)
                            <tr>
                                <td>{{$books->bookcatname}}</td>
                                <td>{{$books->bookname}}</td>
                                <td>{{$books->discription}}</td>
                                <td> <div><img class="profile-img" src="{{url('/bookImage/'.$books->thumbnail_image)}}" width="100px" height="100px"/></div></td>
                                <td>{{$books->epub_file_path}}</td>
                              
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Edit" href="{{url('admin/updatesinglebook/'.$books->bookid)}}"><i class="ri-pencil-line mr-0"></i></a>
                                    
                                        <a onclick="return confirm('Are you sure you want to delete this item?');" class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" type="submit" href="{{url('admin/deletesinglebook/'.$books->bookid)}}"><i
                                                    class="ri-delete-bin-line mr-0"></i></a>
                             
                                    </div>
                                </td>
                            </tr>
                           @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>



@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@stop

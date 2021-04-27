@extends('layouts.admin_layout.admin_layout')
@section('title')
    Carousel
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Carousel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Carousel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @if(Session::has('error_message'))
        <br>
        <div class="alert alert-danger alert-dismissible fade-show" role="alert">
            {{Session::get('error_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(Session::has('success_message'))
        <br>
        <div class="alert alert-success alert-dismissible fade-show" role="alert">
            {{Session::get('success_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card-body">
        <div class="card-header">
            <a href="{{route('get.add-images-carousel')}}" style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">
                Add Image
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $index=>$image)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>
                            <img height="150" width="200" src="{{asset('images/admin_images/carousel_images/'.$image['image'])}}">
                        </td>
                        <td>
                            @if($image['status'] == 1)
                                <a title="Update status" href="javascript:void (0)" id="carousel-{{$image['id']}}" carousel_id="{{$image['id']}}" class="updateImageCarouselStatus"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                            @elseif($image['status'] == 0)
                                <a title="Update status" href="javascript:void (0)" id="carousel-{{$image['id']}}" carousel_id="{{$image['id']}}" class="updateImageCarouselStatus"><i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a title="Edit brand" href="{{route('get.edit-images-carousel',$image['id'])}}"><i class="fas fa-edit"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a title="Delete brand" class="confirmDelete" record="image-carousel" recordid="{{$image['id']}}" href="javascript:void (0)"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>

@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
            });
        });
    </script>
    <script src="{{url('js/admin_js/admin_script.js')}}"></script>
@endsection

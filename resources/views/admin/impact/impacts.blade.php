@extends('layouts.admin_layout.admin_layout')
@section('title')
    Impacts
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
                        <h1 class="m-0">Impacts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Impacts</li>
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
                <a href="{{route('add.impact')}}" style="max-width: 150px; float: right; display: inline-block" class="btn btn-block btn-success">
                    Add Impact
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Main Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($impacts) && count($impacts) > 0)
                        @foreach($impacts as $index=>$impact)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$impact['name']}}</td>
                                <td>
                                    <img src="{{asset('images/front/impact_images/'.str_replace(' ','_',$impact['name']).'/'.$impact['main_image'])}}" height="150" width="150" alt="main image">
                                </td>
                                <td>
                                    @if($impact['status'] == 1)
                                        <a title="Update status" href="javascript:void (0)" id="impact-{{$impact['id']}}" impact_id="{{$impact['id']}}" class="updateImpactStatus"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                                    @elseif($impact['status'] == 0)
                                        <a title="Update status" href="javascript:void (0)" id="impact-{{$impact['id']}}" impact_id="{{$impact['id']}}" class="updateImpactStatus"><i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                                    @endif
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a title="Details" href="{{route('get.impact.info',$impact['id'])}}"><i class="fas fa-info-circle"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a title="Edit impact" href="{{route('edit.impact',$impact['id'])}}"><i class="fas fa-edit"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a title="Delete impact" class="confirmDelete" record="impact" recordid="{{$impact['id']}}" href="javascript:void (0)"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
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

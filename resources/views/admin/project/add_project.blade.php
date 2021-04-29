@extends('layouts.admin_layout.admin_layout')
@section('title')
    Add Project
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Project</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Add Project</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Project</h3>
            </div>
            @if($errors->any())
                <br>
                <div class="alert alert-danger alert-dismissible fade-show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
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
        <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('store.project')}}" enctype="multipart/form-data" name="postProjectForm" id="postProjectForm">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" name="area" id="area" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="budget">Budget</label>
                        <input type="text" name="budget" id="budget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" id="date" value="{{ date('Y-m-d') }}" class="form-control" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="summernote" name="description">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="primary_beneficiaries">Primary Beneficiaries</label>
                        <textarea id="summernote2" name="primary_beneficiaries">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="main_image">Main Image</label>
                        <input type="file" name="main_image" id="main_image" class="form-control" accept="image/*" >
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function (){

        $(function () {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });
        $(function () {
            // Summernote
            $('#summernote2').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });

        var date = $('#date').daterangepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
        //datepicker
        // $(function () {
        //     $('#start_date').daterangepicker({
        //         singleDatePicker: false,  // choose only one
        //         locale: {
        //             format: 'MM/DD/YYYY'
        //         }
        //     })
        // });

        //$(function() {
        //     $('#start_date').daterangepicker({
        //         singleDatePicker: true,
        //         showDropdowns: true,
        //         minYear: 1901,
        //         maxYear: parseInt(moment().format('YYYY'),10)
        //     }, function(start, end, label) {
        //         var years = moment().diff(start, 'years');
        //         alert("You are " + years + " years old!");
        //     });
        // });



    });

</script>
@endsection

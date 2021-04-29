@extends('layouts.admin_layout.admin_layout')
@section('title')
    Edit Impact
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Impact</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Impact</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Impact</h3>
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
            <form method="post" action="{{route('update.impact',$impact['id'])}}" enctype="multipart/form-data" name="updateImpactForm" id="updateImpactForm">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{$impact['name']}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" required>{{$impact['description']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="main_image">Main Image</label>
                        <input type="file" name="main_image" id="main_image" class="form-control" accept="image/*">
                        @if($impact['main_image'] !== '')
                            <br>
                            <div>
                                <img src="{{asset('images/front/impact_images/'.str_replace(' ','_',$impact['name']).'/'.$impact['main_image'])}}" height="150" width="150" alt="main image">
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="icon_image">Icon Image</label>
                        <input type="file" name="icon_image" id="icon_image" class="form-control" accept="image/*" >
                        @if($impact['icon_image'] !== '')
                            <br>
                            <div>
                                <img src="{{asset('images/front/impact_images/'.str_replace(' ','_',$impact['name']).'/'.$impact['icon_image'])}}" height="150" width="150" alt="main image">
                            </div>
                        @endif
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
@endsection

@extends('dashboard.layout')

@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$news->title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/dashboard/news')}}">news</a></li>
                        <li class="breadcrumb-item active">{{$news->title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1 pb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <td>
                                            {{$news->title}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Subtitle</th>
                                        <td>
                                            {{$news->subtitle}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Description</th>
                                        <td>
                                            {{$news->description}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{ Illuminate\Support\Str::startsWith($news->img, 'news') ? url("storage/$news->img") : $news->img }}" height="100px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <a href="{{route('news.index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
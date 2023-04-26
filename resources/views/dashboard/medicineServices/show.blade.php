@extends('dashboard.layout')

@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$medicineService->name}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/dashboard/medicineServices')}}">Medicine Service</a></li>
                        <li class="breadcrumb-item active">{{$medicineService->name}}</li>
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
                            <h3 class="card-title">Medicine Service Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>
                                            {{$medicineService->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>
                                            {{$medicineService->description}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Illness</th>
                                        <td>
                                            {{$medicineService->illness->name}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{ Illuminate\Support\Str::startsWith($medicineService->img, 'medicineService') ? url("storage/$medicineService->img") : $medicineService->img }}" height="100px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <a href="{{route('medicineServices.index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
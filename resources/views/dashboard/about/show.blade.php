@extends('dashboard.layout')

@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$contact->name}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/dashboard/contacts')}}">Contacts</a></li>
                        <li class="breadcrumb-item active">{{$contact->name}}</li>
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
                            <h3 class="card-title">Illness Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>
                                            {{$contact->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            {{$contact->email}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Position</th>
                                        <td>
                                           {{$contact->position}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Message</th>
                                        <td>
                                           {{$contact->message}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <a href="{{route('contacts.index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
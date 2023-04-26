@extends('dashboard.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Illnesses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Illnesses</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Illnessess</h3>

                            <div class="card-tools">
                                <a href="{{route('illnesses.create')}}" class="btn btn-small btn-primary">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="illnesses" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>Image</th>
                                        <th>Descriptin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($illnesses as $illness)
                                <tbody>
                                    <tr>
                                        <td>{{$illness->id}}</td>
                                        <td>{{$illness->name}}</td>
                                        <td>
                                            <img src="{{ Illuminate\Support\Str::startsWith($illness->img, 'illnesses') ? url("storage/$illness->img") : $illness->img }}" class="img-fluid "
                                            style="height: 75px; width: 60px" alt="illnesss">
                                        </td>
                                        <td>{{$illness->description}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('illnesses.show', $illness->id)}}" class="mr-1 btn btn-sm
                                                    btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('illnesses.edit', $illness->id)}}" class="mr-1 btn btn-sm
                                                    btn-info"><i class="fas fa-edit"></i></a>
                                                <form method="POST" action="{{ route('illnesses.destroy', $illness->id) }}">
                                                    @csrf
                                                    @method('Delete')
                                                    <button id='delete' type="submit" class="btn
                                                                btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('scripts')
<script>
    $(function () {
    $("#illnesses").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#news_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
@extends('dashboard.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Medicine Services</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Medicine Services</li>
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
                            <h3 class="card-title">All Medicine Services</h3>

                            <div class="card-tools">
                                <a href="{{route('medicineServices.create')}}" class="btn btn-small btn-primary">Add New</a>
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
                                        <th>Illness</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($medicineServices as $medicineService)
                                <tbody>
                                    <tr>
                                        <td>{{$medicineService->id}}</td>
                                        <td>{{$medicineService->name}}</td>
                                        <td>
                                            <img src="{{ Illuminate\Support\Str::startsWith($medicineService->img, 'medicineServices') ? url("storage/$medicineService->img") : $medicineService->img }}" class="img-fluid "
                                            style="height: 75px; width: 60px" alt="medicineServices">
                                        </td>
                                        <td>{{$medicineService->description}}</td>
                                        <td>{{$medicineService->illness->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('medicineServices.show', $medicineService->id)}}" class="mr-1 btn btn-sm
                                                    btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('medicineServices.edit', $medicineService->id)}}" class="mr-1 btn btn-sm
                                                    btn-info"><i class="fas fa-edit"></i></a>
                                                <form method="POST" action="{{ route('medicineServices.destroy', $medicineService->id) }}">
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
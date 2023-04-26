@extends('dashboard.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Admins</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Admins</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Admins list</h3>
              <div class="card-tools">
                <a href="{{route('admins.create')}}" class="btn btn-small btn-primary">Add New</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="admins" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($admins as $admin)

                  <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}
                    </td>
                    <td>{{$admin->status}}</td>
                    <td>{{$admin->created_at}}</td>
                    <td>{{$admin->updated_at}}</td>
                    <td>
                      @if ($admin->super_admin == 0 && auth()->user()->id !== $admin->id)
                      <a href="{{ route('admins.promote', $admin->id) }}" class="btn btn-sm btn-danger"><i
                          class="fas fa-level-up-alt"></i></a>
                      @elseif ($admin->super_admin == 1 && auth()->user()->id !== $admin->id)
                      <a href="{{ route('admins.demote', $admin->id) }}" class="btn btn-sm btn-success"><i
                          class="fas fa-level-down-alt"></i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('scripts')

<script>
  $(function () {
    $("#admins").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#admins_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
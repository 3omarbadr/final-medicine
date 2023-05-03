@extends('dashboard.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact Forms</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Forms</li>
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
              <h3 class="card-title">Contact Forms list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="contacts" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $contact)

                  <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}
                    </td>
                    <td>{{$contact->position}}</td>
                    <td>{{$contact->message}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td>{{$contact->updated_at}}</td>
                    <td>
                      <div class="btn-group">
                        <a href="{{route('contacts.show', $contact->id)}}" class="mr-1 btn btn-sm
                          btn-primary"><i class="fas fa-eye"></i></a>
                        <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
                          @csrf
                          @method('Delete')
                          <button id='delete' type="submit" class="btn
                                        btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
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
    $("#users").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#users_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
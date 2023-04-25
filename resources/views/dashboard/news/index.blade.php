@extends('dashboard.layout')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home}</a></li>
                        <li class="breadcrumb-item active">News</li>
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
                        @include('dashboard.inc.messages')
                        <div class="card-header">
                            <h3 class="card-title">All News</h3>

                            <div class="card-tools">
                                <a href="{{url('dashboard/news/create')}}" class="btn btn-small btn-primary">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="news" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Image</th>
                                        <th>Descriptin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($news as $new)
                                <tbody>
                                    <tr>
                                        <td>{{$new->id}}</td>
                                        <td>{{$new->title}}</td>
                                        <td>{{$new->subtitle}}</td>
                                        <td>
                                            <img src="{{ Illuminate\Support\Str::startsWith($new->img, 'news') ? url("storage/$new->img") : $new->img }}" class="img-fluid "
                                            style="height: 75px; width: 60px" alt="news">
                                        </td>
                                        <td>{{$new->description}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('news.show', $new->id)}}" class="mr-1 btn btn-sm
                                                    btn-primary"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('news.edit', $new->id)}}" class="mr-1 btn btn-sm
                                                    btn-info"><i class="fas fa-edit"></i></a>
                                                <form method="POST" action="{{ route('news.destroy', $new->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn
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
    $("#news").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#news_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
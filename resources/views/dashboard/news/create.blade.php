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
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
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
                <div class="col-12 pb-3">
                    @include('dashboard.inc.errors')
                    <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Subtitle</label>
                                        <input type="text" name="subtitle" class="form-control">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input id="img-input" type="file" class="custom-file-input"
                                                    name="img">
                                                <label id="img-label" class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                        <img src="" id="selected-img" class="img-fluid" style="height: 200px">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
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
    // // Get the file input element
    // const imgInput = document.getElementById('img-input');

    // // Get the label element
    // const imgLabel = document.getElementById('img-label');

    // // Add an event listener to the file input field
    // imgInput.addEventListener('change', function() {
    //     // Get the selected file name
    //     const fileName = imgInput.files[0].name;

    //     // Update the label text with the file name
    //     imgLabel.innerHTML = fileName;
    // });

// Get the file input element
const imgInput = document.getElementById('img-input');

// Get the label element
const imgLabel = document.getElementById('img-label');

// Get the image element
const imgElement = document.getElementById('selected-img');

    // Add an event listener to the file input field
    imgInput.addEventListener('change', function() {
        // Get the selected file name
        const fileName = imgInput.files[0].name;

        // Update the label text with the file name
        imgLabel.innerHTML = fileName;

        // Create a URL for the selected image
        const url = URL.createObjectURL(imgInput.files[0]);

        // Set the src attribute of the image element to the URL
        imgElement.setAttribute('src', url);

        // Show the image element
        imgElement.style.display = 'block';
    });

</script>
@endsection
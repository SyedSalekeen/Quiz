@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Create Catgeory</b></h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('store_category') }}" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputName">Catgeory Name</label>
                                            <input type="text" id="inputName" name="category_name" required
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('categories') }}" class="btn btn-secondary">Cancel</a>
                        <button class="btn btn-secondary float-right" type="submit">Create Catgeory</button>
                    </div>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
    <script>
        $('#summernote').summernote()
    </script>
@endsection

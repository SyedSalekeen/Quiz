@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Create Question</b></h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('store_question') }}" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputName">Question</label>
                                            <input type="text" id="inputName" name="question" required
                                                class="form-control">
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="correct_answer[]" value="option_1">
                                                <label for="inputName">Option 1</label>
                                                <input type="text" id="inputName" name="options[]" required
                                                    class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="correct_answer[]" value="option_2">
                                                <label for="inputName">Option 2</label>
                                                <input type="text" id="inputName" name="options[]" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="correct_answer[]" value="option_3">
                                                <label for="inputName">Option 3</label>
                                                <input type="text" id="inputName" name="options[]" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="correct_answer[]" value="option_4">
                                                <label for="inputName">Option 4</label>
                                                <input type="text" id="inputName" name="options[]" required
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="correct_answer[]" value="option_5">
                                                <label for="inputName">Option 5</label>
                                                <input type="text" id="inputName" name="options[]" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Question Catgeory</label>
                                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                                <option selected="selected" required>Select question category</option>
                                                @foreach ($questionCatgeory as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>
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

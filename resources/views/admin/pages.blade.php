@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Pages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Pages</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('pages.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Imgae</label>
                                        <input type="file" class="form-control" name="d16">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Parrainage</label>
                                        <textarea class="form-control" name="d13" id="summernote" cols="30" rows="10" required>{{$gs->d13}}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Imgae</label>
                                        <input type="file" class="form-control" name="d17">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ambassadeur</label>
                                        <textarea class="form-control" name="d14" id="summernote1" cols="30" rows="10" required>{{$gs->d14}}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Imgae</label>
                                        <input type="file" class="form-control" name="d18">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Yummy coin</label>
                                        <textarea class="form-control" name="d15" id="summernote2" cols="30" rows="10" required>{{$gs->d15}}</textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.container-fluid -->
        </section>
    </div>
@endsection

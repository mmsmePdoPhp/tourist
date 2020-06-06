@extends('layouts.app')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Role</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">New Category</h5>
                    <p class="card-text">
                        <x-package-formError />
                        <form action="{{route("role.store")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-8 row ">
                                    <label for="name" class="col-4 text-center">Text</label>
                                    <input id="name" class="form-control col-8" type="text" name="name">
                                </div>

                                <div class="col-4">
                                    <input id="submit" class="form-control btn btn-primary" type="submit" value="Create Role">

                                </div>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

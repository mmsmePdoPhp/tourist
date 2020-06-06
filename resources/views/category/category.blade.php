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
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <ul class="list-group">
                            @foreach ($categoris as $category)

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$category->name}}
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>

                            @endforeach

                          </ul>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                    {{ $categoris->onEachSide(2)->links() }}
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

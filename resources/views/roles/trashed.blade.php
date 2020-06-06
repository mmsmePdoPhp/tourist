@extends('layouts.app')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Trashed Roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Roles</li>
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
                    <ul class="list-group list-group-flush">
                        @foreach ($roles as $role)
                            <li class="list-group-item bg-steelblue py-0">
                                <h6 class="float-left my-3 text-white">{{$role->name}}</h6><!--#steelblue -->


                                <form action="{{route('role.restore')}}" method="POST" class="p-0 m-0">
                                    @csrf
                                    <input type="hidden" value="{{$role->id}}" name="id" id="id">
                                    <button type="submit" class="btn btn-sm  h-100  px-1 float-right " data-toggle="tooltip" data-placement="right"  title="edit">
                                        <i class="nav-icon text-info fas text-info fa-trash-restore p-3"></i>

                                    </button type="button">
                                </form>




                                <form action="{{route('role.destroy',$role->id)}}" method="post" class="m-0 p-0">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm  h-100  px-1 float-right " data-toggle="tooltip" data-placement="right"  title="remove">
                                        <i class="fas fa-trash text-crimson p-3"></i>
                                    </button type="button">
                                </form>
                                <div href="#" class="badge bg-purple py-2 px-2 badge-info float-right mr-3 my-3"><span class="text-orange">users &nbsp;</span>{{$role->users->count()}}</div>


                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="row justify-content-center">
                    {{ $roles->onEachSide(2)->links() }}
                </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

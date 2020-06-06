@extends('layouts.app')

@section('content')

<div id="app" v-cloak>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">profile</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->


        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">

            <div class="row justify-cotnent-center">

            @unless ($users->count() !=null)
                <p class="m-auto lead blockquote-footer"><i>any User registered yet.</i></p>
            @endunless


            @foreach ($users as $user)
                {{-- show user informations --}}
                <div class="col-sm-6 col-md-6 col-lg-4">


                    <div class="card mb-2  " style="width: 18rem;">
                        <div class="card-body row">
                            <div class="col-4">
                                <img class="img-circle float-right" width="60px" height="60px" src="{{asset('uploaded/'.($user->image !=null ? $user->image : 'default-avatar.png'))}}" alt="...">
                                <h5 class="text-center res-text" title="{{$user->name}}">&nbsp;{{substr($user->name,0,6)}}</h5>
                            </div>
                            <div class="col">
                                <span class="badge badge-info text-light float-right">{{$user->id}}</span>
                                <ul class="list-group list-group-flush mt-0">
                                    @foreach ($user->roles as $role)
                                        <li class="list-group-item"><strong>
                                            <i class="fas fa-user-tag"></i>
                                        </strong>&nbsp;
                                            <span>{{$role->name}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <ul class="list-group list-group-flush border-top">
                                <li class="list-group-item"><strong>Email: </strong>&nbsp;{{$user->email}}</li>
                                <li class="list-group-item"><strong>Created At: </strong>&nbsp;{{\Carbon\Carbon::createFromTimeStamp(strtotime($user->created_at))->diffForHumans()}}</li>
                                <li class="list-group-item"><strong>Created At: </strong>&nbsp;{{\Carbon\Carbon::createFromTimeStamp(strtotime($user->updated_at))->diffForHumans()}}</li>
                                <li class="list-group-item"><strong>Deleted At: </strong>&nbsp;{{\Carbon\Carbon::createFromTimeStamp(strtotime($user->deleted_at))->diffForHumans()}}</li>
                            </ul>

                        </div>

                        <div class="card-footer btn-group m-0 p-0" role="group" aria-label="Basic example">


                            <form action="{{route('users.destroy',$user->id)}}" class="btn"  method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm col bg-danger" data-toggle="tooltip" data-placement="bottom" title="remvoe user">
                                    <i class="nav-icon fas fa-user-times"></i>
                                </button>
                            </form>

                            <form action="{{route('users.restore')}}" method="POST" class="btn">
                                @csrf
                                <input type="hidden" value="{{$user->id}}" name="id" id="id">
                                <button class="btn btn-sm col bg-primary" data-toggle="tooltip" data-placement="bottom" title="restore user">
                                    <i class="nav-icon fas fa-trash-restore"></i>
                                </button>
                            </form>

                        </div>

                    </div>

                </div>
            @endforeach



        </div><!-- /.container-fluid -->

        <hr>
        <div class="row rounded justify-content-center p-0 bg-dark">
            <div class="text-center my-auto pt-3 ">
               {{ $users->onEachSide(1)->links() }}
            </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
@endsection

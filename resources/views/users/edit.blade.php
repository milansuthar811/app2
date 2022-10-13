
@extends('users.layout')
@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- style milan -->
    <div class="content-wrapper" style="width: 85%; margin-left: 20%; min-height: 258px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- <div class="col-sm-6">
                        <h1>Validation</h1>
                    </div> -->
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home.dashboard_index') }}">
                                    Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('users.index') }}"> Users</a></li>
                            <li class="breadcrumb-item active">Update</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">User Update
                                    <!-- <small>jQuery Validation</small> -->
                                </h3>
                            </div>
                            <!-- form start -->
                            <form id="quickForm" action="{{
                                route('users.update',$user->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name"
                                            class="form-control" value="{{
                                            $user->name }}"
                                        id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" name="username"
                                            class="form-control" value="{{
                                            $user->username }}"
                                        id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email
                                            address</label>
                                        <input type="email" name="email"
                                            class="form-control" value="{{
                                            $user->email }}"
                                        id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password"
                                            class="form-control"
                                            id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <!-- <div class="form-group mb-0">
                                        <div class="custom-control
                                            custom-checkbox">
                                            <input type="checkbox" name="terms"
                                                class="custom-control-input"
                                                id="exampleCheck1">
                                            <label class="custom-control-label"
                                                for="exampleCheck1">I agree to
                                                the <a href="#">terms of service</a>.</label>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn
                                        btn-primary">Submit</button>
                                    <a class="btn btn-primary" href="{{
                                        route('users.index') }}"> Back</a>
                                </div>
                            </form>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.control-sidebar -->
</div>
@endsection
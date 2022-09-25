 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="row">
    <div class="col-md-12 text-right">
      <div class="pull-right">
        <a class="btn btn-primary mr-3 mb-2" href="{{ route('users.create') }}" >Create User</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">DaTable with default features</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="280px">Action</th>
                    <th>Username</th>
                    <th >Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                     <td> <form action="{{ route('users.destroy',$user->id) }}"
                        method="POST">
                        <!-- <a class="btn btn-info" href="{{
                          route('users.show',$user->id) }}">Show</a> -->
                        <a class="btn btn-primary" href="{{
                          route('users.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                   
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Email</th>
                  </tr>
                </tfoot>
              </table>
              {!! $users->links() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@extends('admin.layout.app')


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
              <li class="breadcrumb-item"><a href="#">Roles</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  ADD ROLES
                </button>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

                <!-- /.MODAL-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
  
      <form method="POST" action="{{ route('roles.store') }}"  >
      @csrf
      <div class="form-group">
   
   
   
          <label for="exampleInputEmail1">ADD Roles</label>
          <input type="text" class="form-control"  name="name" placeholder="Enter role">
         
        </div>
        
       
      </div>
      <div class="modal-footer">
           
       
        <button type="submit" class="btn btn-primary">ADD ROLES</button>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- /.content-header -->

   
    <section class="content">
           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th> ACTION </th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
    
      <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>

        <form method="POST" action="{{ route('roles.destroy',$role->id) }}" >  
        @csrf
        @method('DELETE')
        <td> <a class="btn btn-info" href="{{  route('roles.edit',$role->id) }}" > EDIT </a>  
        <button type="submit" class="btn btn-danger" >Delete</button> 
        </td>

        </form>
      </tr>
      @endforeach
    </tbody>
    
  </table>


    
    </section>
    
  </div>
  

@endsection
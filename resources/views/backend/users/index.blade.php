@extends('admin.layouts')

@section('title', 'Student List')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			

			

		

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Students List</h3>
                  <a href="{{ route('user.add') }}" class="btn btn-rounded btn-success mb-5 float-right">Add New Student</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th>Name</th>
								<th>Email</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($users as $user)                                                            
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('user.delete', $user->id) }}" id="delete" class="btn btn-danger">Delete</a>
                                </td>
							</tr>
                            @endforeach
							
						</tbody>
					
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			 
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
@endsection
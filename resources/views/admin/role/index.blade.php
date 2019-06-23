@extends('admin.layouts.base')
@section('content')
<div class="right_col" role="main" style="min-height: 1704px;">
	{{-- titile --}}
	<br>
	<div class="title_left">
		<h3>Manajemen Roles</h3>
	</div>
	<div class="clearfix"></div>
	{{-- end titile --}}
	{{-- search --}}
	<div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          	<div class="input-group">
            	<input type="text" class="form-control" placeholder="Cari Roles">
            	<span class="input-group-btn">
              		<button class="btn btn-default" type="button">Cari</button>
            	</span>
         	</div>
     	</div>
    </div>
    <div class="clearfix"></div>
	{{-- end search --}}
	{{-- table --}}
	<div class="col-md-1 col-sm-1"></div>
	<div class="col-md-10 col-sm-10 col-xs-12">
		@if(Session::has('error'))
		    <div class="alert alert-warning alert-block">
		    	<button type="button" class="close" data-dismiss="alert">×</button>	
				<strong>{{ Session::get('error') }}</strong>
		    </div>
	    @endif
	    @if(Session::has('success'))
		    <div class="alert alert-success alert-block">
		    	<button type="button" class="close" data-dismiss="alert">×</button>
		    		<strong>{{ Session::get('success') }}</strong>
		    </div>
	    @endif
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRole">Tambah Role <i class="fa fa-plus-circle"></i></button>
	        </h2>
	        <ul class="nav navbar-right panel_toolbox">
	          <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
	          </li>
	        </ul>
	        <div class="clearfix"></div>
	      </div>
	      <div class="x_content" style="display: block;">
	        <table class="table table-hover">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama Role</th>
	              <th>Role Level</th>
	              <th colspan="3">Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@foreach ($roles as $key => $role)
	          		<tr>
		              <th scope="row">{{ ($key+1) }}</th>
		              <td>{{ $role->role }}</td>
		              <td>{{ $role->level }}</td>
		              <td>
							<a href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"> View</i></a>
							<button type="button" id="edit-item" data-item-id="{{ $role->id }}" style="color: blue;"><i class="fa fa-pencil"> Edit</i></button>
							{{-- <a href="{{ route('roles.edit', $role->id) }}"></a> --}}
							<a href=""><i class="fa fa-trash" style="color: red;"> Delete</i></a>
		              </td>
		            </tr>
	          	@endforeach
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	  {{-- end table --}}
	<div class="col-md-1 col-sm-1"></div>
	</div>
	<!-- Modal -->
  <div class="modal fade" id="addRole" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f2f2f2;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Role User</h4>
        </div>
        <div class="modal-body">
        	<form action="{{ route('roles.store') }}" method="post">
        		{{ csrf_field() }}
		       	<div class="row">
		       		<div class="form-group">
			          	<label>Nama Role</label>
				        <input type="text" id="role" name="role" required="" class="form-control" placeholder="Role name">
				    </div>
		       	</div>
		       	<div class="row">
		       		<div class="form-group">
			      		<label>Level Role</label>
			         	<select class="form-control" required="" name="level">
			            	<option value="">- Pilih Level -</option>
			            	@foreach ($level as $lvl)
			            		<option value="{{ $lvl }}" 
								@if (in_array($lvl, $rolesLevel))
									disabled="" title="Level sudah dipakai"
								@endif		
			            		>{{ $lvl }}
			            		</option>
			            	@endforeach
			         	</select>
			     	</div>
		       	</div>
       	</div>
        <div class="modal-footer">
        	<div class="row">
        		<div class="form-group col-md-3 col-sm-3 col-xs-6 pull-right">
	    			<button type="button" class="btn btn-warning" data-dismiss="modal">Tutup Jendela</button>
	        	</div>
	        	<div class="form-group col-md-3 col-sm-3 col-xs-6 pull-right">
	    			<input type="submit" value="Tambah Role" class="form-control btn btn-primary">
	      		</div>
        	</div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
@endsection
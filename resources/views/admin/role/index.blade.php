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
	        	<a href="javascript:void(0)" class="btn btn-success" id="add-new-role">Tambah Role <i class="fa fa-plus-circle"></i></a>
				{{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRole">Tambah Role <i class="fa fa-plus-circle"></i></button> --}}
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
	          		<tr id="role_id"_{{ $role->id }}>
		              <td scope="row">{{ ($key+1) }}</td>
		              <td>{{ $role->role }}</td>
		              <td>{{ $role->level }}</td>
		              <td>
							<a href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"> View</i></a>
							<a href="javascript:void(0)" id="edit-role" data-id="{{ $role->id }}"><i class="fa fa-pencil" data-urutan="{{ $key+1 }}"> Edit</i></a>
							<a href="javascript:void(0)" id="delete-role" data-id="{{ $role->id }}"><i class="fa fa-trash" style="color: red;"> Delete</i></a>
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
          <h4 class="modal-title" id="crudRoleHeader"></h4>
        </div>
        <div class="modal-body">
        	<form id="roleForm" name="roleForm" class="form-horizontal">
        		{{-- {{ csrf_field() }} --}}
        		<input type="hidden" name="role_id" id="role_id">
        		<input type="hidden" name="urutan_role" id="urutan_role">
		       	<div class="row">
		       		<div class="form-group">
			          	<label>Nama Role</label>
				        <input type="text" id="role" name="role" required="" class="form-control" placeholder="Role name">
				    </div>
		       	</div>
		       	<div class="row">
		       		<div class="form-group">
			      		<label>Level Role</label>
			         	<select class="form-control" required="" name="level" id="level">
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
	    			<button type="button" class="btn btn-success" id="btn-save" value="create">Simpan Role
            </button>
	      		</div>
        	</div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
   <script>
  $(document).ready(function () {
    console.log('tes');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /*  When user click add user button */
    $('#add-new-role').click(function () {
        $('#btn-save').val("create-user");
        $('#roleForm').trigger("reset");
        $('#crudRoleHeader').html("Add New Role");
        $('#addRole').modal('show');
    });
 
   /* When click edit user */
    $('body').on('click', '#edit-user', function () {
      var user_id = $(this).data('id');
      $.get('ajax-crud/' + user_id +'/edit', function (data) {
         $('#userCrudModal').html("Edit User");
          $('#btn-save').val("edit-user");
          $('#ajax-crud-modal').modal('show');
          $('#user_id').val(data.id);
          $('#name').val(data.name);
          $('#email').val(data.email);
      })
   });
   //delete user login
    $('body').on('click', '.delete-user', function () {
        var user_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('ajax-crud')}}"+'/'+user_id,
            success: function (data) {
                $("#user_id_" + user_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#roleForm").length > 0) {
      $("#roleForm").validate({
 
     submitHandler: function(form) {
 
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
      
      $.ajax({
          data: $('#roleForm').serialize(),
          url: "/admin/roles",
          type: "POST",
          dataType: 'json',
          success: function (data) {
          	var role = '<tr id="role_id_' + data.id + '"><td scope="row">'+ data.urutan +'</td><td>' + data.name + '</td><td>' + data.level + '</td>';
              	role += '<td><a href="/admin/roles/'+ data.id +'"><i class="fa fa-eye"> View</i></a><a href="javascript:void(0)" id="edit-role" data-id="'+ $data.id +'"><i class="fa fa-pencil" data-urutan="'+ data.urutan +'"> Edit</i></a><a href="javascript:void(0)" id="delete-role" data-id="'+ data.id +'"><i class="fa fa-trash" style="color: red;"> Delete</i></a></td></tr>';
              if (actionType == "create-user") {
                  $('#users-crud').append(role);
              } else {
                  $("#role_id_" + data.id).replaceWith(role);
              }
 
              $('#roleForm').trigger("reset");
              $('#addRole').modal('hide');
              $('#btn-save').html('Simpan Role');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Simpan Role');
          }
      });
    }
  })
}
   
  
</script>
@endsection
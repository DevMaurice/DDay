@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			  <div class="panel-heading clearfix">
					<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Cases:</h3>
					<div class="form-group pull-right">
						<div class="col-lg-12" >
							<a class="btn btn-primary" href="/category/create" role="button">
							<i class="fa fa-plus"></i> Create
							</a>
						</div>
					</div>
			  </div>
			  <div class="panel-body">		
				  <div class="table-responsive">
				  	<table class="table table-hover" id="table_id">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Type</th>
								<th class="pull-right">
								Action
								</th>
							</tr>
				  		</thead>
				  		<tbody>  					  				
				  			<tr>
				  				<td>1</td>
				  				<td>Criminal</td>
				  				<td>Hearing</td>			
				  				<td class="pull-right"><div class="btn-group">
				  					<a class="btn btn-primary" 
				  					href="/category/1" 
				  					role="button">
				  					<i class="fa fa-eye"></i> View
				  					</a>

				  					<a class="btn btn-success" 
				  					href="/category/1/edit" 
				  					role="button">
				  					<i class="fa fa-pencil-square-o"></i> Edit
				  					</a>

				  					<a class="btn btn-danger delete-button" 
				  					data-delete-link="{{ route('category.destroy', 1) }}" 
				  					role="button" 
				  					data-toggle="modal" 
				  					data-target="#modal-delete">
				  					<i class="fa fa-trash-o"></i> Delete
				  					</a>
				  				</div></td>
				  			</tr>												  		
				  		</tbody>
				  	</table>
				  </div>
			  </div>
		</div>
	</div>
</div>

{{-- Confirm Delete --}}
<div class="modal fade" id="modal-delete" tabIndex="-1">
	 <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					×
				</button>
				<h4 class="modal-title">Please Confirm</h4>
			</div>
			<div class="modal-body">
				 <p class="lead">
					<i class="fa fa-question-circle fa-lg"></i>  
						Are you sure you want to delete this Category?
				 </p>
			</div>
			<div class="modal-footer">
				<form method="POST" id="delete-form" action="">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-danger">
						<i class="fa fa-times-circle"></i> Yes
					</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function () {
    	$('#table_id').DataTable();
		});
	$('.delete-button').on('click', function () {
	    $('#delete-form').attr('action', $(this).data('delete-link'));
		});
</script>
@endsection
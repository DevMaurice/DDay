@extends('welcome')

@section('main')
   <div class="col-md-3"> 
	   <div style="height: 70px">
	   		<h1>Filters</h1>
	   </div>
		<div class="panel panel-primary">
		 	<div class="panel-heading">
		 		By type
		 	</div>
			<div class="panel-body">          
		       <ul class="list-group">
					<a href="" class="list-group-item ">Item 1</a>
		        </ul> 
		    </div>
		</div>
		<div class="panel panel-primary">
		 	<div class="panel-heading">
		 		By Date
		 	</div>
			<div class="panel-body">          
		       <ul class="list-group">
		        	<a href="" class="list-group-item ">Item 1</a>
		        </ul> 
		    </div>
		</div>
            
        </div>
         <div class="col-md-9">           
           <table class="table table-striped table-hover">
           	<thead>
           		<tr>
           			<th>Case #</th>
           			<th>Date</th>
           			<th>Participants</th>
           			<th>Type</th>
           			<th>Court</th>
           		</tr>
           	</thead>
           	<tbody>     	  
		       <tr>
		       		<td></td>
		       </tr>       
           	</tbody>
           </table>
        </div>
@endsection
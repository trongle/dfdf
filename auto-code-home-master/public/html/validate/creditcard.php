<form class="creditcard">	
	<div class="form-group col-md-6">
		<label for="adapter">Service:</label>
		<input type="number" class="creditcard-service form-control" name="my_element[validateOption][creditcard][service]" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Type:</label>
		<input type="text" class="creditcard-type form-control" name="my_element[validateOption][creditcard][type]" placeholder="xor | and" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="number" class="creditcard-service" name="my_element[validateOption][creditcard][service]" class="form-control" />
	<input type="text" class="creditcard-type" name="my_element[validateOption][creditcard][type]" placeholder="xor | and" class="form-control" />
</div>
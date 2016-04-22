<form class="inarray">
	
	<div class="form-group col-md-6">
		<label>Strict:</label> 
		<input type="number" class="inarray-strict form-control" name="my_element[validateOption][inarray][strict]" />
	</div>

	<div class="form-group col-md-6">
		<label>haystack:</label> 
		<input type="text" class="inarray-haystack form-control" name="my_element[validateOption][inarray][haystack]" />
	</div>

	<div class="form-group col-md-12">
		Recursive: <input type="checkbox" class="inarray-recursive" name="my_element[validateOption][inarray][recursive]" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>

</form> 
<div class="hidden-edit">
	<input type="hidden" class="inarray-strict" class="form-control" name="my_element[validateOption][inarray][strict]" />
	<input type="hidden" class="inarray-haystack" name="my_element[validateOption][inarray][haystack]" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="inarray-recursive" name="my_element[validateOption][inarray][recursive]" />
	</div>
</div>
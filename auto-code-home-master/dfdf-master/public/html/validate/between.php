<form id="between" >                    
	<div class="form-group col-md-6">
		<label for="min">min:</label>
		<input id="between-min" type="number" name="my_element[validateOption][between][min]" class="form-control" />
	</div>
	    
	<div class="form-group col-md-6">
		<label for="min">max:</label>
		<input id="between-max" type="number" name="my_element[validateOption][between][max]" class="form-control" />
	</div>

	<div class="form-group col-md-12">
		Inclusive: <input id="between-inclusive" type="checkbox" name="my_element[validateOption][between][inclusive]" />
	</div>
	<div class="form-group col-md-12"> 	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>           
<input data ="between-min" type="hidden" name="my_element[validateOption][between][min]" class="form-control" />
<input data ="between-max" type="hidden" name="my_element[validateOption][between][max]" class="form-control" />
<input data ="between-inclusive" type="hidden" name="my_element[validateOption][between][inclusive]" />					                                                 
	                        
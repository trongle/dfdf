<form id="greaterthan">
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" id="greaterthan-min" name="my_element[validateOption][greaterthan][min]"/>
	</div>

	<div class="form-group col-md-12">
		Inclusive: <input type="checkbox" id="greaterthan-inclusive" name="my_element[validateOption][greaterthan][inclusive]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="greaterthan-min" name="my_element[validateOption][greaterthan][min]"/>
	<div class="hide">
		<input type="checkbox" class="greaterthan-inclusive" name="my_element[validateOption][greaterthan][inclusive]"/>
	</div>
</div>
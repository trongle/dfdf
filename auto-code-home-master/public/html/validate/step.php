<form id="step" >
	<div class="form-group col-md-6">
		<label>base value :</label>
		<input type="text" id="step-baseValue" name="my_element[validateOption][step][baseValue]" class="form-control" />
	</div> 

	<div class="form-group col-md-6">
		<label>step :</label>
		<input type="text" id="step-step" name="my_element[validateOption][step][step]" class="form-control" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="step-baseValue" name="my_element[validateOption][step][baseValue]" />
	<input type="hidden" class="step-step" name="my_element[validateOption][step][step]" />
</div>
<form id="filerename">	

	<div class="form-group col-md-6">
		<label for="min">Target:</label>
		<input type="text" id="filerename-target" name="my_element[filterOption][filerename][target]" class="form-control" />
	</div>

	<div class="form-group col-md-6">
		<label for="min">Source:</label>
		<input type="text" id="filerename-source" name="my_element[filterOption][filerename][source]" class="form-control" />
	</div>

	<div class="form-group col-md-12">
		Overwrite:
		<input type="checkbox" id="filerename-overwrite" name="my_element[filterOption][filerename][overwrite]" />
	</div>

	<div class="form-group col-md-12">
		Randomize:
		<input type="checkbox" id="filerename-randomize" name="my_element[filterOption][filerename][randomize]" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>   
<div class="hidden-edit">
	<input type="hidden" class="filerename-target" name="my_element[filterOption][filerename][target]" class="form-control" />
	<input type="hidden" class="filerename-source" name="my_element[filterOption][filerename][source]" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="filerename-overwrite" name="my_element[filterOption][filerename][overwrite]" />
		<input type="checkbox" class="filerename-randomize" name="my_element[filterOption][filerename][randomize]" />
	</div>
</div>
                            
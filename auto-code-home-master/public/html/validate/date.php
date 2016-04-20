<form id="date" >
	<div class="form-group col-md-6">
	    <label for="min">format:</label>
	    <input type="text" id="date-format" name="my_element[validateOption][date][format]" class="form-control" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">locale:</label>
	    <input type="text" id="date-locale" name="my_element[validateOption][date][locale]" class="form-control" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="date-format" name="my_element[validateOption][date][format]" class="form-control" />
	<input type="hidden" class="date-locale" name="my_element[validateOption][date][locale]" class="form-control" />
</div>
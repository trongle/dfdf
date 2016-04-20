<form id="pregreplace">	

	<div class="form-group col-md-6">
		<label for="min">Pattern:</label>
		<input type="text" id="pregreplace-pattern" name="my_element[filterOption][pregreplace][pattern]"  class="form-control" />
	</div>

	<div class="form-group col-md-6">
		<label for="min">Replacement:</label>
		<input type="text" id="pregreplace-replacement" name="my_element[filterOption][pregreplace][replacement]"  class="form-control" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>   
<div class="hidden-edit">
	<input type="hidden" class="pregreplace-pattern" name="my_element[filterOption][pregreplace][pattern]"  />
	<input type="hidden" class="pregreplace-replacement" name="my_element[filterOption][pregreplace][replacement]"  />
</div>
                            
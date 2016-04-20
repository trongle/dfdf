<form id="postcode">

	<div class="form-group col-md-6">
		<label>Locale:</label>
		<input type="text" id="postcode-locale" name="my_element[validateOption][postcode][locale]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Format:</label>
		<input type="text" id="postcode-format" name="my_element[validateOption][postcode][format]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Service:</label>
		<input type="text" id="postcode-service" name="my_element[validateOption][postcode][service]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="postcode-locale" name="my_element[validateOption][postcode][locale]"/>
	<input type="hidden" class="postcode-format" name="my_element[validateOption][postcode][format]"/>
	<input type="hidden" class="postcode-service" name="my_element[validateOption][postcode][service]"/>
</div>

<form id="phonenumber" >

	<div class="form-group col-md-6">
		<label>Country:</label>
		<input type="text" id="phonenumber-country" name="my_element[validateOption][phonenumber][country]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Allowed types:</label>
		<input type="text" id="phonenumber-allowed_types" name="my_element[validateOption][phonenumber][allowed_types]"/>
	</div>

	<div class="form-group col-md-12">
		allow_possible: <input type="checkbox" id="phonenumber-allow_possible" name="my_element[validateOption][phonenumber][allow_possible]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="phonenumber-country" name="my_element[validateOption][phonenumber][country]"/>
	<input type="hidden" class="phonenumber-allowed_types" name="my_element[validateOption][phonenumber][allowed_types]"/>
	<div class="hide">
		<input type="checkbox" class="phonenumber-allow_possible" name="my_element[validateOption][phonenumber][allow_possible]"/>
	</div>
</div>
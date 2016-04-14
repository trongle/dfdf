<form id="emailaddress">
	<div class="form-group col-md-12">
		Use MX check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][useMxCheck]"/>
	</div>  

	<div class="form-group col-md-12">
		Use deep MX check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][useMxDeepCheck]"/>
	</div>

	<div class="form-group col-md-12">
		Use domain check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][useDomainCheck]"/>
	</div>

	<div class="form-group col-md-6">
		<label>allow:</label>
		<input type="number" name="my_element[validateOption][emailaddress][allow]" class="form-control"/>
	</div>

	<div class="form-group col-md-6">
		<label>Hostname Validator:</label>
		<input type="text" name="my_element[validateOption][emailaddress][hostnameValidator]" class="form-control"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

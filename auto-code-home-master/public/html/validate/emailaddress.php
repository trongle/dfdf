<form class="emailaddress">
	<div class="form-group col-md-12">
		Use MX check:
		<input type="checkbox" class="emailaddress-useMxCheck" name="my_element[validateOption][emailaddress][useMxCheck]"/>
	</div>  

	<div class="form-group col-md-12">
		Use deep MX check:
		<input type="checkbox" class="emailaddress-useMxDeepCheck " name="my_element[validateOption][emailaddress][useMxDeepCheck]"/>
	</div>

	<div class="form-group col-md-12">
		Use domain check:
		<input type="checkbox" class="emailaddress-useDomainCheck" name="my_element[validateOption][emailaddress][useDomainCheck]"/>
	</div>

	<div class="form-group col-md-6">
		<label>allow:</label>
		<input type="number" class="emailaddress-allow form-control" name="my_element[validateOption][emailaddress][allow]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Hostname Validator:</label>
		<input type="text" class="emailaddress-hostnameValidator form-control" name="my_element[validateOption][emailaddress][hostnameValidator]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="emailaddress-hostnameValidator" name="my_element[validateOption][emailaddress][hostnameValidator]" class="form-control"/>
	<input type="hidden" class="emailaddress-allow" name="my_element[validateOption][emailaddress][allow]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="emailaddress-useMxCheck" name="my_element[validateOption][emailaddress][useMxCheck]"/>
		<input type="checkbox" class="emailaddress-useMxDeepCheck" name="my_element[validateOption][emailaddress][useMxDeepCheck]"/>
		<input type="checkbox" class="emailaddress-useDomainCheck" name="my_element[validateOption][emailaddress][useDomainCheck]"/>
	</div>
</div>

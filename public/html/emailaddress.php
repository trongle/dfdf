<form id="emailaddress" class="hide">
	<div class="form-group col-md-12">
		use MX check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][mxcheck]"/>
	</div>  

	<div class="form-group col-md-12">
		use deep MX check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][mxdeepcheck]"/>
	</div>

	<div class="form-group col-md-12">
		use domain check:
		<input type="checkbox" name="my_element[validateOption][emailaddress][domaincheck]"/>
	</div>

	<div class="form-group col-md-6">
		<label>allow:</label>
		<input type="number" name="my_element[validateOption][emailaddress][allow]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

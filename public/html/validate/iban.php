<form id="iban" >
	<div class="form-group col-md-6">
		<label>Country code:</label>
		<input type="number" name="my_element[validateOption][iban][country_code]"/>
	</div>

	<div class="form-group col-md-6">
		Allow non sepa: <input type="checkbox" name="my_element[validateOption][iban][allow_non_sepa]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

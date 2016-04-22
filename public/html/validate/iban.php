<form class="iban" >
	<div class="form-group col-md-6">
		<label>Country code:</label>
		<input type="number" class="iban-country_code form-control" name="my_element[validateOption][iban][country_code]"/>
	</div>

	<div class="form-group col-md-6">
		Allow non sepa: <input type="checkbox" class="iban-allow_non_sepa" name="my_element[validateOption][iban][allow_non_sepa]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="iban-country_code" name="my_element[validateOption][iban][country_code]"/>
	<div class="hide">
		<input type="checkbox" class="iban-allow_non_sepa" name="my_element[validateOption][iban][allow_non_sepa]"/>
	</div>
</div>
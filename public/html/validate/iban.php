<form class="iban" >
	<div class="form-group col-md-6">
		<label>Country code:</label>
		<input type="number" class="iban-country_code form-control" name="my_element[validateOption][iban][country_code]"/>
	</div>

	<div class="form-group col-md-6">
		Allow non sepa: <input type="checkbox" class="iban-allow_non_sepa" name="my_element[validateOption][iban][allow_non_sepa]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOTSUPPORTED => "Unknown country within the IBAN"<br/>=> 
				<input type="text" name="my_element[messageError][iban][Zend\Validator\Iban::NOTSUPPORTED]" 
						class="form-control input-small iban-NOTSUPPORTED">
			</li>
			<li class="list-group-item">SEPANOTSUPPORTED => "Countries outside the Single Euro Payments Area (SEPA) are not supported"<br/>=> 
				<input type="text" name="my_element[messageError][iban][Zend\Validator\Iban::SEPANOTSUPPORTED]" 
						class="form-control input-small iban-SEPANOTSUPPORTED">
			</li>
			<li class="list-group-item">FALSEFORMAT => "The input has a false IBAN format"<br/>=> 
				<input type="text" name="my_element[messageError][iban][Zend\Validator\Iban::FALSEFORMAT]" 
						class="form-control input-small iban-FALSEFORMAT">
			</li>
			<li class="list-group-item">CHECKFAILED => "The input has failed the IBAN check"<br/>=> 
				<input type="text" name="my_element[messageError][iban][Zend\Validator\Iban::CHECKFAILED]" 
						class="form-control input-small iban-CHECKFAILED">
			</li>
		</ul>
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
	<input type="hidden" name="my_element[messageError][iban][Zend\Validator\Iban::NOTSUPPORTED]" class="iban-NOTSUPPORTED">
	<input type="hidden" name="my_element[messageError][iban][Zend\Validator\Iban::SEPANOTSUPPORTED]" class="iban-SEPANOTSUPPORTED">
	<input type="hidden" name="my_element[messageError][iban][Zend\Validator\Iban::FALSEFORMAT]" class="iban-FALSEFORMAT">
	<input type="hidden" name="my_element[messageError][iban][Zend\Validator\Iban::CHECKFAILED]" class="iban-CHECKFAILED">
</div>
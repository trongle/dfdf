<form class="phonenumber" >

	<div class="form-group col-md-6">
		<label>Country:</label>
		<input type="text" class="phonenumber-country form-control" name="my_element[validateOption][phonenumber][country]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Allowed types:</label>
		<input type="text" class="phonenumber-allowed_types form-control" name="my_element[validateOption][phonenumber][allowed_types]"/>
	</div>

	<div class="form-group col-md-12">
		allow_possible: <input type="checkbox" class="phonenumber-allow_possible" name="my_element[validateOption][phonenumber][allow_possible]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">NO_MATCH => 'The input does not match a phone number format'<br/>=> 
				<input type="text" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::NO_MATCH]" 
						class="form-control input-small phonenumber-NO_MATCH">
			</li>
			<li class="list-group-item">UNSUPPORTED => 'The country provided is currently unsupported'<br/>=> 
				<input type="text" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::UNSUPPORTED]" 
						class="form-control input-small phonenumber-UNSUPPORTED">
			</li>
			<li class="list-group-item">INVALID => 'Invalid type given. String expected'<br/>=> 
				<input type="text" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::INVALID]" 
						class="form-control input-small phonenumber-INVALID">
			</li>
		</ul>
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
	<input type="hidden" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::NO_MATCH]" class="phonenumber-NO_MATCH">
	<input type="hidden" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::UNSUPPORTED]" class="phonenumber-UNSUPPORTED">
	<input type="hidden" name="my_element[messageError][phonenumber][Zend\I18n\Validator\PhoneNumber::INVALID]" class="phonenumber-INVALID">
</div>
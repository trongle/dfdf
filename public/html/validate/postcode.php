<form class="postcode">

	<div class="form-group col-md-6">
		<label>Locale:</label>
		<input type="text" class="postcode-locale form-control" name="my_element[validateOption][postcode][locale]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Format:</label>
		<input type="text" class="postcode-format form-control" name="my_element[validateOption][postcode][format]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Service:</label>
		<input type="text" class="postcode-service form-control" name="my_element[validateOption][postcode][service]"/>
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String or integer expected"<br/>=> 
				<input type="text" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::INVALID]" 
						class="form-control input-small postcode-INVALID">
			</li>
			<li class="list-group-item">NO_MATCH => "The input does not appear to be a postal code"<br/>=> 
				<input type="text" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::NO_MATCH]" 
						class="form-control input-small postcode-NO_MATCH">
			</li>
			<li class="list-group-item">SERVICE => "The input does not appear to be a postal code"<br/>=> 
				<input type="text" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::SERVICE]" 
						class="form-control input-small postcode-SERVICE">
			</li>
			<li class="list-group-item">SERVICEFAILURE => "An exception has been raised while validating the input"<br/>=> 
				<input type="text" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::SERVICEFAILURE]" 
						class="form-control input-small postcode-SERVICEFAILURE">
			</li>
		</ul>
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
	<input type="hidden" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::INVALID]" class="postcode-INVALID">
	<input type="hidden" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::NO_MATCH]" class="postcode-NO_MATCH">
	<input type="hidden" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::SERVICE]" class="postcode-SERVICE">   
	<input type="hidden" name="my_element[messageError][postcode][Zend\I18n\Validator\PostCode::SERVICEFAILURE]" class="postcode-SERVICEFAILURE">   
</div>

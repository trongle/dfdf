<form class="identical" >	
	          
	<div class="form-group col-md-6">
		<label for="length">Token:</label>
		<input type="text" class="identical-token form-control" name="my_element[validateOption][identical][token]" />
	</div>
	
	<div class="form-group col-md-12">
		Strict: <input type="checkbox" class="identical-strict" name="my_element[validateOption][identical][strict]" />
	</div>

	<div class="form-group col-md-12">
		Literal: <input type="checkbox" class="identical-literal" name="my_element[validateOption][identical][literal]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_SAME => "The two given tokens do not match"<br/>=> 
				<input type="text" name="my_element[messageError][identical][Zend\Validator\Identical::NOT_SAME]" 
						class="form-control input-small identical-NOT_SAME">
			</li>
			<li class="list-group-item">MISSING_TOKEN => 'No token was provided to match against'<br/>=> 
				<input type="text" name="my_element[messageError][identical][Zend\Validator\Identical::MISSING_TOKEN]" 
						class="form-control input-small identical-MISSING_TOKEN">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="identical-token" name="my_element[validateOption][identical][token]" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="identical-strict" name="my_element[validateOption][identical][strict]" />
		<input type="checkbox" class="identical-literal" name="my_element[validateOption][identical][literal]" />
	</div>
	<input type="hidden" name="my_element[messageError][identical][Zend\Validator\Identical::NOT_SAME]" class="identical-NOT_SAME">
	<input type="hidden" name="my_element[messageError][identical][Zend\Validator\Identical::MISSING_TOKEN]" class="identical-MISSING_TOKEN">
</div>
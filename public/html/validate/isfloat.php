<form class="isfloat">
	<div class="form-group col-md-6">
		<label>Locale:</label>
		<input type="text" class="isfloat-locale form-control" name="my_element[validateOption][isfloat][locale]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String, integer or float expected"<br/>=> 
				<input type="text" name="my_element[messageError][isfloat][Zend\I18n\Validator\IsFloat::INVALID]" 
						class="form-control input-small isfloat-INVALID">
			</li>
			<li class="list-group-item">NOT_FLOAT => "The input does not appear to be a float"<br/>=> 
				<input type="text" name="my_element[messageError][isfloat][Zend\I18n\Validator\IsFloat::NOT_FLOAT]" 
						class="form-control input-small isfloat-NOT_FLOAT">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="isfloat-locale" name="my_element[validateOption][isfloat][locale]"/>
	<input type="hidden" name="my_element[messageError][isfloat][Zend\I18n\Validator\IsFloat::INVALID]" class="isfloat-INVALID">
	<input type="hidden" name="my_element[messageError][isfloat][Zend\I18n\Validator\IsFloat::NOT_FLOAT]" class="isfloat-NOT_FLOAT">
</div>

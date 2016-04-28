<form class="datetime" >
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][datetime][Zend\I18n\Validator\DateTime::INVALID]" 
						class="form-control input-small datetime-INVALID">
			</li>
			<li class="list-group-item">INVALID_DATETIME => "The input does not appear to be a valid datetime"<br/>=> 
				<input type="text" name="my_element[messageError][datetime][Zend\I18n\Validator\DateTime::INVALID_DATE]" 
						class="form-control input-small datetime-INVALID_DATE">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][datetime][Zend\I18n\Validator\DateTime::INVALID]" class="datetime-INVALID">
	<input type="hidden" name="my_element[messageError][datetime][Zend\I18n\Validator\DateTime::INVALID_DATE]" class="datetime-INVALID_DATE">	
</div>
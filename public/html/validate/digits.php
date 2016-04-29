
<form class="digits" >
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">NOT_DIGITS => "The input must contain only digits" <br/>=> 
				<input type="text" name="my_element[messageError][digits][Zend\Validator\Digits::NOT_DIGITS]" 
						class="form-control input-small digits-NOT_DIGITS">
			</li>
			<li class="list-group-item">STRING_EMPTY => "The input is an empty string"<br/>=> 
				<input type="text" name="my_element[messageError][digits][Zend\Validator\Digits::STRING_EMPTY]" 
						class="form-control input-small digits-STRING_EMPTY">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. String, integer or float expected"<br/>=> 
				<input type="text" name="my_element[messageError][digits][Zend\Validator\Digits::INVALID]" 
						class="form-control input-small digits-INVALID">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][digits][Zend\Validator\Digits::NOT_DIGITS]" class="digits-NOT_DIGITS">
	<input type="hidden" name="my_element[messageError][digits][Zend\Validator\Digits::STRING_EMPTY]" class="digits-STRING_EMPTY">	
	<input type="hidden" name="my_element[messageError][digits][Zend\Validator\Digits::INVALID]" class="digits-INVALID">	
</div>
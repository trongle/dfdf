<form class="isint">
	<div class="form-group col-md-6">
		<label>Locale:</label>
		<input type="text" class="isint-locale form-control" name="my_element[validateOption][isint][locale]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String or integer expected"<br/>=> 
				<input type="text" name="my_element[messageError][isint][Zend\I18n\Validator\IsInt::INVALID]" 
						class="form-control input-small isint-INVALID">
			</li>
			<li class="list-group-item">NOT_INT => "The input does not appear to be an integer"<br/>=> 
				<input type="text" name="my_element[messageError][isint][Zend\I18n\Validator\IsInt::NOT_INT]" 
						class="form-control input-small isint-NOT_INT">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

<div class="hidden-edit">
	<input type="hidden" class="isint-locale" name="my_element[validateOption][isint][locale]"/>
	<input type="hidden" name="my_element[messageError][isint][Zend\I18n\Validator\IsInt::INVALID]" class="isint-INVALID">
	<input type="hidden" name="my_element[messageError][isint][Zend\I18n\Validator\IsInt::NOT_INT]" class="isint-NOT_INT">
</div>
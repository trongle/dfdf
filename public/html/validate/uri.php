<form class="uri">
	<div class="form-group col-md-12">
		allow relative :
		<input type="checkbox" class="uri-allowrelatie form-control" name="my_element[validateOption][uri][allowrelative]" />
	</div> 

	<div class="form-group col-md-12">
		allow absolute :
		<input type="checkbox" class="uri-allowabsolute" name="my_element[validateOption][uri][allowabsolute]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String expected"<br/>=> 
				<input type="text" name="my_element[messageError][uri][Zend\Validator\Uri::INVALID]" 
						class="form-control input-small uri-INVALID">
			</li>
			<li class="list-group-item">NOT_URI => "The input does not appear to be a valid Uri"<br/>=> 
				<input type="text" name="my_element[messageError][uri][Zend\Validator\Uri::NOT_URI]" 
						class="form-control input-small uri-NOT_URI">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

<div class="hidden-edit">
	<input type="hidden" class="uri-allowrelatie" name="my_element[validateOption][uri][allowrelative]" />
	<input type="hidden" class="uri-allowabsolute" name="my_element[validateOption][uri][allowabsolute]" />
	<input type="hidden" name="my_element[messageError][uri][Zend\Validator\Uri::INVALID]" class="uri-INVALID">
	<input type="hidden" name="my_element[messageError][uri][Zend\Validator\Uri::NOT_URI]" class="uri-NOT_URI">
</div>
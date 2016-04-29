<form class="notempty">

	<div class="form-group col-md-6">
		<label>Type:</label>
		<input type="text" class="notempty-type form-control" name="my_element[validateOption][notempty][type]"/>
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">Is_Empty : "Value is required and can't be empty" <br/>=> 
				<input type="text" name="my_element[messageError][notempty][Zend\Validator\NotEmpty::IS_EMPTY]" 
						class="form-control input-small notempty-IS_EMPTY">
			</li>
			<li class="list-group-item">Invalid : "Invalid type given. String, integer, float, boolean or array expected" <br/>=> 
				<input type="text" name="my_element[messageError][notempty][Zend\Validator\NotEmpty::INVALID]" 
						class="form-control input-small notempty-INVALID">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="notempty-type" name="my_element[validateOption][notempty][type]"/>
	<input type="hidden" class="notempty-IS_EMPTY" name="my_element[messageError][notempty][Zend\Validator\NotEmpty::IS_EMPTY]"/>
	<input type="hidden" class="notempty-INVALID" name="my_element[messageError][notempty][Zend\Validator\NotEmpty::INVALID]"/>
</div>
<form class="greaterthan">
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" class="greaterthan-min form-control" name="my_element[validateOption][greaterthan][min]"/>
	</div>

	<div class="form-group col-md-12">
		Inclusive: <input type="checkbox" class="greaterthan-inclusive" name="my_element[validateOption][greaterthan][inclusive]"/>
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_GREATER => "The input is not greater than '%min%'" <br/>=> 
				<input type="text" name="my_element[messageError][greaterthan][Zend\Validator\GreaterThan::NOT_GREATER]" 
						class="form-control input-small greaterthan-NOT_GREATER">
			</li>
			<li class="list-group-item">NOT_GREATER_INCLUSIVE => "The input is not greater or equal than '%min%'" <br/>=> 
				<input type="text" name="my_element[messageError][greaterthan][Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE]" 
						class="form-control input-small greaterthan-NOT_GREATER_INCLUSIVE">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="greaterthan-min" name="my_element[validateOption][greaterthan][min]"/>
	<div class="hide">
		<input type="checkbox" class="greaterthan-inclusive" name="my_element[validateOption][greaterthan][inclusive]"/>
	</div>
	<input type="hidden" name="my_element[messageError][greaterthan][Zend\Validator\GreaterThan::NOT_GREATER]" class="greaterthan-NOT_GREATER">
	<input type="hidden" name="my_element[messageError][greaterthan][Zend\Validator\GreaterThan::NOT_GREATER_INCLUSIVE]" class="greaterthan-NOT_GREATER_INCLUSIVE">
</div>
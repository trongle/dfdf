<form class="inarray">
	
	<div class="form-group col-md-6">
		<label>Strict:</label> 
		<input type="number" class="inarray-strict form-control" name="my_element[validateOption][inarray][strict]" />
	</div>

	<div class="form-group col-md-6">
		<label>haystack:</label> 
		<input type="text" class="inarray-haystack form-control" name="my_element[validateOption][inarray][haystack]" />
	</div>

	<div class="form-group col-md-12">
		Recursive: <input type="checkbox" class="inarray-recursive" name="my_element[validateOption][inarray][recursive]" />
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_IN_ARRAY => 'The input was not found in the haystack'<br/>=> 
				<input type="text" name="my_element[messageError][inarray][Zend\Validator\InArray::NOT_IN_ARRAY]" 
						class="form-control input-small inarray-NOT_IN_ARRAY">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>

</form> 
<div class="hidden-edit">
	<input type="hidden" class="inarray-strict" class="form-control" name="my_element[validateOption][inarray][strict]" />
	<input type="hidden" class="inarray-haystack" name="my_element[validateOption][inarray][haystack]" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="inarray-recursive" name="my_element[validateOption][inarray][recursive]" />
	</div>
	<input type="hidden" name="my_element[messageError][inarray][Zend\Validator\InArray::NOT_IN_ARRAY]" class="inarray-NOT_IN_ARRAY">
</div>
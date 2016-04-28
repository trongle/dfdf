<form class="lessthan">
	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" class="lessthan-max form-control"  name="my_element[validateOption][lessthan][max]"/>
	</div>

	<div class="form-group col-md-12">
		Inclusive: <input type="checkbox" class="lessthan-inclusive" name="my_element[validateOption][lessthan][inclusive]"/>
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_LESS => "The input is not less than '%max%'"<br/>=> 
				<input type="text" name="my_element[messageError][lessthan][Zend\Validator\LessThan::NOT_LESS]" 
						class="form-control input-small lessthan-NOT_LESS">
			</li>
			<li class="list-group-item">NOT_LESS_INCLUSIVE => "The input is not less or equal than '%max%'"<br/>=> 
				<input type="text" name="my_element[messageError][lessthan][Zend\Validator\LessThan::NOT_LESS_INCLUSIVE]" 
						class="form-control input-small lessthan-NOT_LESS_INCLUSIVE">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="lessthan-max"  name="my_element[validateOption][lessthan][max]"/>
	<div class="hide">
		<input type="checkbox" class="lessthan-inclusive" name="my_element[validateOption][lessthan][inclusive]"/>
	</div>
	<input type="hidden" name="my_element[messageError][lessthan][Zend\Validator\LessThan::NOT_LESS]" class="lessthan-NOT_LESS">
	<input type="hidden" name="my_element[messageError][lessthan][Zend\Validator\LessThan::NOT_LESS_INCLUSIVE]" class="lessthan-NOT_LESS_INCLUSIVE">
</div>
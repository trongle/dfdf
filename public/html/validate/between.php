<form class="between" >                    
	<div class="form-group col-md-6">
		<label for="min">min:</label>
		<input class="between-min form-control" type="number" name="my_element[validateOption][between][min]" />
	</div>

	<div class="form-group col-md-6">
		<label for="min">max:</label>
		<input class="between-max form-control" type="number" name="my_element[validateOption][between][max]" />
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_BETWEEN => "The input is not between '%min%' and '%max%', inclusively" <br/>=> 
				<input type="text" name="my_element[messageError][between][Zend\Validator\Between::NOT_BETWEEN]" 
						class="form-control input-small between-NOT_BETWEEN">
			</li>
			<li class="list-group-item">NOT_BETWEEN_STRICT => "The input is not strictly between '%min%' and '%max%'" <br/>=> 
				<input type="text" name="my_element[messageError][between][Zend\Validator\Between::NOT_BETWEEN_STRICT]" 
						class="form-control input-small between-NOT_BETWEEN_STRICT">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">
		Inclusive: <input class="between-inclusive" type="checkbox" name="my_element[validateOption][between][inclusive]" />
	</div>
	<div class="form-group col-md-12"> 	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>           
<div class="hidden-edit">
	<input class ="between-min" type="hidden" name="my_element[validateOption][between][min]" class="form-control" />
	<input class ="between-max" type="hidden" name="my_element[validateOption][between][max]" class="form-control" />
	<div class="hide">
		<input class ="between-inclusive" type="checkbox" name="my_element[validateOption][between][inclusive]" />
	</div>
	<input type="hidden" name="my_element[messageError][between][Zend\Validator\Between::NOT_BETWEEN]" class="between-NOT_BETWEEN">
	<input type="hidden" name="my_element[messageError][between][Zend\Validator\Between::NOT_BETWEEN_STRICT]" class="between-NOT_BETWEEN_STRICT">
</div>
	                        
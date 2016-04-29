<form class="step" >
	<div class="form-group col-md-6">
		<label>base value :</label>
		<input type="text" class="step-baseValue form-control" name="my_element[validateOption][step][baseValue]" />
	</div> 

	<div class="form-group col-md-6">
		<label>step :</label>
		<input type="text" class="step-step form-control" name="my_element[validateOption][step][step]" />
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INVALID => "Invalid value given. Scalar expected"<br/>=> 
				<input type="text" name="my_element[messageError][step][Zend\Validator\Step::INVALID]" 
						class="form-control input-small step-INVALID">
			</li>
			<li class="list-group-item">NOT_STEP => "The input is not a valid step"<br/>=> 
				<input type="text" name="my_element[messageError][step][Zend\Validator\Step::NOT_STEP]" 
						class="form-control input-small step-NOT_STEP">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="step-baseValue" name="my_element[validateOption][step][baseValue]" />
	<input type="hidden" class="step-step" name="my_element[validateOption][step][step]" />
	<input type="hidden" name="my_element[messageError][step][Zend\Validator\Step::INVALID]" class="step-INVALID">
	<input type="hidden" name="my_element[messageError][step][Zend\Validator\Step::NOT_STEP]" class="step-NOT_STEP">
</div>
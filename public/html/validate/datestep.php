<form class="datestep" >
	<div class="form-group col-md-6">
	    <label for="min">Base value:</label>
	    <input type="text" class="datestep-baseValue form-control" name="my_element[validateOption][datestep][baseValue]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Step:</label>
	    <input type="text" class="datestep-step form-control" name="my_element[validateOption][datestep][step]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Format:</label>
	    <input type="text" class="datestep-format form-control" name="my_element[validateOption][datestep][format]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Timezone:</label>
	    <input type="text" class="datestep-timezone form-control" name="my_element[validateOption][datestep][timezone]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String, integer, array or DateTime expected" <br/>=> 
				<input type="text" name="my_element[messageError][datestep][Zend\Validator\DateStep::INVALID]" 
						class="form-control input-small datestep-INVALID">
			</li>
			<li class="list-group-item">INVALID_DATE => "The input does not appear to be a valid date" <br/>=> 
				<input type="text" name="my_element[messageError][datestep][Zend\Validator\DateStep::INVALID_DATE]" 
						class="form-control input-small datestep-INVALID_DATE">
			</li>
			<li class="list-group-item">FALSEFORMAT => "The input does not fit the date format '%format%'" <br/>=> 
				<input type="text" name="my_element[messageError][datestep][Zend\Validator\DateStep::FALSEFORMAT]" 
						class="form-control input-small datestep-FALSEFORMAT">
			</li>
			<li class="list-group-item">NOT_STEP => "The input is not a valid step" <br/>=> 
				<input type="text" name="my_element[messageError][datestep][Zend\Validator\DateStep::NOT_STEP]" 
						class="form-control input-small datestep-NOT_STEP">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="datestep-baseValue" name="my_element[validateOption][datestep][baseValue]" class="form-control" />
	<input type="hidden" class="datestep-step" name="my_element[validateOption][datestep][step]" class="form-control" />
	<input type="hidden" class="datestep-format" name="my_element[validateOption][datestep][format]" class="form-control" />
	<input type="hidden" class="datestep-timezone" name="my_element[validateOption][datestep][timezone]" class="form-control" />
	<input type="hidden" name="my_element[messageError][datestep][Zend\Validator\DateStep::INVALID]" class="date-INVALID">
	<input type="hidden" name="my_element[messageError][datestep][Zend\Validator\DateStep::INVALID_DATE]" class="date-INVALID_DATE">
	<input type="hidden" name="my_element[messageError][datestep][Zend\Validator\DateStep::FALSEFORMAT]" class="date-FALSEFORMAT">
	<input type="hidden" name="my_element[messageError][datestep][Zend\Validator\DateStep::NOT_STEP]" class="date-NOT_STEP">
</div>
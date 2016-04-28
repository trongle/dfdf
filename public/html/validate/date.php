<form class="date" >
	<div class="form-group col-md-6">
	    <label for="min">format:</label>
	    <input type="text" class="date-format form-control" name="my_element[validateOption][date][format]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">locale:</label>
	    <input type="text" class="date-locale form-control" name="my_element[validateOption][date][locale]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String, integer, array or DateTime expected" <br/>=> 
				<input type="text" name="my_element[messageError][date][Zend\Validator\Date::INVALID]" 
						class="form-control input-small date-INVALID">
			</li>
			<li class="list-group-item">INVALID_DATE => "The input does not appear to be a valid date" <br/>=> 
				<input type="text" name="my_element[messageError][date][Zend\Validator\Date::INVALID_DATE]" 
						class="form-control input-small date-INVALID_DATE">
			</li>
			<li class="list-group-item">FALSEFORMAT => "The input does not fit the date format '%format%'" <br/>=> 
				<input type="text" name="my_element[messageError][date][Zend\Validator\Date::FALSEFORMAT]" 
						class="form-control input-small date-FALSEFORMAT">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="date-format" name="my_element[validateOption][date][format]" class="form-control" />
	<input type="hidden" class="date-locale" name="my_element[validateOption][date][locale]" class="form-control" />
	<input type="hidden" name="my_element[messageError][date][Zend\Validator\Date::INVALID]" class="date-INVALID">
	<input type="hidden" name="my_element[messageError][date][Zend\Validator\Date::INVALID_DATE]" class="date-INVALID_DATE">
	<input type="hidden" name="my_element[messageError][date][Zend\Validator\Date::FALSEFORMAT]" class="date-FALSEFORMAT">
</div>
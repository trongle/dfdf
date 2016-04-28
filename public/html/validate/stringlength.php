<form class="stringlength">                    
	<div class="form-group col-md-6">
		<label for="min">min:</label>
		<input type="number" class="stringlength-min form-control" name="my_element[validateOption][stringlength][min]" />
	</div>
	    
	<div class="form-group col-md-6">
		<label for="min">max:</label>
		<input type="number" class="stringlength-max form-control" name="my_element[validateOption][stringlength][max]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String expected"<br/>=> 
				<input type="text" name="my_element[messageError][stringlength][Zend\Validator\StringLength::INVALID]" 
						class="form-control input-small stringlength-INVALID">
			</li>
			<li class="list-group-item">TOO_SHORT => "The input is less than %min% characters long"<br/>=> 
				<input type="text" name="my_element[messageError][stringlength][Zend\Validator\StringLength::TOO_SHORT]" 
						class="form-control input-small stringlength-TOO_SHORT">
			</li>
			<li class="list-group-item">TOO_LONG => "The input is more than %max% characters long"<br/>=> 
				<input type="text" name="my_element[messageError][stringlength][Zend\Validator\StringLength::TOO_LONG]" 
						class="form-control input-small stringlength-TOO_LONG">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>      
<div class="hidden-edit">
	<input type="hidden" class="stringlength-min" name="my_element[validateOption][stringlength][min]" />
	<input type="hidden" class="stringlength-max" name="my_element[validateOption][stringlength][max]" />
	<input type="hidden" name="my_element[messageError][stringlength][Zend\Validator\StringLength::INVALID]" class="stringlength-INVALID">
	<input type="hidden" name="my_element[messageError][stringlength][Zend\Validator\StringLength::TOO_SHORT]" class="stringlength-TOO_SHORT">
	<input type="hidden" name="my_element[messageError][stringlength][Zend\Validator\StringLength::TOO_LONG]" class="stringlength-TOO_LONG">
</div>


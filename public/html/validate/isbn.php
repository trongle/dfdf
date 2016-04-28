<form class="isbn" >
	<div class="form-group col-md-6">
		<label>type:</label>
		<input type="text" class="isbn-type form-control" name="my_element[validateOption][isbn][type]" />
	</div> 

	<div class="form-group col-md-6">
		<label>separator :</label>
		<input type="text" class="isbn-separator form-control" name="my_element[validateOption][isbn][separator]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String or integer expected"<br/>=> 
				<input type="text" name="my_element[messageError][isbn][Zend\Validator\Isbn::INVALID]" 
						class="form-control input-small isbn-INVALID">
			</li>
			<li class="list-group-item">NO_ISBN => "The input is not a valid ISBN number"<br/>=> 
				<input type="text" name="my_element[messageError][isbn][Zend\Validator\Isbn::NO_ISBN]" 
						class="form-control input-small isbn-NO_ISBN">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="isbn-type" name="my_element[validateOption][isbn][type]"  />
	<input type="hidden" class="isbn-separator" name="my_element[validateOption][isbn][separator]"  />
	<input type="hidden" name="my_element[messageError][isbn][Zend\Validator\Isbn::INVALID]" class="isbn-INVALID">
	<input type="hidden" name="my_element[messageError][isbn][Zend\Validator\Isbn::NO_ISBN]" class="isbn-NO_ISBN">
</div>


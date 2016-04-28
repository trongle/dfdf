<form class="filehash" >
	<div class="form-group col-md-6">
		<label>Algorithm:</label>
		<input type="text" class="filehash-algorithm form-control" name="my_element[validateOption][filehash][algorithm]"/>
	</div>  

	<div class="form-group col-md-6">
		<label>Hash:</label>
		<input type="text" class="filehash-hash form-control" name="my_element[validateOption][filehash][hash]"/>
	</div>	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">DOES_NOT_MATCH => "File does not match the given hashes" <br/>=> 
				<input type="text" name="my_element[messageError][filehash][Zend\Validator\File\Hash::DOES_NOT_MATCH]" 
						class="form-control input-small filehash-DOES_NOT_MATCH">
			</li>
			<li class="list-group-item">NOT_DETECTED => "A hash could not be evaluated for the given file" <br/>=> 
				<input type="text" name="my_element[messageError][filehash][Zend\Validator\File\Hash::NOT_DETECTED]" 
						class="form-control input-small filehash-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][filehash][Zend\Validator\File\Hash::NOT_FOUND]" 
						class="form-control input-small filehash-NOT_FOUND">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filehash-algorithm" name="my_element[validateOption][filehash][algorithm]" class="form-control"/>
	<input type="hidden" class="filehash-hash" name="my_element[validateOption][filehash][hash]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][filehash][Zend\Validator\File\Hash::DOES_NOT_MATCH]" class="filehash-DOES_NOT_MATCH">
	<input type="hidden" name="my_element[messageError][filehash][Zend\Validator\File\Hash::NOT_DETECTED]" class="filehash-NOT_DETECTED">
	<input type="hidden" name="my_element[messageError][filehash][Zend\Validator\File\Hash::NOT_FOUND]" class="filehash-NOT_FOUND">
</div>
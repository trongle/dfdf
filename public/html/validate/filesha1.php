<form class="filesha1" >

	<div class="form-group col-md-6">
		<label>Hash:</label>
		<input type="text" class="filesha1-hash form-control" name="my_element[validateOption][filesha1][hash]"/>
	</div>
	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">DOES_NOT_MATCH => "File does not match the given sha1 hashes" <br/>=> 
				<input type="text" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::DOES_NOT_MATCH]" 
						class="form-control input-small filesha1-DOES_NOT_MATCH">
			</li>
			<li class="list-group-item">NOT_DETECTED => "A sha1 hash could not be evaluated for the given file" <br/>=> 
				<input type="text" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::NOT_DETECTED]" 
						class="form-control input-small filesha1-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::NOT_FOUND]" 
						class="form-control input-small filesha1-NOT_FOUND">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filesha1-hash" name="my_element[validateOption][filesha1][hash]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::DOES_NOT_MATCH]" class="filesha1-DOES_NOT_MATCH">
	<input type="hidden" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::NOT_DETECTED]" class="filesha1-NOT_DETECTED">
	<input type="hidden" name="my_element[messageError][filesha1][Zend\Validator\File\Sha1::NOT_FOUND]" class="filesha1-NOT_FOUND">
</div>
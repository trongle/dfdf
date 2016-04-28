<form class="filemd5">

	<div class="form-group col-md-6">
		<label>Hash:</label>
		<input type="text" class="filemd5-hash form-control" name="my_element[validateOption][filemd5][hash]"/>
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">DOES_NOT_MATCH => "File does not match the given md5 hashes" <br/>=> 
				<input type="text" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::DOES_NOT_MATCH]" 
						class="form-control input-small filemd5-DOES_NOT_MATCH">
			</li>
			<li class="list-group-item">NOT_DETECTED => "An md5 hash could not be evaluated for the given file" <br/>=> 
				<input type="text" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::NOT_DETECTED]" 
						class="form-control input-small filemd5-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::NOT_FOUND]" 
						class="form-control input-small filemd5-NOT_FOUND">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filemd5-hash" name="my_element[validateOption][filemd5][hash]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::DOES_NOT_MATCH]" class="filemd5-DOES_NOT_MATCH">
	<input type="hidden" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::NOT_DETECTED]" class="filemd5-NOT_DETECTED">
	<input type="hidden" name="my_element[messageError][filemd5][Zend\Validator\File\Md5::NOT_FOUND]" class="filemd5-NOT_FOUND">
</div>
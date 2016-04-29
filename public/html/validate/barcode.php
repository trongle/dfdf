<form class="barcode" >	
	<div class="form-group col-md-6">
		<label for="adapter">Adapter:</label>
		<input type="text" class="barcode-adapter form-control" name="my_element[validateOption][barcode][adapter]" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Length:</label>
		<input type="text" class="barcode-length form-control" name="my_element[validateOption][barcode][length]" />
	</div>

	<div class="form-group col-md-12">
		Checksum: <input class="barcode-useCheckSum" type="checkbox" name="my_element[validateOption][barcode][useCheckSum]" />
	</div>

	<div class=" form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">FAILED : "The input failed checksum validation" <br/>=> 
				<input type="text" name="my_element[messageError][barcode][Zend\Validator\Barcode::FAILED]" 
						class="form-control input-small barcode-FAILED">
			</li>
			<li class="list-group-item">INVALID_CHARS : "The input contains invalid characters" <br/>=> 
				<input type="text" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID_CHARS]" 
						class="form-control input-small barcode-INVALID_CHARS">
			</li>
			<li class="list-group-item">INVALID_LENGTH : "The input should have a length of %length% characters" <br/>=> 
				<input type="text" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID_LENGTH]" 
						class="form-control input-small barcode-INVALID_LENGTH">
			</li>
			<li class="list-group-item">INVALID : "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID]" 
						class="form-control input-small barcode-INVALID">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="barcode-adapter" name="my_element[validateOption][barcode][adapter]" class="form-control" />
	<input type="hidden" class="barcode-length" name="my_element[validateOption][barcode][length]" class="form-control" />
	<div class="hide">
		<input class="barcode-useCheckSum" type="checkbox" name="my_element[validateOption][barcode][useCheckSum]" />
	</div>
	<input type="hidden" name="my_element[messageError][barcode][Zend\Validator\Barcode::FAILED]" class="barcode-FAILED">
	<input type="hidden" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID_CHARS]" class="barcode-INVALID_CHARS">
	<input type="hidden" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID_LENGTH]" class="barcode-INVALID_LENGTH">
	<input type="hidden" name="my_element[messageError][barcode][Zend\Validator\Barcode::INVALID]" class="barcode-INVALID">
</div>
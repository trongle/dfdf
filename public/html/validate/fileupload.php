<form class="fileupload" >
	
	<div class="form-group col-md-6">
		<label>Files:</label>
		<input type="text" class="fileupload-files form-control" name="my_element[validateOption][fileupload][files]" />
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INI_SIZE => "File '%value%' exceeds the defined ini size" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::INI_SIZE]" 
						class="form-control input-small fileupload-INI_SIZE">
			</li>
			<li class="list-group-item">FORM_SIZE => "File '%value%' exceeds the defined form size" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::FORM_SIZE]" 
						class="form-control input-small fileupload-FORM_SIZE">
			</li>
			<li class="list-group-item">NO_FILE => "File '%value%' was not uploaded" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NO_FILE]" 
						class="form-control input-small fileupload-NO_FILE">
			</li>
			<li class="list-group-item">NO_TMP_DIR => "No temporary directory was found for file '%value%'" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NO_TMP_DIR]" 
						class="form-control input-small fileupload-NO_TMP_DIR">
			</li>
			<li class="list-group-item">CANT_WRITE => "File '%value%' can't be written" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::CANT_WRITE]" 
						class="form-control input-small fileupload-CANT_WRITE">
			</li>
			<li class="list-group-item">EXTENSION => "A PHP extension returned an error while uploading the file '%value%'" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::EXTENSION]" 
						class="form-control input-small fileupload-EXTENSION">
			</li>
			<li class="list-group-item">ATTACK => "File '%value%' was illegally uploaded. This could be a possible attack" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::ATTACK]" 
						class="form-control input-small fileupload-ATTACK">
			</li>
			<li class="list-group-item">NOT_READABLE => "One or more files can not be read" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NOT_READABLE]" 
						class="form-control input-small fileupload-NOT_READABLE">
			</li>
			<li class="list-group-item">FILE_NOT_FOUND => "File '%value%' was not found" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::FILE_NOT_FOUND]" 
						class="form-control input-small fileupload-FILE_NOT_FOUND">
			</li>
			<li class="list-group-item">UNKNOWN => "Unknown error while uploading file '%value%'" <br/>=> 
				<input type="text" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::UNKNOWN]" 
						class="form-control input-small fileupload-UNKNOWN">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="fileupload-files" name="my_element[validateOption][fileupload][files]" />
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::INI_SIZE]" class="fileupload-INI_SIZE">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::FORM_SIZE]" class="fileupload-FORM_SIZE">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NO_FILE]" class="fileupload-NO_FILE">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NO_TMP_DIR]" class="fileupload-NO_TMP_DIR">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::CANT_WRITE]" class="fileupload-CANT_WRITE">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::EXTENSION]" class="fileupload-EXTENSION">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::ATTACK]" class="fileupload-ATTACK">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::NOT_READABLE]" class="fileupload-NOT_READABLE">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::FILE_NOT_FOUND]" class="fileupload-FILE_NOT_FOUND">
	<input type="hidden" name="my_element[messageError][fileupload][Zend\Validator\File\Upload::UNKNOWN]" class="fileupload-UNKNOWN">
</div>
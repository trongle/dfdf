<form class="filemimetype">
	<div class="form-group col-md-12">
		Enable header check: <input type="checkbox" class="filemimetype-enableHeaderCheck"  name="my_element[validateOption][filemimetype][enableHeaderCheck]" />
	</div>  

	<div class="form-group col-md-12">
		Disable magic file: <input type="checkbox" class="filemimetype-disableMagicFile"  name="my_element[validateOption][filemimetype][disableMagicFile]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Magic file:</label>
		<input type="text" class="filemimetype-magicFile form-control"  name="my_element[validateOption][filemimetype][magicFile]"/>
	</div>
	
	<div class="form-group col-md-6">
		<label>Mime type:</label>
		<input type="text"  class="filemimetype-mimeType form-control" name="my_element[validateOption][filemimetype][mimeType]"/>
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">FALSE_TYPE => "File has an incorrect mimetype of '%type%'" <br/>=> 
				<input type="text" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::FALSE_TYPE]" 
						class="form-control input-small filemimetype-FALSE_TYPE">
			</li>
			<li class="list-group-item">NOT_DETECTED => "The mimetype could not be detected from the file" <br/>=> 
				<input type="text" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::NOT_DETECTED]" 
						class="form-control input-small filemimetype-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_READABLE => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::NOT_READABLE]" 
						class="form-control input-small filemimetype-NOT_READABLE">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<div class="hide">
		<input type="checkbox" class="filemimetype-enableHeaderCheck"  name="my_element[validateOption][filemimetype][enableHeaderCheck]" />
		<input type="checkbox" class="filemimetype-disableMagicFile"  name="my_element[validateOption][filemimetype][disableMagicFile]"/>
	</div>
	<input type="hidden" class="filemimetype-magicFile"  name="my_element[validateOption][filemimetype][magicFile]" class="form-control"/>
	<input type="hidden"  class="filemimetype-mimeType" name="my_element[validateOption][filemimetype][mimeType]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::FALSE_TYPE]" class="filemimetype-FALSE_TYPE">
	<input type="hidden" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::NOT_DETECTED]" class="filemimetype-NOT_DETECTED">
	<input type="hidden" name="my_element[messageError][filemimetype][Zend\Validator\File\MimeType::NOT_READABLE]" class="filemimetype-NOT_READABLE">
</div>
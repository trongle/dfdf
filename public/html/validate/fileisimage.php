<form class="fileisimage">

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">FALSE_TYPE => "File is no image, '%type%' detected"<br/>=> 
				<input type="text" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::FALSE_TYPE]" 
						class="form-control input-small fileisimage-FALSE_TYPE">
			</li>
			<li class="list-group-item">NOT_DETECTED => "The mimetype could not be detected from the file"<br/>=> 
				<input type="text" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::NOT_DETECTED]" 
						class="form-control input-small fileisimage-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_READABLE => "File is not readable or does not exist"<br/>=> 
				<input type="text" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::NOT_READABLE]" 
						class="form-control input-small fileisimage-NOT_READABLE">
			</li>			
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::FALSE_TYPE]" class="fileisimage-FALSE_TYPE">
	<input type="hidden" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::NOT_DETECTED]" class="fileisimage-NOT_DETECTED">	
	<input type="hidden" name="my_element[messageError][fileisimage][Zend\Validator\File\IsImage::NOT_READABLE]" class="fileisimage-NOT_READABLE">	
</div>
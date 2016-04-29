<form class="fileiscompressed">

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">FALSE_TYPE => "File is not compressed, '%type%' detected"<br/>=> 
				<input type="text" name="my_element[messageError][fileiscompressed][Zend\Validator\File\IsCompressed::FALSE_TYPE]" 
						class="form-control input-small fileiscompressed-FALSE_TYPE">
			</li>
			<li class="list-group-item">NOT_READABLE => "File is not readable or does not exist"<br/>=> 
				<input type="text" name="my_element[messageError][fileiscompressed][Zend\Validator\File\IsCompressed::NOT_READABLE]" 
						class="form-control input-small fileiscompressed-NOT_READABLE">
			</li>			
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][fileiscompressed][Zend\Validator\File\IsCompressed::FALSE_TYPE]" class="fileiscompressed-FALSE_TYPE">
	<input type="hidden" name="my_element[messageError][fileiscompressed][Zend\Validator\File\IsCompressed::NOT_READABLE]" class="fileiscompressed-NOT_READABLE">	
</div>
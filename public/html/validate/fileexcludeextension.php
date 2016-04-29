<form class="fileexcludeextension" >

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">FALSE_EXTENSION => "File has an incorrect extension" <br/>=> 
				<input type="text" name="my_element[messageError][fileexcludeextension][Zend\Validator\File\ExcludeExtension::FALSE_EXTENSION]" 
						class="form-control input-small fileexcludeextension-FALSE_EXTENSION">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist"<br/>=> 
				<input type="text" name="my_element[messageError][fileexcludeextension][Zend\Validator\File\ExcludeExtension::NOT_FOUND]" 
						class="form-control input-small fileexcludeextension-NOT_FOUND">
			</li>
			
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][fileexcludeextension][Zend\Validator\File\ExcludeExtension::FALSE_EXTENSION]" class="fileexcludeextension-FALSE_EXTENSION">
	<input type="hidden" name="my_element[messageError][fileexcludeextension][Zend\Validator\File\ExcludeExtension::NOT_FOUND]" class="fileexcludeextension-NOT_FOUND">	
</div>
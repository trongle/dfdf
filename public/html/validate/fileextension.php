<form class="fileextension" >

	<div class="form-group col-md-6">
		<label>Extension:</label> 
		<input type="text" class="fileextension-extension form-control" name="my_element[validateOption][fileextension][extension]"/>
	</div>

	<div class="form-group col-md-12">
		Case: <input type="checkbox" class="fileextension-case form-control" name="my_element[validateOption][fileextension][case]"/>
	</div>
	
		
		
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">FALSE_EXTENSION => "File has an incorrect extension" <br/>=> 
				<input type="text" name="my_element[messageError][fileextension][Zend\Validator\File\Extension::FALSE_EXTENSION]" 
						class="form-control input-small fileextension-FALSE_EXTENSION">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][fileextension][Zend\Validator\File\Extension::NOT_FOUND]" 
						class="form-control input-small fileextension-NOT_FOUND">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 

</form>
<div class="hidden-edit">
	<input type="hidden" class="fileextension-extension" name="my_element[validateOption][fileextension][extension]"/>
	<div class="hide">
		<input type="checkbox" class="fileextension-case" name="my_element[validateOption][fileextension][case]"/>
	</div>
	<input type="hidden" name="my_element[messageError][fileextension][Zend\Validator\File\Extension::FALSE_EXTENSION]" class="fileextension-FALSE_EXTENSION">
	<input type="hidden" name="my_element[messageError][fileextension][Zend\Validator\File\Extension::NOT_FOUND]" class="fileextension-NOT_FOUND">
</div>
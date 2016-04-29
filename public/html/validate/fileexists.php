<form class="fileexists" >

	<div class="form-group col-md-6">
		<label>direction:</label>
		<input type="text" class="fileexists-direction form-control" name="my_element[validateOption][fileexists][direction]"/>
	</div>
	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">DOES_NOT_EXIST => "File does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][fileexists][Zend\Validator\File\Exists::DOES_NOT_EXIST]" 
						class="form-control input-small fileexists-DOES_NOT_EXIST">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 

</form>
<div class="hidden-edit">
	<input type="hidden" class="fileexists-direction" name="my_element[validateOption][fileexists][direction]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][fileexists][Zend\Validator\File\Exists::DOES_NOT_EXIST]" class="fileexists-DOES_NOT_EXIST">
</div>
<form class="isintanseof" >

	<div class="form-group col-md-6">
		<label>Class name:</label>
		<input type="text" class="isintanseof-classname form-control" name="my_element[validateOption][isintanseof][classname]" />
	</div> 
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">NOT_INSTANCE_OF => "The input is not an instance of '%className%'"<br/>=> 
				<input type="text" name="my_element[messageError][isintanseof][Zend\Validator\IsInstanceOf::NOT_INSTANCE_OF]" 
						class="form-control input-small isintanseof-NOT_INSTANCE_OF">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="isintanseof-classname" name="my_element[validateOption][isintanseof][classname]"  />
	<input type="hidden" name="my_element[messageError][isintanseof][Zend\Validator\IsInstanceOf::NOT_INSTANCE_OF]" class="isintanseof-NOT_INSTANCE_OF">
</div>
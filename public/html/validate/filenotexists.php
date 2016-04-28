<form class="filenotexists">
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">DOES_EXIST => "File exists" <br/>=> 
				<input type="text" name="my_element[messageError][filenotexists][Zend\Validator\File\NotExists::DOES_EXIST]" 
						class="form-control input-small filenotexists-DOES_EXIST">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][filenotexists][Zend\Validator\File\NotExists::DOES_EXIST]" class="filenotexists-DOES_EXIST">
</div>
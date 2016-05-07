<form class="timezone">
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INVALID => 'Invalid timezone given.'<br/>=> 
				<input type="text" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID]" 
						class="form-control input-small timezone-INVALID">
			</li>
			<li class="list-group-item">INVALID_TIMEZONE_LOCATION => 'Invalid timezone location given.'<br/>=> 
				<input type="text" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID_TIMEZONE_LOCATION]" 
						class="form-control input-small timezone-INVALID_TIMEZONE_LOCATION">
			</li>
			<li class="list-group-item">INVALID_TIMEZONE_ABBREVIATION => 'Invalid timezone abbreviation given.'<br/>=> 
				<input type="text" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID_TIMEZONE_ABBREVIATION]" 
						class="form-control input-small timezone-INVALID_TIMEZONE_ABBREVIATION">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>
     
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID]" class="timezone-INVALID">
	<input type="hidden" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID_TIMEZONE_LOCATION]" class="timezone-INVALID_TIMEZONE_LOCATION">
	<input type="hidden" name="my_element[messageError][timezone][Zend\Validator\Timezone::INVALID_TIMEZONE_ABBREVIATION]" class="timezone-INVALID_TIMEZONE_ABBREVIATION">
</div>
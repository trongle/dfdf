<form class="csrf" >
	<div class="form-group col-md-6">
		<label>Name:</label>
		<input type="text" class="csrf-name form-control" name="my_element[validateOption][csrf][name]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Salt:</label>
		<input type="text" class="csrf-salt form-control" name="my_element[validateOption][csrf][salt]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Session:</label>
		<input type="text" class="csrf-session form-control" name="my_element[validateOption][csrf][session]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Timeout:</label>
		<input type="text" class="csrf-timeout form-control" name="my_element[validateOption][csrf][timeout]"/>
	</div>
	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_SAME => "The form submitted did not originate from the expected site" <br/>=> 
				<input type="text" name="my_element[messageError][csrf][Zend\Validator\Csrf::NOT_SAME]" 
						class="form-control input-small csrf-NOT_SAME">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="csrf-name" name="my_element[validateOption][csrf][name]"/>
	<input type="hidden" class="csrf-salt" name="my_element[validateOption][csrf][salt]"/>
	<input type="hidden" class="csrf-session" name="my_element[validateOption][csrf][session]"/>
	<input type="hidden" class="csrf-timeout" name="my_element[validateOption][csrf][timeout]"/>
	<input type="hidden" name="my_element[messageError][csrf][Zend\Validator\Csrf::NOT_SAME]" class="csrf-NOT_SAME">
</div>
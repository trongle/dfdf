<form id="csrf" >
	<div class="form-group col-md-6">
		<label>Name:</label>
		<input type="text" id="csrf-name" name="my_element[validateOption][csrf][name]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Salt:</label>
		<input type="text" id="csrf-salt" name="my_element[validateOption][csrf][salt]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Session:</label>
		<input type="text" id="csrf-session" name="my_element[validateOption][csrf][session]"/>
	</div>
	<div class="form-group col-md-6">
		<label>Timeout:</label>
		<input type="text" id="csrf-timeout" name="my_element[validateOption][csrf][timeout]"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
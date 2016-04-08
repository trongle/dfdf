<form id="ip" class="hide">
	<div class="form-group col-md-6">
		<label>allow:</label>
		<input type="number" name="my_element[validate][ip][allow]" class="form-control" />
	</div> 

	<div class="form-group col-md-6">
		<label>ip validator :</label>
		<input type="text" name="my_element[validate][ip][ipvalidator]" class="form-control" />
	</div> 

	<div class="form-group col-md-12">
		use ldn check:
		<input type="checkbox" name="my_element[validate][ip][useldncheck]"/>
	</div>

	<div class="form-group col-md-12">
		use tln check:
		<input type="checkbox" name="my_element[validate][ip][usetlncheck]"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
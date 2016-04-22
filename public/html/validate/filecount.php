<form class="filecount" >

	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" class="filecount-min form-control" name="my_element[validateOption][filecount][min]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" class="filecount-max form-control" name="my_element[validateOption][filecount][max]"/>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

<div class="hidden-edit">
	<input type="hidden" class="filecount-min" name="my_element[validateOption][filecount][min]" class="form-control"/>
	<input type="hidden" class="filecount-max" class="form-control" name="my_element[validateOption][filecount][max]"/>
</div>

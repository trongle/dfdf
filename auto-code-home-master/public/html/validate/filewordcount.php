<form class="filewordcount">
	<div class="form-group col-md-6">
		<label>min:</label>
		<input type="number" class="filewordcount-min form-control" name="my_element[validateOption][filewordcount][min]" />
	</div>  

	<div class="form-group col-md-6">
		<label>max:</label>
		<input type="number" class="filewordcount-max form-control" name="my_element[validateOption][filewordcount][max]"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filewordcount-min" name="my_element[validateOption][filewordcount][min]" class="form-control" />
	<input type="hidden" class="filewordcount-max" name="my_element[validateOption][filewordcount][max]" class="form-control"/>
</div>
<form class="isbn" >
	<div class="form-group col-md-6">
		<label>type:</label>
		<input type="text" class="isbn-type form-control" name="my_element[validateOption][isbn][type]" />
	</div> 

	<div class="form-group col-md-6">
		<label>separator :</label>
		<input type="text" class="isbn-separator form-control" name="my_element[validateOption][isbn][separator]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="isbn-type" name="my_element[validateOption][isbn][type]"  />
	<input type="hidden" class="isbn-separator" name="my_element[validateOption][isbn][separator]"  />
</div>


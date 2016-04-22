<form class="stringlength">                    
	<div class="form-group col-md-6">
		<label for="min">min:</label>
		<input type="number" class="stringlength-min form-control" name="my_element[validateOption][stringlength][min]" />
	</div>
	    
	<div class="form-group col-md-6">
		<label for="min">max:</label>
		<input type="number" class="stringlength-max form-control" name="my_element[validateOption][stringlength][max]" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>      
<div class="hidden-edit">
	<input type="hidden" class="stringlength-min" name="my_element[validateOption][stringlength][min]" />
	<input type="hidden" class="stringlength-max" name="my_element[validateOption][stringlength][max]" />
</div>


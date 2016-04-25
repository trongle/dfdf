<form class="identical" >	
	          
	<div class="form-group col-md-6">
		<label for="length">Token:</label>
		<input type="text" class="identical-token form-control" name="my_element[validateOption][identical][token]" />
	</div>
	
	<div class="form-group col-md-12">
		Strict: <input type="checkbox" class="identical-strict" name="my_element[validateOption][identical][strict]" />
	</div>

	<div class="form-group col-md-12">
		Literal: <input type="checkbox" class="identical-literal" name="my_element[validateOption][identical][literal]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="identical-token" name="my_element[validateOption][identical][token]" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="identical-strict" name="my_element[validateOption][identical][strict]" />
		<input type="checkbox" class="identical-literal" name="my_element[validateOption][identical][literal]" />
	</div>
</div>
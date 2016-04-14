<form id="ip">
	
	<div class="form-group col-md-12">
		Allow IP v4:
		<input type="checkbox" name="my_element[validateOption][ip][allowipv4]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP v6:
		<input type="checkbox" name="my_element[validateOption][ip][allowipv6]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP vFuture:
		<input type="checkbox" name="my_element[validateOption][ip][allowipvfuture]"/>
	</div>

	<div class="form-group col-md-12">
		Allow Literal:
		<input type="checkbox" checked name="my_element[validateOption][ip][allowliteral]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
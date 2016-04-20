<form id="ip">
	
	<div class="form-group col-md-12">
		Allow IP v4:
		<input type="checkbox" id="ip-allowipv4"  name="my_element[validateOption][ip][allowipv4]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP v6:
		<input type="checkbox" id="ip-allowipv6" name="my_element[validateOption][ip][allowipv6]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP vFuture:
		<input type="checkbox" id="ip-allowipvfuture" name="my_element[validateOption][ip][allowipvfuture]"/>
	</div>

	<div class="form-group col-md-12">
		Allow Literal:
		<input type="checkbox" id="ip-allowliteral" checked name="my_element[validateOption][ip][allowliteral]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<div class="hide">
		<input type="checkbox" class="ip-allowipv4"  name="my_element[validateOption][ip][allowipv4]"/>
		<input type="checkbox" class="ip-allowipv6" name="my_element[validateOption][ip][allowipv6]"/>
		<input type="checkbox" class="ip-allowipvfuture" name="my_element[validateOption][ip][allowipvfuture]"/>
		<input type="checkbox" class="ip-allowliteral" checked name="my_element[validateOption][ip][allowliteral]"/>
	</div>
</div>
<form id="hostname">
	<div class="form-group col-md-6">
		<label>Allow:</label>
		<input type="number" name="my_element[validateOption][hostname][allow]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Ip validator:</label>
		<input type="number" name="my_element[validateOption][hostname][ipValidator]"/>
	</div>

	<div class="form-group col-md-6">
		Use Idn check: <input type="checkbox" name="my_element[validateOption][hostname][useIdnCheck]"/>
	</div>

	<div class="form-group col-md-6">
		Use Tld check: <input type="checkbox" name="my_element[validateOption][hostname][useTldCheck]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

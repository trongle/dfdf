<form class="hostname">
	<div class="form-group col-md-6">
		<label>Allow:</label>
		<input type="number" class="hostname-allow form-control" name="my_element[validateOption][hostname][allow]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Ip validator:</label>
		<input type="number" class="hostname-ipValidator form-control" name="my_element[validateOption][hostname][ipValidator]"/>
	</div>

	<div class="form-group col-md-6">
		Use Idn check: <input type="checkbox" class="hostname-useIdnCheck" name="my_element[validateOption][hostname][useIdnCheck]"/>
	</div>

	<div class="form-group col-md-6">
		Use Tld check: <input type="checkbox" class="hostname-useTldCheck" name="my_element[validateOption][hostname][useTldCheck]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="hostname-allow" name="my_element[validateOption][hostname][allow]"/>
	<input type="hidden" class="hostname-ipValidator" name="my_element[validateOption][hostname][ipValidator]"/>
	<div class="hide">
		<input type="checkbox" class="hostname-useIdnCheck" name="my_element[validateOption][hostname][useIdnCheck]"/>
		<input type="checkbox" class="hostname-useTldCheck" name="my_element[validateOption][hostname][useTldCheck]"/>
	</div>
</div>

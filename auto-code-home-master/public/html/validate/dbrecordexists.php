<form id="dbrecordexists">
	<div class="form-group col-md-6">
		<label for="min">table:</label>
		<input type="text" id="dbrecordexists-table" name="my_element[validateOption][dbrecordexists][table]" class="form-control" />
	</div>
	    
	<div class="form-group col-md-6">
		<label for="min">field:</label>
		<input type="text" id="dbrecordexists-field" name="my_element[validateOption][dbrecordexists][field]" class="form-control" />
	</div> 

	<div class="form-group col-md-6">
		<label for="min">adapter:</label>
		<input type="text" id="dbrecordexists-adapter"  name="my_element[validateOption][dbrecordexists][adapter]" class="form-control" />
	</div>  

	<div class="form-group col-md-6">
		<label for="min">exclude:</label>
		<input type="text" name="my_element[validateOption][dbrecordexists][exclude]" id="dbrecordexists-exclude" class="form-control" placeholder="field:name,value:name"/>
	</div>

	<div class="form-group col-md-6">
		<label for="min">Schema:</label>
		<input type="text" name="my_element[validateOption][dbrecordexists][schema]" id="dbrecordexists-schema" class="form-control" />
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="dbrecordexists-table" name="my_element[validateOption][dbrecordexists][table]" />
	<input type="hidden" class="dbrecordexists-field" name="my_element[validateOption][dbrecordexists][field]" />
	<input type="hidden" class="dbrecordexists-adapter"  name="my_element[validateOption][dbrecordexists][adapter]"/>
	<input type="hidden" name="my_element[validateOption][dbrecordexists][exclude]" class="dbrecordexists-exclude" placeholder="field:name,value:name"/>
	<input type="hidden" name="my_element[validateOption][dbrecordexists][schema]" class="dbrecordexists-schema"  />
</div>

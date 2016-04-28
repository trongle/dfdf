<form class="dbnorecordexists" >
	<div class="form-group col-md-6">
		<label for="min">Table:</label>
		<input type="text"  class="dbnorecordexists-table form-control" name="my_element[validateOption][dbnorecordexists][table]" />
	</div>
	    
	<div class="form-group col-md-6">
		<label for="min">Field:</label>
		<input type="text"  class="dbnorecordexists-field form-control" name="my_element[validateOption][dbnorecordexists][field]" />
	</div> 

	<div class="form-group col-md-6">
		<label for="min">Adapter:</label>
		<input type="text" class="dbnorecordexists-adapter form-control" name="my_element[validateOption][dbnorecordexists][adapter]" />
	</div>  

	<div class="form-group col-md-6">
		<label for="min">Exclude:</label>
		<input type="text" class="dbnorecordexists-exclude form-control" name="my_element[validateOption][dbnorecordexists][exclude]" placeholder="field:name,value:name"/>
	</div>

	<div class="form-group col-md-6">
		<label for="min">Schema:</label>
		<input type="text" class="dbnorecordexists-schema form-control" name="my_element[validateOption][dbnorecordexists][schema]" />
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">ERROR_NO_RECORD_FOUND => "No record matching the input was found" <br/>=> 
				<input type="text" name="my_element[messageError][dbnorecordexists][Zend\Validator\Db\NoRecordExists::ERROR_NO_RECORD_FOUND]" 
						class="form-control input-small dbnorecordexists-ERROR_NO_RECORD_FOUND">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type ="hidden" class="dbnorecordexists-table" name="my_element[validateOption][dbnorecordexists][table]" class="form-control" />
	<input type ="hidden" class="dbnorecordexists-field" name="my_element[validateOption][dbnorecordexists][field]" class="form-control" />
	<input type ="hidden" class="dbnorecordexists-adapter" name="my_element[validateOption][dbnorecordexists][adapter]" class="form-control" />
	<input type ="hidden" class="dbnorecordexists-exclude" name="my_element[validateOption][dbnorecordexists][exclude]" class="form-control" placeholder="field:name,value:name"/>
	<input type ="hidden" class="dbnorecordexists-schema" name="my_element[validateOption][dbnorecordexists][schema]" class="form-control" />
	<input type ="hidden" name="my_element[messageError][dbnorecordexists][Zend\Validator\Db\NoRecordExists::ERROR_NO_RECORD_FOUND]" class="dbnorecordexists-ERROR_NO_RECORD_FOUND">
</div>



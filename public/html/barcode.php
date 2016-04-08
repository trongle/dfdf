<form id="barcode" class="hide">	
	<div class="form-group col-md-6">
		<label for="adapter">Adapter:</label>
		<input type="text" name="my_element[validate][barcode][adapter]" class="form-control" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Length:</label>
		<input type="text" name="my_element[validate][barcode][length]" class="form-control" />
	</div>

	<div class="form-group col-md-12">
		Checksum: <input type="checkbox" name="my_element[validate][barcode][checksum]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
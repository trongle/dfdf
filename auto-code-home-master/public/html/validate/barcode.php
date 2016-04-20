<form id="barcode" >	
	<div class="form-group col-md-6">
		<label for="adapter">Adapter:</label>
		<input type="text" id="barcode-adapter" name="my_element[validateOption][barcode][adapter]" class="form-control" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Length:</label>
		<input type="text" id="barcode-length" name="my_element[validateOption][barcode][length]" class="form-control" />
	</div>

	<div class="form-group col-md-12">
		Checksum: <input id="barcode-useCheckSum" type="checkbox" name="my_element[validateOption][barcode][useCheckSum]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="barcode-adapter" name="my_element[validateOption][barcode][adapter]" class="form-control" />
	<input type="hidden" class="barcode-length" name="my_element[validateOption][barcode][length]" class="form-control" />
	<div class="hide">
		<input class="barcode-useCheckSum" type="checkbox" name="my_element[validateOption][barcode][useCheckSum]" />
	</div>
</div>
<form id="filemimetype">
	<div class="form-group col-md-12">
		Enable header check: <input type="checkbox" name="my_element[validateOption][filemimetype][enableHeaderCheck]" />
	</div>  

	<div class="form-group col-md-12">
		Disable magic file: <input type="checkbox" name="my_element[validateOption][filemimetype][disableMagicFile]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Magic file:</label>
		<input type="text" name="my_element[validateOption][filemimetype][magicFile]" class="form-control"/>
	</div>

	<div class="form-group col-md-6">
		<label>Mime type:</label>
		<input type="text" name="my_element[validateOption][filemimetype][mimeType]" class="form-control"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<form class="filemimetype">
	<div class="form-group col-md-12">
		Enable header check: <input type="checkbox" class="filemimetype-enableHeaderCheck"  name="my_element[validateOption][filemimetype][enableHeaderCheck]" />
	</div>  

	<div class="form-group col-md-12">
		Disable magic file: <input type="checkbox" class="filemimetype-disableMagicFile"  name="my_element[validateOption][filemimetype][disableMagicFile]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Magic file:</label>
		<input type="text" class="filemimetype-magicFile form-control"  name="my_element[validateOption][filemimetype][magicFile]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Mime type:</label>
		<input type="text"  class="filemimetype-mimeType form-control" name="my_element[validateOption][filemimetype][mimeType]"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<div class="hide">
		<input type="checkbox" class="filemimetype-enableHeaderCheck"  name="my_element[validateOption][filemimetype][enableHeaderCheck]" />
		<input type="checkbox" class="filemimetype-disableMagicFile"  name="my_element[validateOption][filemimetype][disableMagicFile]"/>
	</div>
	<input type="hidden" class="filemimetype-magicFile"  name="my_element[validateOption][filemimetype][magicFile]" class="form-control"/>
	<input type="hidden"  class="filemimetype-mimeType" name="my_element[validateOption][filemimetype][mimeType]" class="form-control"/>
</div>
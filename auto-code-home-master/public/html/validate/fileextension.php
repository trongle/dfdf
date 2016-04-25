<form class="fileextension" >

	<div class="form-group col-md-6">
		<label>Extension:</label> 
		<input type="text" class="fileextension-extension form-control" name="my_element[validateOption][fileextension][extension]"/>
	</div>

	<div class="form-group col-md-12">
		Case: <input type="checkbox" class="fileextension-case form-control" name="my_element[validateOption][fileextension][case]"/>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 

</form>
<div class="hidden-edit">
	<input type="hidden" class="fileextension-extension" name="my_element[validateOption][fileextension][extension]"/>
	<div class="hide">
		<input type="checkbox" class="fileextension-case" name="my_element[validateOption][fileextension][case]"/>
	</div>
</div>
<form class="filehash" >
	<div class="form-group col-md-6">
		<label>Algorithm:</label>
		<input type="text" class="filehash-algorithm form-control" name="my_element[validateOption][filehash][algorithm]"/>
	</div>  

	<div class="form-group col-md-6">
		<label>Hash:</label>
		<input type="text" class="filehash-hash form-control" name="my_element[validateOption][filehash][hash]"/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filehash-algorithm" name="my_element[validateOption][filehash][algorithm]" class="form-control"/>
	<input type="hidden" class="filehash-hash" name="my_element[validateOption][filehash][hash]" class="form-control"/>
</div>
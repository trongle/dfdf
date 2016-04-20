<form id="filesize">
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" id="filesize-min" name="my_element[validateOption][filesize][min]" class="form-control" />
	</div>  

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" id="filesize-max" name="my_element[validateOption][filesize][max]" class="form-control"/>
	</div>

	<div class="form-group col-md-12">
		Use byte string: <input type="checkbox" id="filesize-useByteString" name="my_element[validateOption][filesize][useByteString]" checked/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filesize-min" name="my_element[validateOption][filesize][min]" class="form-control" />
	<input type="hidden" class="filesize-max" name="my_element[validateOption][filesize][max]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="filesize-useByteString" name="my_element[validateOption][filesize][useByteString]" checked/>
	</div>
</div>
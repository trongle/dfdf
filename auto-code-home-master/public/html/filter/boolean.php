<form class="boolean">	
	<div class="form-group col-md-6">
		<label for="min">Translations:</label>
		<input type="text" class="boolean-translations form-control" name="my_element[filterOption][boolean][translations]" placeholder="a1,a2,a3..." />
	</div>

	<div class="form-group col-md-12">
		<label for="min">Type:</label>
		<input type="number" class="boolean-type form-control" name="my_element[filterOption][boolean][type]" />
	</div>

	<div class="form-group col-md-12">
		Casting:
		<input type="checkbox" class="boolean-casting" name="my_element[filterOption][boolean][casting]" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>   
<div class="hidden-edit">
	<input type="hidden" class="boolean-translations" name="my_element[filterOption][boolean][translations]" placeholder="a1,a2,a3..." class="form-control" />
	<input type="hidden" class="boolean-type" name="my_element[filterOption][boolean][type]"  class="form-control" />
	<div class="hide">
		<input type="checkbox" class="boolean-casting" name="my_element[filterOption][boolean][casting]" />
	</div>
</div>
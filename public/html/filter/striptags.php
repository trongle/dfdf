<form class="striptags">	

	<div class="form-group col-md-6">
		<label for="min">Allow Tags:</label>
		<input type="text" class="striptags-allowTags form-control" name="my_element[filterOption][striptags][allowTags]" placeholder="i1:v1,i2:v2....."  />
	</div>

	<div class="form-group col-md-6">
		<label for="min">Allow Attribs:</label>
		<input type="text" class="striptags-allowAttribs form-control" name="my_element[filterOption][striptags][allowAttribs]" placeholder="i1:v1,i2:v2....."  />
	</div>

	<div class="form-group col-md-6">
		Allow Comments:
		<input type="checkbox" class="striptags-allowComments" name="my_element[filterOption][striptags][allowComments]" />
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>   
<div class="hidden-edit">
	<input type="hidden" class="striptags-allowTags" name="my_element[filterOption][striptags][allowTags]" placeholder="i1:v1,i2:v2....."  class="form-control" />
	<input type="hidden" class="striptags-allowAttribs" name="my_element[filterOption][striptags][allowAttribs]" placeholder="i1:v1,i2:v2....."  class="form-control" />
	<div class="hide">
		<input type="checkbox" class="striptags-allowComments" name="my_element[filterOption][striptags][allowComments]" />
	</div>
</div>
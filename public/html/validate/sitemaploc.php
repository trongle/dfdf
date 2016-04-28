<form class="sitemaploc">
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_VALID => "The input is not a valid sitemap location"<br/>=> 
				<input type="text" name="my_element[messageError][sitemaploc][Zend\Validator\Sitemap\Loc::NOT_VALID]" 
						class="form-control input-small sitemaploc-NOT_VALID">
			</li>
			<li class="list-group-item">INVALID   => "Invalid type given. String expected"<br/>=> 
				<input type="text" name="my_element[messageError][sitemaploc][Zend\Validator\Sitemap\Loc::INVALID]" 
						class="form-control input-small sitemaploc-INVALID">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>
     
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][sitemaploc][Zend\Validator\Sitemap\Loc::NOT_VALID]" class="sitemaploc-NOT_VALID">
	<input type="hidden" name="my_element[messageError][sitemaploc][Zend\Validator\Sitemap\Loc::INVALID]" class="sitemaploc-INVALID">
</div>
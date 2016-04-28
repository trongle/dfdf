<form class="sitemappriority">
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_VALID => "The input is not a valid sitemap priority"<br/>=> 
				<input type="text" name="my_element[messageError][sitemappriority][Zend\Validator\Sitemap\Priority::NOT_VALID]" 
						class="form-control input-small sitemappriority-NOT_VALID">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. Numeric string, integer or float expected"<br/>=> 
				<input type="text" name="my_element[messageError][sitemappriority][Zend\Validator\Sitemap\Priority::INVALID]" 
						class="form-control input-small sitemappriority-INVALID">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>
     
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][sitemappriority][Zend\Validator\Sitemap\Priority::NOT_VALID]" class="sitemappriority-NOT_VALID">
	<input type="hidden" name="my_element[messageError][sitemappriority][Zend\Validator\Sitemap\Priority::INVALID]" class="sitemappriority-INVALID">
</div>
<form class="sitemapchangefreq">

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_VALID => "The input is not a valid sitemap changefreq"<br/>=> 
				<input type="text" name="my_element[messageError][sitemapchangefreq][Zend\Validator\Sitemap\Changefreq::NOT_VALID]" 
						class="form-control input-small sitemapchangefreq-NOT_VALID">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][sitemapchangefreq][Zend\Validator\Sitemap\Changefreq::INVALID]" 
						class="form-control input-small sitemapchangefreq-INVALID">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>
     
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][sitemapchangefreq][Zend\Validator\Sitemap\Changefreq::NOT_VALID]" class="sitemapchangefreq-NOT_VALID">
	<input type="hidden" name="my_element[messageError][sitemapchangefreq][Zend\Validator\Sitemap\Changefreq::INVALID]" class="sitemapchangefreq-INVALID">
</div>
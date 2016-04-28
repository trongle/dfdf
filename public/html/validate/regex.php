<form class="regex">
	<div class="form-group col-md-6">
		<label>pattern :</label>
		<input type="text" class="regex-pattern form-control" name="my_element[validateOption][regex][pattern]" />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID   => "Invalid type given. String, integer or float expected"<br/>=> 
				<input type="text" name="my_element[messageError][regex][Zend\Validator\Regex::INVALID]" 
						class="form-control input-small regex-INVALID">
			</li>
			<li class="list-group-item">NOT_MATCH => "The input does not match against pattern '%pattern%'"<br/>=> 
				<input type="text" name="my_element[messageError][regex][Zend\Validator\Regex::NOT_MATCH]" 
						class="form-control input-small regex-NOT_MATCH">
			</li>
			<li class="list-group-item">ERROROUS  => "There was an internal error while using the pattern '%pattern%'"<br/>=> 
				<input type="text" name="my_element[messageError][regex][Zend\Validator\Regex::ERROROUS]" 
						class="form-control input-small regex-ERROROUS">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="regex-pattern" name="my_element[validateOption][regex][pattern]" class="form-control" />
	<input type="hidden" name="my_element[messageError][regex][Zend\Validator\Regex::INVALID]" class="regex-INVALID">
	<input type="hidden" name="my_element[messageError][regex][Zend\Validator\Regex::NOT_MATCH]" class="regex-NOT_MATCH">
	<input type="hidden" name="my_element[messageError][regex][Zend\Validator\Regex::ERROROUS]" class="regex-ERROROUS">
</div>
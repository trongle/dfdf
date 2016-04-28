<form class="filewordcount">
	<div class="form-group col-md-6">
		<label>min:</label>
		<input type="number" class="filewordcount-min form-control" name="my_element[validateOption][filewordcount][min]" />
	</div>  

	<div class="form-group col-md-6">
		<label>max:</label>
		<input type="number" class="filewordcount-max form-control" name="my_element[validateOption][filewordcount][max]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">TOO_MUCH => "Too many words, maximum '%max%' are allowed but '%count%' were counted" <br/>=> 
				<input type="text" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::TOO_MUCH]" 
						class="form-control input-small filewordcount-TOO_MUCH">
			</li>
			<li class="list-group-item">TOO_LESS => "Too few words, minimum '%min%' are expected but '%count%' were counted" <br/>=> 
				<input type="text" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::TOO_LESS]" 
						class="form-control input-small filewordcount-TOO_LESS">
			</li>
			<li class="list-group-item">NOT_FOUND => "File is not readable or does not exist"<br/>=> 
				<input type="text" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::NOT_FOUND]" 
						class="form-control input-small filewordcount-NOT_FOUND">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filewordcount-min" name="my_element[validateOption][filewordcount][min]" class="form-control" />
	<input type="hidden" class="filewordcount-max" name="my_element[validateOption][filewordcount][max]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::TOO_MUCH]" class="filewordcount-TOO_MUCH">
	<input type="hidden" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::TOO_LESS]" class="filewordcount-TOO_LESS">
	<input type="hidden" name="my_element[messageError][filewordcount][Zend\Validator\File\WordCount::NOT_FOUND]" class="filewordcount-NOT_FOUND">
</div>
<form class="filecount" >

	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" class="filecount-min form-control" name="my_element[validateOption][filecount][min]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" class="filecount-max form-control" name="my_element[validateOption][filecount][max]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">TOO_MANY => "Too many files, maximum '%max%' are allowed but '%count%' are given" <br/>=> 
				<input type="text" name="my_element[messageError][filecount][Zend\Validator\File\Count::TOO_MANY]" 
						class="form-control input-small filecount-TOO_MANY">
			</li>
			<li class="list-group-item">TOO_FEW  => "Too few files, minimum '%min%' are expected but '%count%' are given" <br/>=> 
				<input type="text" name="my_element[messageError][filecount][Zend\Validator\File\Count::TOO_FEW]" 
						class="form-control input-small filecount-TOO_FEW">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>

<div class="hidden-edit">
	<input type="hidden" class="filecount-min" name="my_element[validateOption][filecount][min]" class="form-control"/>
	<input type="hidden" class="filecount-max" class="form-control" name="my_element[validateOption][filecount][max]"/>
	<input type="hidden" name="my_element[messageError][filecount][Zend\Validator\File\Count::TOO_MANY]" class="filecount-TOO_MANY">
	<input type="hidden" name="my_element[messageError][filecount][Zend\Validator\File\Count::TOO_FEW]" class="filecount-TOO_FEW">
</div>

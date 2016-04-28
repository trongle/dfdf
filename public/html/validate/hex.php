<form class="hex">
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String expected"<br/>=> 
				<input type="text" name="my_element[messageError][hex][Zend\Validator\Hex::INVALID]" 
						class="form-control input-small hex-INVALID">
			</li>
			<li class="list-group-item">NOT_HEX => "The input contains non-hexadecimal characters" <br/>=> 
				<input type="text" name="my_element[messageError][hex][Zend\Validator\Hex::NOT_HEX]" 
						class="form-control input-small hex-NOT_HEX">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][hex][Zend\Validator\Hex::INVALID]" class="hex-INVALID">
	<input type="hidden" name="my_element[messageError][hex][Zend\Validator\Hex::NOT_HEX]" class="hex-NOT_HEX">
</div>
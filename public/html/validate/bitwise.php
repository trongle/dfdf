<form class="bitwise">	
	<div class="form-group col-md-6">
		<label for="adapter">Control:</label>
		<input type="number" class="bitwise-control form-control" name="my_element[validateOption][bitwise][control]" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Operator:</label>
		<input type="text" class="bitwise-operator form-control" name="my_element[validateOption][bitwise][operator]" placeholder="xor | and" />
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_AND => "The input has no common bit set with '%control%'" <br/>=> 
				<input type="text" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_AND]" 
						class="form-control input-small bitwise-NOT_AND">
			</li>
			<li class="list-group-item">NOT_AND_STRICT => "The input doesn't have the same bits set as '%control%'" <br/>=> 
				<input type="text" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_AND_STRICT]" 
						class="form-control input-small bitwise-NOT_AND_STRICT">
			</li>
			<li class="list-group-item">NOT_XOR => "The input has common bit set with '%control%'" <br/>=> 
				<input type="text" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_XOR]" 
						class="form-control input-small bitwise-NOT_XOR">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">
		Strict: <input type="checkbox" class="bitwise-strict" name="my_element[validateOption][bitwise][strict]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="bitwise-control" name="my_element[validateOption][bitwise][control]" class="form-control" />
	<input type="hidden" class="bitwise-operator" name="my_element[validateOption][bitwise][operator]" placeholder="xor | and" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="bitwise-strict" name="my_element[validateOption][bitwise][strict]" />
	</div>
	<input type="hidden" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_AND]" class="bitwise-NOT_AND">
	<input type="hidden" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_AND_STRICT]" class="bitwise-NOT_AND_STRICT">
	<input type="hidden" name="my_element[messageError][bitwise][Zend\Validator\Bitwise::NOT_XOR]" class="bitwise-NOT_XOR">
</div>
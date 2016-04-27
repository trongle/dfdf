<form class="alnum" >	
	<div class="form-group col-md-6">
		Allow white space:
		<input class="alnum-allowWhiteSpace" type="checkbox" name="my_element[validateOption][alnum][allowWhiteSpace]"   />
	</div>


	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">NOT_ALNUM : "The input contains characters which are non alphabetic and no digits" <br/>=> 
				<input type="text" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::NOT_ALNUM]" 
						class="form-control input-small alnum-IS_EMPTY">
			</li>
			<li class="list-group-item">INVALID  : "Invalid type given. String, integer or float expected" <br/>=> 
				<input type="text" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::INVALID]" 
						class="form-control input-small alnum-INVALID">
			</li>
			<li class="list-group-item">STRING_EMPTY : "The input is an empty string" <br/>=> 
				<input type="text" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::STRING_EMPTY]" 
						class="form-control input-small alnum-STRING_EMPTY">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>   
<div class="hidden-edit">
	<div class="hide">
		<input class="alnum-allowWhiteSpace" type="checkbox" name="my_element[validateOption][alnum][allowWhiteSpace]"   />
	</div>
	<input type="hidden" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::NOT_ALNUM]" class="alnum-IS_EMPTY">
	<input type="hidden" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::INVALID]" class="alnum-INVALID">
	<input type="hidden" name="my_element[messageError][alnum][Zend\I18n\Validator\Alnum::STRING_EMPTY]" class="alnum-STRING_EMPTY">
</div>
                            
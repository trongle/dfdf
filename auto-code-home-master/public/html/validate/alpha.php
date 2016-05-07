<form class="alpha">
	<div class="form-group col-md-6">
		Allow white space:
		<input type="checkbox" class="alpha-allowWhiteSpace" name="my_element[validateOption][alpha][allowWhiteSpace]"  />
	</div>

    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">NOT_ALPHA : "The input contains non alphabetic characters" <br/>=> 
				<input type="text" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::NOT_ALPHA]" 
						class="form-control input-small alpha-NOT_ALPHA">
			</li>
			<li class="list-group-item">INVALID  : "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::INVALID]" 
						class="form-control input-small alpha-INVALID">
			</li>
			<li class="list-group-item">STRING_EMPTY : "The input is an empty string" <br/>=> 
				<input type="text" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::STRING_EMPTY]" 
						class="form-control input-small alpha-STRING_EMPTY">
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
		<input type="checkbox" class="alpha-allowWhiteSpace" name="my_element[validateOption][alpha][allowWhiteSpace]"  />
	</div>
	<input type="hidden" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::NOT_ALPHA]" class="alpha-NOT_ALPHA">
	<input type="hidden" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::INVALID]" class="alpha-INVALID">
	<input type="hidden" name="my_element[messageError][alpha][Zend\I18n\Validator\Alpha::STRING_EMPTY]" class="alpha-STRING_EMPTY">
</div>
                            
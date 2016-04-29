<form class="creditcard">	
	<div class="form-group col-md-6">
		<label for="adapter">Service:</label>
		<input type="number" class="creditcard-service form-control" name="my_element[validateOption][creditcard][service]" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Type:</label>
		<input type="text" class="creditcard-type form-control" name="my_element[validateOption][creditcard][type]" placeholder="xor | and" />
	</div>

	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">CHECKSUM => "The input seems to contain an invalid checksum" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::CHECKSUM]" 
						class="form-control input-small creditcard-CHECKSUM">
			</li>
			<li class="list-group-item">CONTENT => "The input must contain only digits" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::CONTENT]" 
						class="form-control input-small creditcard-CONTENT">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::INVALID]" 
						class="form-control input-small creditcard-INVALID">
			</li>
			<li class="list-group-item">LENGTH => "The input contains an invalid amount of digits" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::LENGTH]" 
						class="form-control input-small creditcard-LENGTH">
			</li>
			<li class="list-group-item">PREFIX => "The input is not from an allowed institute" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::PREFIX]" 
						class="form-control input-small creditcard-PREFIX">
			</li>
			<li class="list-group-item">SERVICE => "The input seems to be an invalid credit card number" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::SERVICE]" 
						class="form-control input-small creditcard-SERVICE">
			</li>
			<li class="list-group-item">SERVICEFAILURE => "An exception has been raised while validating the input" <br/>=> 
				<input type="text" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::SERVICEFAILURE]" 
						class="form-control input-small creditcard-SERVICEFAILURE">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="creditcard-service" name="my_element[validateOption][creditcard][service]" class="form-control" />
	<input type="hidden" class="creditcard-type" name="my_element[validateOption][creditcard][type]" placeholder="xor | and" class="form-control" />
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::CHECKSUM]" class="creditcard-CHECKSUM">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::CONTENT]" class="creditcard-CONTENT">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::INVALID]" class="creditcard-INVALID">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::LENGTH]" class="creditcard-LENGTH">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::PREFIX]" class="creditcard-PREFIX">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::SERVICE]" class="creditcard-SERVICE">
	<input type="hidden" name="my_element[messageError][creditcard][Zend\Validator\CreditCard::SERVICEFAILURE]" class="creditcard-SERVICEFAILURE">
</div>
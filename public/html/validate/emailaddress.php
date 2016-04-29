<form class="emailaddress">
	<div class="form-group col-md-12">
		Use MX check:
		<input type="checkbox" class="emailaddress-useMxCheck" name="my_element[validateOption][emailaddress][useMxCheck]"/>
	</div>  

	<div class="form-group col-md-12">
		Use deep MX check:
		<input type="checkbox" class="emailaddress-useMxDeepCheck " name="my_element[validateOption][emailaddress][useMxDeepCheck]"/>
	</div>

	<div class="form-group col-md-12">
		Use domain check:
		<input type="checkbox" class="emailaddress-useDomainCheck" name="my_element[validateOption][emailaddress][useDomainCheck]"/>
	</div>

	<div class="form-group col-md-6">
		<label>allow:</label>
		<input type="number" class="emailaddress-allow form-control" name="my_element[validateOption][emailaddress][allow]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Hostname Validator:</label>
		<input type="text" class="emailaddress-hostnameValidator form-control" name="my_element[validateOption][emailaddress][hostnameValidator]"/>
	</div>

	<div class=" form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">INVALID => "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID]" 
						class="form-control input-small emailaddress-INVALID">
			</li>
			<li class="list-group-item">INVALID_FORMAT => "The input is not a valid email address. Use the basic format local-part@hostname" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_FORMAT]" 
						class="form-control input-small emailaddress-INVALID_FORMAT">
			</li>
			<li class="list-group-item">INVALID_HOSTNAME => "'%hostname%' is not a valid hostname for the email address" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_HOSTNAME]" 
						class="form-control input-small emailaddress-INVALID_HOSTNAME">
			</li>
			<li class="list-group-item">INVALID_MX_RECORD => "'%hostname%' does not appear to have any valid MX or A records for the email address" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_MX_RECORD]" 
						class="form-control input-small emailaddress-INVALID_MX_RECORD">
			</li>
			<li class="list-group-item">INVALID_SEGMENT => "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_SEGMENT]" 
						class="form-control input-small emailaddress-INVALID_SEGMENT">
			</li>
			<li class="list-group-item">DOT_ATOM => "'%localPart%' can not be matched against dot-atom format" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::DOT_ATOM]" 
						class="form-control input-small emailaddress-DOT_ATOM">
			</li>
			<li class="list-group-item">QUOTED_STRING => "'%localPart%' can not be matched against quoted-string format" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::QUOTED_STRING]" 
						class="form-control input-small emailaddress-QUOTED_STRING">
			</li>
			<li class="list-group-item">INVALID_LOCAL_PART => "'%localPart%' is not a valid local part for the email address" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_LOCAL_PART]" 
						class="form-control input-small emailaddress-INVALID_LOCAL_PART">
			</li>
			<li class="list-group-item">LENGTH_EXCEEDED => "The input exceeds the allowed length" <br/>=> 
				<input type="text" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::LENGTH_EXCEEDED]" 
						class="form-control input-small emailaddress-LENGTH_EXCEEDED">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="emailaddress-hostnameValidator" name="my_element[validateOption][emailaddress][hostnameValidator]" class="form-control"/>
	<input type="hidden" class="emailaddress-allow" name="my_element[validateOption][emailaddress][allow]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="emailaddress-useMxCheck" name="my_element[validateOption][emailaddress][useMxCheck]"/>
		<input type="checkbox" class="emailaddress-useMxDeepCheck" name="my_element[validateOption][emailaddress][useMxDeepCheck]"/>
		<input type="checkbox" class="emailaddress-useDomainCheck" name="my_element[validateOption][emailaddress][useDomainCheck]"/>
	</div>
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID]" class="emailaddress-INVALID">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_FORMAT]" class="emailaddress-INVALID_FORMAT">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_HOSTNAME]" class="emailaddress-INVALID_HOSTNAME">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_MX_RECORD]" class="emailaddress-INVALID_MX_RECORD">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_SEGMENT]" class="emailaddress-INVALID_SEGMENT">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::DOT_ATOM]" class="emailaddress-DOT_ATOM">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::QUOTED_STRING]" class="emailaddress-QUOTED_STRING">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::INVALID_LOCAL_PART]" class="emailaddress-INVALID_LOCAL_PART">
	<input type="hidden" name="my_element[messageError][emailaddress][Zend\Zend\Validator\EmailAddress::LENGTH_EXCEEDED]" class="emailaddress-LENGTH_EXCEEDED">
</div>

<form class="hostname">
	<div class="form-group col-md-6">
		<label>Allow:</label>
		<input type="number" class="hostname-allow form-control" name="my_element[validateOption][hostname][allow]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Ip validator:</label>
		<input type="number" class="hostname-ipValidator form-control" name="my_element[validateOption][hostname][ipValidator]"/>
	</div>

	<div class="form-group col-md-6">
		Use Idn check: <input type="checkbox" class="hostname-useIdnCheck" name="my_element[validateOption][hostname][useIdnCheck]"/>
	</div>
		
	<div class="form-group col-md-6">
		Use Tld check: <input type="checkbox" class="hostname-useTldCheck" name="my_element[validateOption][hostname][useTldCheck]"/>
	</div>
	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">CANNOT_DECODE_PUNYCODE => "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::CANNOT_DECODE_PUNYCODE]" 
						class="form-control input-small hostname-CANNOT_DECODE_PUNYCODE">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. String expected" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID]" 
						class="form-control input-small hostname-INVALID">
			</li>
			<li class="list-group-item">INVALID_DASH => "The input appears to be a DNS hostname but contains a dash in an invalid position" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_DASH]" 
						class="form-control input-small hostname-INVALID_DASH">
			</li>
			<li class="list-group-item">INVALID_HOSTNAME => "The input does not match the expected structure for a DNS hostname" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_HOSTNAME]" 
						class="form-control input-small hostname-INVALID_HOSTNAME">
			</li>
			<li class="list-group-item">INVALID_HOSTNAME_SCHEMA => "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'"<br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_HOSTNAME_SCHEMA]" 
						class="form-control input-small hostname-INVALID_HOSTNAME_SCHEMA">
			</li>
			<li class="list-group-item">INVALID_LOCAL_NAME => "The input does not appear to be a valid local network name"<br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_LOCAL_NAME]" 
						class="form-control input-small hostname-INVALID_LOCAL_NAME">
			</li>
			<li class="list-group-item">INVALID_URI => "The input does not appear to be a valid URI hostname" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_URI]" 
						class="form-control input-small hostname-INVALID_URI">
			</li>
			<li class="list-group-item">IP_ADDRESS_NOT_ALLOWED => "The input appears to be an IP address, but IP addresses are not allowed"<br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::IP_ADDRESS_NOT_ALLOWED]" 
						class="form-control input-small hostname-IP_ADDRESS_NOT_ALLOWED">
			</li>
			<li class="list-group-item">LOCAL_NAME_NOT_ALLOWED => "The input appears to be a local network name but local network names are not allowed" <br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::LOCAL_NAME_NOT_ALLOWED]" 
						class="form-control input-small hostname-LOCAL_NAME_NOT_ALLOWED">
			</li>
			<li class="list-group-item">UNDECIPHERABLE_TLD => "The input appears to be a DNS hostname but cannot extract TLD part"<br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::UNDECIPHERABLE_TLD]" 
						class="form-control input-small hostname-UNDECIPHERABLE_TLD">
			</li>
			<li class="list-group-item">UNKNOWN_TLD => "The input appears to be a DNS hostname but cannot match TLD against known list"<br/>=> 
				<input type="text" name="my_element[messageError][hostname][Zend\Validator\Hostname::UNKNOWN_TLD]" 
						class="form-control input-small hostname-UNKNOWN_TLD">
			</li>
		</ul>
	</div>

	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="hostname-allow" name="my_element[validateOption][hostname][allow]"/>
	<input type="hidden" class="hostname-ipValidator" name="my_element[validateOption][hostname][ipValidator]"/>
	<div class="hide">
		<input type="checkbox" class="hostname-useIdnCheck" name="my_element[validateOption][hostname][useIdnCheck]"/>
		<input type="checkbox" class="hostname-useTldCheck" name="my_element[validateOption][hostname][useTldCheck]"/>
	</div>
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::CANNOT_DECODE_PUNYCODE]" class="hostname-CANNOT_DECODE_PUNYCODE">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID]" class="hostname-INVALID">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_DASH]" class="hostname-INVALID_DASH">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_HOSTNAME]" class="hostname-INVALID_HOSTNAME">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_HOSTNAME_SCHEMA]" class="hostname-INVALID_HOSTNAME_SCHEMA">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_LOCAL_NAME]" class="hostname-INVALID_LOCAL_NAME">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::INVALID_URI]" class="hostname-INVALID_URI">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::IP_ADDRESS_NOT_ALLOWED]" class="hostname-IP_ADDRESS_NOT_ALLOWED">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::LOCAL_NAME_NOT_ALLOWED]" class="hostname-LOCAL_NAME_NOT_ALLOWED">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::UNDECIPHERABLE_TLD]" class="hostname-UNDECIPHERABLE_TLD">
	<input type="hidden" name="my_element[messageError][hostname][Zend\Validator\Hostname::UNKNOWN_TLD]" class="hostname-UNKNOWN_TLD">
</div>

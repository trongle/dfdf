<form class="ip">
	
	<div class="form-group col-md-12">
		Allow IP v4:
		<input type="checkbox" class="ip-allowipv4"  name="my_element[validateOption][ip][allowipv4]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP v6:
		<input type="checkbox" class="ip-allowipv6" name="my_element[validateOption][ip][allowipv6]"/>
	</div>

	<div class="form-group col-md-12">
		Allow IP vFuture:
		<input type="checkbox" class="ip-allowipvfuture" name="my_element[validateOption][ip][allowipvfuture]"/>
	</div>

	<div class="form-group col-md-12">
		Allow Literal:
		<input type="checkbox" class="ip-allowliteral" checked name="my_element[validateOption][ip][allowliteral]"/>
	</div>
	
    <div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">INVALID => 'Invalid type given. String expected'<br/>=> 
				<input type="text" name="my_element[messageError][ip][Zend\Validator\Ip::INVALID]" 
						class="form-control input-small ip-INVALID">
			</li>
			<li class="list-group-item">NOT_IP_ADDRESS => "The input does not appear to be a valid IP address"<br/>=> 
				<input type="text" name="my_element[messageError][ip][Zend\Validator\Ip::NOT_IP_ADDRESS]" 
						class="form-control input-small ip-NOT_IP_ADDRESS">
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
		<input type="checkbox" class="ip-allowipv4"  name="my_element[validateOption][ip][allowipv4]"/>
		<input type="checkbox" class="ip-allowipv6" name="my_element[validateOption][ip][allowipv6]"/>
		<input type="checkbox" class="ip-allowipvfuture" name="my_element[validateOption][ip][allowipvfuture]"/>
		<input type="checkbox" class="ip-allowliteral" checked name="my_element[validateOption][ip][allowliteral]"/>
	</div>
	<input type="hidden" name="my_element[messageError][ip][Zend\Validator\Ip::INVALID]" class="ip-INVALID">
	<input type="hidden" name="my_element[messageError][ip][Zend\Validator\Ip::NOT_IP_ADDRESS]" class="ip-NOT_IP_ADDRESS">
</div>
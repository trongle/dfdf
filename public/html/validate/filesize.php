<form class="filesize">
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" class="filesize-min form-control" name="my_element[validateOption][filesize][min]" />
	</div>  

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" class="filesize-max form-control" name="my_element[validateOption][filesize][max]"/>
	</div>

	<div class="form-group col-md-12">
		Use byte string: <input type="checkbox" class="filesize-useByteString" name="my_element[validateOption][filesize][useByteString]" checked/>
	</div>
	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">TOO_BIG => "All files in sum should have a maximum size of '%max%' but '%size%' were detected" <br/>=> 
				<input type="text" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::TOO_BIG]" 
						class="form-control input-small filesize-TOO_BIG">
			</li>
			<li class="list-group-item">TOO_SMALL => "All files in sum should have a minimum size of '%min%' but '%size%' were detected" <br/>=> 
				<input type="text" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::TOO_SMALL]" 
						class="form-control input-small filesize-TOO_SMALL">
			</li>
			<li class="list-group-item">NOT_READABLE => "One or more files can not be read" <br/>=> 
				<input type="text" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::NOT_READABLE]" 
						class="form-control input-small filesize-NOT_READABLE">
			</li>
		</ul>
	</div>
	
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filesize-min" name="my_element[validateOption][filesize][min]" class="form-control" />
	<input type="hidden" class="filesize-max" name="my_element[validateOption][filesize][max]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="filesize-useByteString" name="my_element[validateOption][filesize][useByteString]" checked/>
	</div>
	<input type="hidden" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::TOO_BIG]" class="filesize-TOO_BIG">
	<input type="hidden" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::TOO_SMALL]" class="filesize-TOO_SMALL">
	<input type="hidden" name="my_element[messageError][filesize][Zend\Validator\File\FilesSize::NOT_READABLE]" class="filesize-NOT_READABLE">
</div>
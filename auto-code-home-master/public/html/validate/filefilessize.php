<form class="filefilessize" >
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" class="filefilessize-min form-control"  name="my_element[validateOption][filefilessize][min]" />
	</div>  

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" class="filefilessize-max form-control" name="my_element[validateOption][filefilessize][max]"/>
	</div>

	<div class="form-group col-md-12">
		Use byte string: <input type="checkbox" class="filefilessize-useByteString form-control" name="my_element[validateOption][filefilessize][useByteString]" checked/>
	</div>
	
		
		
		
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">TOO_BIG => "All files in sum should have a maximum size of '%max%' but '%size%' were detected" <br/>=> 
				<input type="text" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::TOO_BIG]" 
						class="form-control input-small filefilessize-TOO_BIG">
			</li>
			<li class="list-group-item">TOO_SMALL => "All files in sum should have a minimum size of '%min%' but '%size%' were detected" <br/>=> 
				<input type="text" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::TOO_SMALL]" 
						class="form-control input-small filefilessize-TOO_SMALL">
			</li>
			<li class="list-group-item">NOT_READABLE => "One or more files can not be read" <br/>=> 
				<input type="text" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::NOT_READABLE]" 
						class="form-control input-small filefilessize-NOT_READABLE">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filefilessize-min"  name="my_element[validateOption][filefilessize][min]" class="form-control" />
	<input type="hidden" class="filefilessize-max" name="my_element[validateOption][filefilessize][max]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="filefilessize-useByteString" name="my_element[validateOption][filefilessize][useByteString]" checked/>
	</div>
	<input type="hidden" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::TOO_BIG]" class="filefilessize-TOO_BIG">
	<input type="hidden" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::TOO_SMALL]" class="filefilessize-TOO_SMALL">
	<input type="hidden" name="my_element[messageError][filefilessize][Zend\Validator\File\FilesSize::NOT_READABLE]" class="filefilessize-NOT_READABLE">
</div>
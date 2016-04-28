<form class="fileimagesize" >
	<div class="form-group col-md-6">
		<label>Min width:</label>
		<input type="number" class="fileimagesize-minwidth form-control" name="my_element[validateOption][fileimagesize][minwidth]"/>
	</div>  

	<div class="form-group col-md-6">
		<label>Max width:</label>
		<input type="number" class="fileimagesize-maxwidth form-control"  name="my_element[validateOption][fileimagesize][maxwidth]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Min height:</label>
		<input type="number" class="fileimagesize-minheight form-control" name="my_element[validateOption][fileimagesize][minheight]"/>
	</div>

	<div class="form-group col-md-6">
		<label>Max height:</label>
		<input type="number" class="fileimagesize-maxheight form-control" name="my_element[validateOption][fileimagesize][maxheight]"/>
	</div>	
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="list-group">
			<li class="list-group-item">WIDTH_TOO_BIG => "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::WIDTH_TOO_BIG]" 
						class="form-control input-small fileimagesize-WIDTH_TOO_BIG">
			</li>
			<li class="list-group-item">WIDTH_TOO_SMALL => "Minimum expected width for image should be '%minwidth%' but '%width%' detected" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::WIDTH_TOO_SMALL]" 
						class="form-control input-small fileimagesize-WIDTH_TOO_SMALL">
			</li>
			<li class="list-group-item">HEIGHT_TOO_BIG => "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::HEIGHT_TOO_BIG]" 
						class="form-control input-small fileimagesize-HEIGHT_TOO_BIG">
			</li>
			<li class="list-group-item">HEIGHT_TOO_SMALL => "Minimum expected height for image should be '%minheight%' but '%height%' detected" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::HEIGHT_TOO_SMALL]" 
						class="form-control input-small fileimagesize-HEIGHT_TOO_SMALL">
			</li>
			<li class="list-group-item">NOT_DETECTED => "The size of image could not be detected" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::NOT_DETECTED]" 
						class="form-control input-small fileimagesize-NOT_DETECTED">
			</li>
			<li class="list-group-item">NOT_READABLE => "File is not readable or does not exist" <br/>=> 
				<input type="text" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::NOT_READABLE]" 
						class="form-control input-small fileimagesize-NOT_READABLE">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="fileimagesize-minwidth" name="my_element[validateOption][fileimagesize][minwidth]" class="form-control"/>
	<input type="hidden" class="fileimagesize-maxwidth"  name="my_element[validateOption][fileimagesize][maxwidth]" class="form-control"/>
	<input type="hidden" class="fileimagesize-minheight" name="my_element[validateOption][fileimagesize][minheight]" class="form-control"/>
	<input type="hidden" class="fileimagesize-maxheight" name="my_element[validateOption][fileimagesize][maxheight]" class="form-control"/>
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::WIDTH_TOO_BIG]" class="fileimagesize-WIDTH_TOO_BIG">
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::WIDTH_TOO_SMALL]" class="fileimagesize-WIDTH_TOO_SMALL">
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::HEIGHT_TOO_BIG]" class="fileimagesize-HEIGHT_TOO_BIG">
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::HEIGHT_TOO_SMALL]" class="fileimagesize-HEIGHT_TOO_SMALL">
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::NOT_DETECTED]" class="fileimagesize-NOT_DETECTED">
	<input type="hidden" name="my_element[messageError][fileimagesize][Zend\Validator\File\ImageSize::NOT_READABLE]" class="fileimagesize-NOT_READABLE">
</div>
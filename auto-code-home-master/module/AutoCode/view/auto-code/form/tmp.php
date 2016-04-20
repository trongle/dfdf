 			<?php if(count(@$value['validate']['option']) > 0 ): ?>
				<?php  foreach(@$value['validate']['option'] as $key => $val): ?>
					var idTem = "#<?php echo $key ?>";
					$("a[href=" + idTem+ "]").trigger("click");
						<?php foreach($val as $key2 => $val2): ?>
							$("#<?php echo $key ?>-<?php echo $key2 ?>").val("<?php echo $val2 ?>");
							<?php if($val2 == 'on'): ?>
								$("#<?php echo $key ?>-<?php echo $key2 ?>").attr("checked","checked");
							<?php endif; ?>
						<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if(count(@$value['filter']['option']) > 0 ): ?>
				<?php  foreach(@$value['filter']['option'] as $key => $val): ?>
					var idTem = "#<?php echo $key ?>";
					$("a[href=" + idTem+ "]").trigger("click");
						<?php foreach($val as $key2 => $val2): ?>
							$("#<?php echo $key ?>-<?php echo $key2 ?>").val("<?php echo $val2 ?>");
							<?php if($val2 == 'on'): ?>
								$("#<?php echo $key ?>-<?php echo $key2 ?>").attr("checked","checked");
							<?php endif; ?>
						<?php endforeach; ?>

				<?php endforeach; ?>
			<?php endif; ?>


			<?php foreach($infoForm->content as $nameElement => $value): ?>
			nameElement = "<?php echo $nameElement ?>";
			typeElement = $("#typeElement").val();
			
			//show form Add Atrributes Element
			$("#elementAttrs").removeClass("hide");
			changeIdInput(nameElement);
			<?php if(count(@$value['validate']) > 0 ): ?>
				<?php foreach(@$value['validate']['name'] as $key => $val): ?>
					HandleFormOption("<?php echo $val ?>",nameElement,"#validateList",'.showTemplateValidate','validate','edit');
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if(count(@$value['filter']) > 0 ): ?>
				<?php foreach(@$value['filter']['name'] as $key => $val): ?>
					HandleFormOption("<?php echo $val ?>",nameElement,"#filterList",'.showTemplateValidate','filter','edit');
				<?php endforeach; ?>
			<?php endif; ?>

		<?php endforeach; ?>


		function HandleFormOptionEdit(selectorMain,nameElement,selectorList,selectorTemplate,type){
			var validateValue = selectorMain;
			var validateName  = selectorMain;

			var fileName      = validateValue.toLowerCase() + '.php';
	
		   	$.ajax({
				url  	 : "<?php echo BASE_URL .  $url ?>",
				data 	 : { 
					fileName : fileName ,
					type 	 : type
				},
				type 	 : 'GET',
				dataType : 'json',
				success  : function(data){
					// console.log(data);
					if(data.template === 'no'){
						var haveTemplate = 'no';
		    			addValidateRow(selectorList,validateValue,validateName,nameElement,haveTemplate,type);
					}else{
						var haveTemplate = 'yes';
		    			addValidateRow(selectorList,validateValue,validateName,nameElement,haveTemplate,type);
		    			
						var templateFormated = data.template.replace(/my_element/g,nameElement);
						$("li[name=" + validateValue + "] " + selectorTemplate).append(templateFormated);
							
						bindValidateForm();
						bindFilterForm();
						

						$(".show-option-validate").on('click',function(){
						    var self = this;
						    $(self).prev('span').removeClass('glyphicon-plus').addClass('glyphicon-minus');

						   	var idTemplate = $(self).attr('href');
						   	// console.log(idTemplate)
						   	idTemplate = idTemplate.toLowerCase();
						   
						    showValidateTemplate(idTemplate);
							
							$(".cancel").on('click',function(){
								hideValidateTemplate(this,self);

								return false;
							})


							$(".accept").on('click',function(){
								var str = $(idTemplate).serialize();	

								createSerializeString(self,str,idTemplate)		
								hideValidateTemplate(this,self);

								self = null;

								return false;	
							})
						})
					}	
					$(".removeVal").on('click',function(){
					    removeOption(this);
					})		
				},
			})	
	}
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


				var option2 = val.split('][');
				console.log("."+option2[1]+"-"+option2[2].replace("]=",""));
				$(".hidden-edit ."+option2[1]+"-"+option2[2].replace("]=","")).val(option[1]);
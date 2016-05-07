	// <?php if(isset($infoForm) && $infoForm->content != ''): ?>
		// 	<?php foreach($infoForm->content as $nameElement => $infoElement): ?>
		// 		<?php if(count(@$infoElement['validate']['option']) > 0): ?>
		// 			<?php foreach($infoElement['validate']['option'] as $key => $value): ?>
		// 				<?php foreach($value as $key2 => $value2): ?>
		// 					<?php if($value2 == 'on'): ?>
		// 						$(selector + " .<?php echo $key ."-". $key2 ?>").attr("checked","checked");
		// 					<?php else: ?>					
		// 						$(selector + " .<?php echo $key ."-". $key2 ?>").val("<?php echo $value2 ?>");
		// 					<?php endif; ?>
		// 				<?php endforeach; ?>
		// 			<?php endforeach; ?>
		// 		<?php endif; ?>
		// 	<?php endforeach; ?>
		// <?php endif; ?>


		<?php if(isset($infoForm) && $infoForm->content != ''): ?>
			<?php foreach($infoForm->content as $nameElement => $infoElement): ?>
				<?php if(count(@$infoElement['filter']['option']) > 0): ?>
					<?php foreach($infoElement['filter']['option'] as $key => $value): ?>
						<?php foreach($value as $key2 => $value2): ?>
							<?php if($value2 == 'on'): ?>
								$(selector + " .<?php echo $key ."-". $key2 ?>").attr("checked","checked");
								$("#<?php echo $key ."-". $key2 ?>").attr("checked","checked");
							<?php else: ?>
								$(selector + " .<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
								$("#<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
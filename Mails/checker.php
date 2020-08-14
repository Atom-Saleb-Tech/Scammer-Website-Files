			<?php
				if(function_exists("mail")) {
					mail('verkereyda@yevme.com', '3xBeast', 'Mail Working!');
					echo '1';
				} else {
					echo '0';
				}
			?>
		

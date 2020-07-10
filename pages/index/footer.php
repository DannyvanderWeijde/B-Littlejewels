<?php

/**
 * Version: 1.0
 * Date: 8/5/2020
 * Author: Danny van der Weijde
 * notes:
 */

?>

<footer>
	
</footer>

<?php

    foreach (glob("assets/js/*.js") as $js){
        ?><script type="text/javascript" src="<?php echo $js ?>"></script><?php
    }

?>
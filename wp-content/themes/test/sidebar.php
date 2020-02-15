<?php if (!is_active_sidebar('right-sidebar'))
            return;
?>
<div class="col-3">
    <?php
       dynamic_sidebar('right-sidebar');
    ?>
</div>
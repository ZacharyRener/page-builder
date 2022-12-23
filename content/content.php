<?php

$group = get_sub_field( 'content' );
$pageContent = $group[ 'page_content' ];

?>

<div class='el--content'>
    <div class='container'>
        <?php echo $pageContent; ?>
    </div>
</div>
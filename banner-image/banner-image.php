<?php

$group = get_sub_field( 'banner_image' );
$image_url = $group[ 'banner_image_upload' ];
$headline = $group[ 'headline' ];

?>

<div class='el--banner-image'>
    <div class='banner-image-inner' style='background-image:url(<?php echo $image_url; ?>);'>
        <div class='container'>
            <h1><?php echo $headline; ?></h1>
        </div>
    </div>
</div>
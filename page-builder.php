<?php

get_header(); 

define( 'PAGE_BUILDER', get_stylesheet_directory_uri() . '/page-builder/' );

?>
<div class='page-builder about-body'>
<?php

if( have_rows( 'elements' ) ):
    while( have_rows( 'elements' ) ):
        the_row();
        
        $element = get_sub_field( 'element' );
        switch( $element ):

            case 'banner-image':
                include('banner-image/banner-image.php');
                wp_enqueue_style( 'banner-image', PAGE_BUILDER . 'banner-image/banner-image.css' );
                break;

            case 'content':
                include('content/content.php');
                wp_enqueue_style( 'content', PAGE_BUILDER . 'content/content.css' );
                break;

            case 'spacer':
                include('spacer/spacer.php');
                wp_enqueue_style( 'spacer', PAGE_BUILDER . 'spacer/spacer.css' );
                break;

        endswitch;

    endwhile;
endif;

?>
</div>
<?php

get_footer(); 

?>
<?php
    /**
     * FontAwesome Shortcode
     * 
     * Useage: [fa fa_code=fa-bullhorn.fa-lg]
     * 
     * Use . to combine FontAwesome attributes - shortcode inserts <i> tag with required classes
     */
    add_shortcode('fa', 'fa_shortcode');

    function fa_shortcode( $atts ){
        extract( shortcode_atts(
                array(
                    'fa_code' => '',
                ), $atts )
        );
        $fa_code = str_replace('.',' ',$fa_code);
        return '<i class="'.$fa_code.'"></i>';
    }
?>

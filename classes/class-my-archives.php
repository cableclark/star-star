<?php

Class My_Categories_Widget extends WP_Widget_Categories {
    function widget( $args, $instance ) {
        static $first_dropdown = true;
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Categories' );


        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
       
        $count        = ! empty( $instance['count'] ) ? '1' : '0';
        $hierarchical = ! empty( $instance['hierarchical'] ) ? '1' : '0';
        $dropdown     = ! empty( $instance['dropdown'] ) ? '1' : '0';
 
        echo $args['before_widget'];


        echo '<svg
                class="search-icon"
                version="1.1"
                baseProfile="full"
                
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 150.66 140.33">
                <defs><style>.cls-1{fill:#231f20;}</style></defs>
                <title>Search Icon</title>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M145.84,135,96.12,89.41a54.37,54.37,0,1,0-3.38,3.68l49.73,45.59a2.5,2.5,0,0,0,3.37-3.69Zm-91.4-29.11a51.44,51.44,0,1,1,51.44-51.44A51.5,51.5,0,0,1,54.44,105.88Z"/></g>
                </g>
            </svg>';

        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
 
        $cat_args = array(
            'orderby'      => 'name',
            'show_count'   => $count,
            'hierarchical' => $hierarchical,
        );
 
        if ( $dropdown ) {
            echo sprintf( '<form action="%s" method="get">', esc_url( home_url() ) );
            $dropdown_id    = ( $first_dropdown ) ? 'cat' : "{$this->id_base}-dropdown-{$this->number}";
            $first_dropdown = false;
 
            echo '<label class="screen-reader-text" for="' . esc_attr( $dropdown_id ) . '">' . $title . '</label>';
 
            $cat_args['show_option_none'] = __( 'Select Category' );
            $cat_args['id']               = $dropdown_id;
 
            /**
             * Filters the arguments for the Categories widget drop-down.
             *
             * @since 2.8.0
             * @since 4.9.0 Added the `$instance` parameter.
             *
             * @see wp_dropdown_categories()
             *
             * @param array $cat_args An array of Categories widget drop-down arguments.
             * @param array $instance Array of settings for the current widget.
             */
            wp_dropdown_categories( apply_filters( 'widget_categories_dropdown_args', $cat_args, $instance ) );
 
            echo '</form>';
 
            $type_attr = current_theme_supports( 'html5', 'script' ) ? '' : ' type="text/javascript"';
            ?>
 
<script<?php echo $type_attr; ?>>
/* <![CDATA[ */
(function() {
    var dropdown = document.getElementById( "<?php echo esc_js( $dropdown_id ); ?>" );
    function onCatChange() {
        if ( dropdown.options[ dropdown.selectedIndex ].value > 0 ) {
            dropdown.parentNode.submit();
        }
    }
    dropdown.onchange = onCatChange;
})();
/* ]]> */
</script>
 
            <?php
        } else {
            ?>
        <ul>
            <?php
            $cat_args['title_li'] = '';
 
            /**
             * Filters the arguments for the Categories widget.
             *
             * @since 2.8.0
             * @since 4.9.0 Added the `$instance` parameter.
             *
             * @param array $cat_args An array of Categories widget options.
             * @param array $instance Array of settings for the current widget.
             */
            wp_list_categories( apply_filters( 'widget_categories_args', $cat_args, $instance ) );
            ?>
        </ul>
            <?php
        }
        
       
        echo $args['after_widget'];
    }
    
}



function my_categories_widget_register() {
    unregister_widget( 'WP_Widget_Categories' );
    register_widget( 'My_Categories_Widget' );
}

add_action( 'widgets_init', 'my_categories_widget_register' );
<?php
// On ajoute le support des vignettes/miniatures d'articles
add_theme_support( 'post-thumbnails' );

// menus
function register_my_menus() {
  register_nav_menus(
    array(
      'ecole-menu-1'  => __( 'ecole-menu-1' ),
      'ecole-menu-2'  => __( 'ecole-menu-2' ),
      'ecole-menu-3'  => __( 'ecole-menu-3' ),
      'college-menu-1'  => __( 'college-menu-1' ),
      'college-menu-2'  => __( 'college-menu-2' ),
      'college-menu-3'  => __( 'college-menu-3' ),
      'lycee-menu-1'  => __( 'lycee-menu-1' ),
      'lycee-menu-2'  => __( 'lycee-menu-2' ),
      'lycee-menu-3'  => __( 'lycee-menu-3' ),
      'escc-menu-1'  => __( 'escc-menu-1' ),
      'escc-menu-2'  => __( 'escc-menu-2' ),
      'footer-menu-1'  => __( 'footer-menu-1' ),
      'footer-menu-2'  => __( 'footer-menu-2' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );

function get_the_title_mod( $post = 0 ) {
    $post = get_post( $post );
 
    $title = isset( $post->post_title ) ? $post->post_title : '';
    $id = isset( $post->ID ) ? $post->ID : 0;
 
    if ( ! is_admin() ) {
        if ( ! empty( $post->post_password ) ) {
 
            /**
             * Filter the text prepended to the post title for protected posts.
             *
             * The filter is only applied on the front end.
             *
             * @since 2.8.0
             *
             * @param string  $prepend Text displayed before the post title.
             *                         Default 'Protected: %s'.
             * @param WP_Post $post    Current post object.
             */
            $protected_title_format = apply_filters( 'protected_title_format', __( 'Protected: %s' ), $post );
            $title = sprintf( $protected_title_format, $title );
        } elseif ( isset( $post->post_status ) && 'private' == $post->post_status ) {
 
            /**
             * Filter the text prepended to the post title of private posts.
             *
             * The filter is only applied on the front end.
             *
             * @since 2.8.0
             *
             * @param string  $prepend Text displayed before the post title.
             *                         Default 'Private: %s'.
             * @param WP_Post $post    Current post object.
             */
            $private_title_format = apply_filters( 'private_title_format', __( 'Private: %s' ), $post );
            $title = sprintf( $private_title_format, $title );
        }
    }
 
    /**
     * Filter the post title.
     *
     * @since 0.71
     *
     * @param string $title The post title.
     * @param int    $id    The post ID.
     */

    $target1 = array("é", "è", "ê", "É", "È");
    $target2 = array("à", "À");
    $target3 = array("'", " ");
    $target4 = array("ï", "î", "Î");

    $title = strtolower($title);
    $title = str_replace($target1, 'e', $title);
    $title = str_replace($target2, 'a', $title);
    $title = str_replace($target3, '-', $title);
    $title = str_replace($target4, 'i', $title);

    return apply_filters( 'the_title', $title, $id );
}

function filter_ptags_on_images($content)
{ 
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images'); 

//empêcher l'éditeur wysiwyg d'ajouter des balises <p> et <br> :
//sur les fichiers 'content'
remove_filter( 'the_content', 'wpautop' );
//sur les fichiers 'exerpt'
remove_filter( 'the_excerpt', 'wpautop' );
/*
 * 
 * MODIFICATION DU FORMULAIRE PAR DEFAULT
 *
 */
function NouveauFormulaire( $form ) {
    $form = '<form class="navbar-form navbar-right nav-form-bottom hidden-sm" role="search" method="get" action="' . home_url( '/' ) . '">
            <div class="input-group form-mg-l-r">
            <input type="text" class="form-control"  value="' . get_search_query() . '" name="s" id="s" />
                <div class="input-group-btn">
                    <button class="btn btn-blue" type="submit"><i class="glyphicon glyphicon-search gly-white"></i></button>
                </div>
            </div>
            </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'NouveauFormulaire' );
/*
    =========================================================
        FONCTION QUI AFFICHE LE NOMBRE DE MOT DES EXTRAITS
    =========================================================
*/
function nbMotsExtrait($length){
    return 20;
}
add_filter('excerpt_length','nbMotsExtrait');
/*
    =========================================================
        FONCTION QUI AFFICHE LE SYMBOLE EN FIN D'ARTICLE
    =========================================================
*/
function finExtrait( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' lire la suite .....', 'textdomain' )
    );
}
// function finExtrait($more) {
//     return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',get_permalink( get_the_ID() ),__( 'Lire la suite', 'textdomain' )
// }
add_filter('excerpt_more','finExtrait');


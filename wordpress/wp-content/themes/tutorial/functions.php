<?php //子テーマで利用する関数を書く

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
// アイキャッチ画像の表示の仕方を指定（切り抜き）
set_post_thumbnail_size(520, 300, true );
// サイドバーの表示
register_sidebar(); 



// 人気記事設定
function my_custom_popular_posts($post_id) {
    $count_key = 'popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
    } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
    }
}
function my_custom_track_posts($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
            global $post;
            $post_id = $post->ID;
    }
    my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');

function my_custom_display_popular_posts($query) {
 
    if ( !is_admin() && $query->is_main_query() ) {
             
            $get_pop = (isset($_GET['popular-posts']) && !empty($_GET['popular-posts'])) ? true : false;
             
            if ($get_pop) {
                    $query->set('meta_key', 'popular_posts');
                    $query->set('orderby', 'meta_value_num');
                    $query->set('order', 'DESC');
                    add_action('loop_start' , 'my_custom__before_loop');
                    }
            }
    }
    add_action('pre_get_posts', 'my_custom_display_popular_posts');
    function my_custom__before_loop() {
            echo '<h3>アクセス数が多い人気順</h3>';
    }

//     ページネーション
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}
//　jQueryを使えるようにする
//---------------------------------------------------------------------------
function add_jquery_scripts() {
    if(is_admin()) return; 
    wp_deregister_script( 'jquery'); 
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), false, false);
    wp_enqueue_script( 'jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'add_jquery_scripts');


// jquery読み込み
function my_scripts_method() {
  wp_enqueue_script(
    'custom-script',
    get_stylesheet_directory_uri().'/js/custom_script.js',
    array( 'jquery' ),
    '1.0',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );



// // カスタム投稿のページネーション
// add_action( 'pre_get_posts', 'my_custom_query_vars' );
// function my_custom_query_vars( $query ) {
// 	/* @var $query WP_Query */
// 	if ( !is_admin() && $query->is_main_query()) {
// 		if ( is_post_type_archive('eventpost') ) {
// 			$query->set( 'posts_per_page' , 3 );//表示したい数
// 		}		if ( taxonomy_exists( 'tags' ) ) {
// 			$query->set( 'posts_per_page' , 3 );//表示したい数
// 		}
// 	}
//     return $query;
    
    
// }
function twpp_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
      return;
    }
    if ( $query->is_post_type_archive ) {
      $query->set( 'posts_per_page', 3 );
    }    if ( $query->is_tax() ) {
        $query->set( 'posts_per_page', 3 );
      }
  }
  add_action( 'pre_get_posts', 'twpp_change_posts_per_page' );


?>
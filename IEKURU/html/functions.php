<?php

/*-------------------------------------------*/
/*  管理画面
/*-------------------------------------------*/

//ログイン画面の編集
function custom_login() { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php }
add_action( 'login_enqueue_scripts', 'custom_login' );

//ウィジェットの設置(1つ目)
if ( function_exists('register_sidebar'))
register_sidebar(array(
'name'=>'sidebar',
'id' => 'sidebar',
'before_widget'=>'<div class="collection-name cf">',
'after_widget'=>'</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

//投稿記事にアイキャッチ設定

add_theme_support('post-thumbnails');


//カスタム投稿タイプ「ニュース」
function new_post_type() {
  register_post_type(
    'news',//投稿タイプ名（識別子）
    array(
      'label' => 'ニュース',
      'labels' => array(
        'add_new_item' => '新規ニュースを追加',
        'edit_item' => 'ニュースを編集',
        'view_item' => 'ニュースを表示',
        'search_items' => 'ニュースを検索',
      ),
      'public' => true,// 管理画面に表示しサイト上にも表示する
      'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
      'has_archive' => true,//trueにすると投稿した記事のアーカイブページを生成
      'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
        'title',//タイトル
        'editor',//本文（の編集機能）
        'thumbnail',//アイキャッチ画像
        'custom-fields',
        'excerpt'//抜粋
      ),
      'menu_position' => 5//「投稿」の下に追加
    )
  );

//カスタム投稿タイプ「ブログ」
  register_post_type(
    'blog',//投稿タイプ名（識別子）
    array(
      'label' => 'ブログ',
      'labels' => array(
        'add_new_item' => '新規ブログを追加',
        'edit_item' => 'ブログを編集',
        'view_item' => 'ブログを表示',
        'search_items' => 'ブログを検索',
      ),
      'public' => true,// 管理画面に表示しサイト上にも表示する
      'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
      'has_archive' => true,//trueにすると投稿した記事のアーカイブページを生成
      'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
        'title',//タイトル
        'editor',//本文（の編集機能）
        'thumbnail',//アイキャッチ画像
        'custom-fields',
        'excerpt'//抜粋
      ),
      'menu_position' => 5//「投稿」の下に追加
    )
  );

  //カスタム投稿タイプ「エリア」
    register_post_type(
      'area',//投稿タイプ名（識別子）
      array(
        'label' => 'エリア',
        'labels' => array(
          'add_new_item' => '新規エリアを追加',
          'edit_item' => 'エリアを編集',
          'view_item' => 'エリアを表示',
          'search_items' => 'エリアを検索',
        ),
        'public' => true,// 管理画面に表示しサイト上にも表示する
        'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
        'has_archive' => true,//trueにすると投稿した記事のアーカイブページを生成
        'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
          'title',//タイトル
          'editor',//本文（の編集機能）
          'thumbnail',//アイキャッチ画像
          'custom-fields',
          'excerpt'//抜粋
        ),
        'menu_position' => 5//「投稿」の下に追加
      )
    );

//「ニュース」のカテゴリー設定
  register_taxonomy(
    'news_cat',
    'news',
    array(
      'label' =>  'ニュースカテゴリー',
      'labels' => array(
        'popular_items' => 'よく使うニュースカテゴリー',
        'edit_item' => 'ニュースカテゴリーを編集',
        'add_new_item' => '新規ニュースカテゴリーを追加',
        'search_items' =>  'ニュースカテゴリーを検索',
      ),
      'public' => true,
      'hierarchical' => true,

      'rewrite' => array('slug' => 'news/cat')  //newscat の代わりに news/cat でアクセス（URL)
    )
  );

//「ニュース」のタグ設定
  register_taxonomy(
    'news_tag',
    'news',
    array(
      'label' => 'ニュースタグ',
      'labels' => array(
        'popular_items' =>  'よく使うニュースタグ',
        'edit_item' =>'ニュースタグを編集',
        'add_new_item' => '新規ニュースタグを追加',
        'search_items' =>  'ニュースタグを検索',
      ),
      'public' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'news/tag')
    )
  );

//「ブログ」のカテゴリー設定
  register_taxonomy(
    'blog_cat',
    'blog',
    array(
      'label' =>  'ブログカテゴリー',
      'labels' => array(
        'popular_items' => 'よく使うブログカテゴリー',
        'edit_item' => 'ブログカテゴリーを編集',
        'add_new_item' => '新規ブログカテゴリーを追加',
        'search_items' =>  'ブログカテゴリーを検索',
      ),
      'public' => true,
      'hierarchical' => true,
      'rewrite' => array('slug' => 'blog/cat')  //blogcat の代わりに blog/cat でアクセス（URL)
    )
  );
//「ブログ」のタグ設定
  register_taxonomy(
    'blog_tag',
    'blog',
    array(
      'label' => 'ブログタグ',
      'labels' => array(
        'popular_items' =>  'よく使うブログタグ',
        'edit_item' =>'ブログタグを編集',
        'add_new_item' => '新規ブログタグを追加',
        'search_items' =>  'ブログタグを検索',
      ),
      'public' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'blog/tag')
    )
  );

//「エリア」のカテゴリー設定
  register_taxonomy(
    'area_cat',
    'area',
    array(
      'label' =>  'エリアカテゴリー',
      'labels' => array(
        'popular_items' => 'よく使うエリアカテゴリー',
        'edit_item' => 'エリアカテゴリーを編集',
        'add_new_item' => '新規エリアカテゴリーを追加',
        'search_items' =>  'エリアカテゴリーを検索',
      ),
      'public' => true,
      'hierarchical' => true,
      'rewrite' => array('slug' => 'area/cat')  //areacat の代わりに area/cat でアクセス（URL)
    )
  );
//「エリア」のタグ設定
  register_taxonomy(
    'area_tag',
    'area',
    array(
      'label' => 'エリアタグ',
      'labels' => array(
        'popular_items' =>  'よく使うエリアタグ',
        'edit_item' =>'エリアタグを編集',
        'add_new_item' => '新規エリアタグを追加',
        'search_items' =>  'エリアタグを検索',
      ),
      'public' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'area/tag')
    )
  );
}
add_action('init', 'new_post_type');



//管理画面ツールバーの編集
add_action('admin_bar_menu', 'customize_admin_bar_menu', 9999);
function customize_admin_bar_menu($wp_admin_bar){
    // Adminバー左側
//    $wp_admin_bar->remove_node('wp-logo');     // 一番左のWordPressのロゴを消す。
//    $wp_admin_bar->remove_node('new-content'); // 「＋ 新規」ってメニューを消す。

    // Adminバー右側
//    $wp_admin_bar->remove_node('my-account'); // アカウントのメニューを消す。
//    $wp_admin_bar->remove_node('search');     // 検索のメニューを消す。
}


//使用しないメニューを非表示にする
function remove_menus() {
//    remove_menu_page('index.php'); // ダッシュボード
//    remove_menu_page('separator1'); // セパレータ1
    remove_menu_page('edit.php'); // 投稿
//    remove_menu_page('upload.php'); // メディア
//    remove_menu_page('link-manager.php'); // リンク
//    remove_menu_page('edit.php?post_type=page'); // 固定ページ
//    remove_menu_page('edit-comments.php'); // コメント
//    remove_menu_page('separator2'); // セパレータ1
//    remove_menu_page('plugins.php'); // プラグイン
//    remove_menu_page('users.php'); // ユーザー
//    remove_menu_page('tools.php'); // ツール
//    remove_menu_page('options-general.php'); // 設定
//    remove_menu_page('profile.php'); // プロフィール(管理者以外のユーザー用)
//    remove_menu_page('wpcf7'); //Contact Form 7
//    remove_menu_page('wordpress-https'); //HTTPS

}
add_action('admin_menu', 'remove_menus');

/*-------------------------------------------*/
/*  検索機能
/*-------------------------------------------*/

//投稿記事のみ検索対象にしています。
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');

//0か未入力で検索した場合
function search_template_redirect() {
  global $wp_query;
  $wp_query->is_search = true;
  $wp_query->is_home = false;
  if (file_exists(TEMPLATEPATH . '/search.php')) {
    include(TEMPLATEPATH . '/search.php');
  }
  exit;
}
if (isset($_GET['s']) && $_GET['s'] == false) {
  add_action('template_redirect', 'search_template_redirect');
}

/*-------------------------------------------*/
/*  お問合せフォーム
/*-------------------------------------------*/

//郵便番号の自動処理
function add_head_link() {
    echo '<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>';
    echo "
    <script type=\"text/javascript\">
    jQuery(function($){
    $(\"#zip\").attr('onKeyUp', 'AjaxZip3.zip2addr(this,\'\',\'address\',\'address\');');
    $(\"#zip2\").attr('onKeyUp', 'AjaxZip3.zip2addr(\'zip1\',\'zip2\',\'prefecture\',\'city\',\'street\');');
});";
    echo '</script>';
}
add_action('wp_head', 'add_head_link');

//メールアドレスの確認項目を設置
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
$tag = new WPCF7_Shortcode( $tag );
$name = $tag->name;
$value = isset( $_POST[$name] )
? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
: '';
if ($name == "your-email"){
$my_email_confirm=$value;
}
if ($name == "your-email_confirm" && $my_email_confirm != $value){
$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
}

return $result;
}


/*-------------------------------------------*/
/*  Contact Form 7 スパム対策
/*-------------------------------------------*/

//Contact Form 7 ホスト名取得
add_filter('wpcf7_special_mail_tags', 'wpcf7_special_mail_tag_for_remote_host',10,2);
function wpcf7_special_mail_tag_for_remote_host($output, $name)
{
if(!isset($re_addr)){ $re_addr = $_SERVER['REMOTE_ADDR']; }
if('wpcf7.remote_host' == $name){ $output = gethostbyaddr($re_addr); }
return $output;
}

//Contact Form 7 ブラウザー情報取得
add_filter('wpcf7_special_mail_tags', 'wpcf7_special_mail_tag_for_remote_ua',10,2);
function wpcf7_special_mail_tag_for_remote_ua($output, $name)
{
// Special [wpcf7.remote_ua] tag
if(!isset($u_agent)){ $u_agent = $_SERVER['HTTP_USER_AGENT']; }
if('wpcf7.remote_ua' == $name){ $output = $u_agent; }
return $output;
}


add_action('init', function() {
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = 'ture';
return $init;
});


?>

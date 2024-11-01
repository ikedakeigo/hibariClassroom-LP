<?php
add_theme_support('post-thumbnails');
function add_stylesheet()
{
	wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array());
	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/common.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// ADD ASSETS
require get_stylesheet_directory() . '/assets/add-assets.php';

// DEFINE
require get_stylesheet_directory() . '/bases/define.php';

// BASE FUNCTIONS
require get_stylesheet_directory() . '/bases/base-function.php';

// THEME PAGINATION FUNCTION
function theme_pagination($post_query = null)
{
	global $paged, $wp_query;
	$translate['next'] = '次のページへ';
	$translate['prev'] = '前のページへ';

	if (empty($paged)) $paged = 1;
	$prev = $paged - 1;
	$next = $paged + 1;

	$end_size = 1;
	$mid_size = 2;
	$show_all = false;
	$dots = false;

	$pagi_query = $wp_query;
	if (isset($post_query) && $post_query) {
		$pagi_query = $post_query;
	}

	if (!$total = $pagi_query->max_num_pages) $total = 1;

	if ($total > 1) {
		echo '<div class="pagination">';
		echo '<ul class="pagiNumber flex">';

		if ($paged > 1) {
			echo '<li class="prev flex"><a href="' . previous_posts(false) . '">' . $translate['prev'] . '</a></li>';
		}

		for ($i = 1; $i <= $total; $i++) {
			if ($i == $paged) {
				echo '<li class="active"><a>' . $i . '</a></li>';
				$dots = true;
			} else {
				if ($show_all || ($i <= $end_size || ($paged && $i >= $paged - $mid_size && $i <= $paged + $mid_size) || $i > $total - $end_size)) {
					echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
					$dots = true;
				} elseif ($dots && !$show_all) {
					echo '<li class="dots"><a>...</a></li>';
					$dots = false;
				}
			}
		}

		if ($paged < $total) {
			echo '<li class="next flex"><a href="' . next_posts(0, false) . '">' . $translate['next'] . '</a></li>';
		}

		echo '</ul>';
		echo '</div>';
	}
}


// GET QUERY PAGED NUMBER
function get_query_paged()
{
	return (get_query_var('paged')) ? get_query_var('paged') : 1;
}

/*
* **********************************
* ポップアップ設置
* **********************************
*/
function popup($atts, $content)
{
	/*******************************************************************************
【入力パラメータ$attsの内容】
enabled => ポップアップ 0=無効 1=有効
init_display => 0=デフォルトで出さない 1=デフォルトで出す
modal_option => jQuery.modalに渡すオプション配列をJS連想配列の記述で。
デフォルト {escapeClose: true, clickClose: true, showClose: true,} 
escapeClose→Escキーを押したときに閉じるか
clickClose→暗い背景をクリックしたときに閉じるか
showClose→閉じる×アイコンを表示するか
onpopup ポップアップしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。
onclick 画像型の場合にクリックしたときに実行するスクリプト。スクリプトの文字列囲みには'を使用。

①画像型のポップアップ
以下のURLで設定
banner_url => バナー画像のURL。URLパラーメータのバインド変数{%パラメータ名}を入力可能
link_url => バナークリックしたときのリンク先URL。URLパラーメータのバインド変数{%パラメータ名}を入力可能
②カスタマイズhtml型のポップアップ
自由なhtmlを記述。ショートコードブロックは余計なスペースなど入るので非推奨。カスタムhtmlブロックを推奨。
ショートコードを囲み型にして中のテキストを$contentで受け取れるテキスト型
URLパラーメータのバインド変数{%パラメータ名}を入力可能
	 ********************************************************************************/

	//パラメータ初期化
	extract(shortcode_atts(array(
		'enabled' => 1,
		'modal_id' => 'ss-popup-banner',
		'init_display' => 1,
		'banner_url' => '',
		'link_url' => '',
		'modal_option' => '{escapeClose: true, clickClose: true, showClose: true,}',
		'onpopup' => '',
		'onclick' => '',
	), $atts));

	/***********************************************
	 * 入力パラメータチェック
	 ************************************************/

	if ($content == null && $banner_url == null) {
		return null;
	}

	if ($enabled == 0) {
		return null;
	}

	if ($init_display != 1) {
		$init_display = 0;
	} else {
		$init_display = 1;
	}


	/***********************************************
	 * 囲みの中の文字列があればテキスト型。そのテキストをポップアップに。
	 * なければ画像型。引数で指定されたURLを使う
	 ************************************************/

	$content_check = trim(strip_tags($content)); //囲みテキストからタグを除く。コメントアウトされていれば空になり無効になる

	if ($content_check != null) { //囲みテキストが空じゃない

		$popup_html = <<<EOF

<!-- ポップアップバナー(囲みテキスト) -->
<div id="{$modal_id}" class="modal ss-popup-banner-text">
{$content}
</div>
<!-- /ポップアップバナー -->

EOF;
	} else {

		$link_url = replace_req_params(array("encode" => "urlencode"), $link_url); //リンクURLパラメータ変換
		$banner_url = replace_req_params(array("encode" => "urlencode"), $banner_url); //バナーURL変換
		$popup_html = <<<EOF

<!-- ポップアップバナー(画像型) -->
<div id="{$modal_id}" class="modal ss-popup-banner-image">
<a style="display: block; margin: auto;" href="{$link_url}" target="_blank" onClick="{$onclick}">
<img style=" width: 100%;  margin: 0; max-width: 500px;" src="{$banner_url}" />
</a>
</div>
<!-- /ポップアップバナー(画像型) -->

EOF;
	}


	/***********************************************
	 * 出力するHTMLを設定
	 ************************************************/

	$html = <<<EOF

<style>
.modal{
z-index: 3;
padding: 0;
border-radius: 0;
display: none;
/* width: initial; */
}
.modal.ss-popup-banner-image{
/* width: auto; */
}
.modal.ss-popup-banner-text{

}
.modal img, modal a{
display: block;
}
.blocker{
z-index: 2;
}
.modal a.close-modal{
width: 2.4rem;
height: 2.4rem;
opacity: 0.5;
top: -2rem;
right: -2rem;
z-index: -1;				
}
</style>

<script>

load_count_modal = 0; // ライブラリを読み込んだ回数。グローバル

jQuery(function(){

var init_display = $init_display;

/* ==============================================
* 外部ライブラリjquery.modalを動的にロード
* ============================================== */

console.log("load_count_modal=" + load_count_modal);
if(typeof jQuery.modal != "function" && load_count_modal == 0){ /* 初回のみライブラリを読み込む */

++load_count_modal;
var src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js';
var script = jQuery('<script>').attr({
'type': 'text/javascript',
'src': src,
});
jQuery('head')[0].appendChild(script[0]);
console.log("load " + src);
var link = jQuery('<link>').attr({
'rel': 'stylesheet',
'href': 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css',
});
jQuery('head')[0].appendChild(link[0]);

}


var count = 0;

/* ==============================================
* 外部ライブラリが実行されている時だけ一度実行するようインターバル実行
* ============================================== */
var timer = setInterval(function(){

++count;
if(typeof jQuery.modal == "function"){
//console.log("■開始 count=" + count + "回目 ----------------------------------------------");
clearInterval(timer); /* 最初の実行したらインターバル実行キャンセル */
var modal_option = {$modal_option};
if(init_display == 1){
console.log("init_display=1");
jQuery("#{$modal_id}").modal(modal_option);
{$onpopup};
}
}

}, 100);

});	

</script>

{$popup_html}

EOF;
	$html = do_shortcode($html); //ショートコードの中のショートコードを展開

	return $html;
}
add_shortcode('popup', 'popup');
/*
* **************************************************************************
* 文字列の中のURLパラメータバインド変数({%パラメータ名})を実際の値に置換
* **************************************************************************
*/


function replace_req_params($atts, $content)
{ //こちらをショートコードに登録

	//パラメータ初期化
	extract(shortcode_atts(array(
		'encode' => 'esc_html', //使用するエンコードorエスケープ関数 esc_html, urlencode
	), $atts));

	if ($encode != "esc_html" && $encode != "urlencode") {
		return null; //それ以外エンコード指定は危ないので出力しない
	}

	return replace_req_params_base($atts, $content);
}



function replace_req_params_base($atts, $content)
{ //こちらはショートコードに登録はしない

	//パラメータ初期化
	extract(shortcode_atts(array(
		'encode' => 'esc_html', //使用するエンコードorエスケープ関数 esc_html, urlencode, none
	), $atts));

	//複数ヒットするとmatchesはこうなる
	//print_r($matches);
	// Array
	// (
	//     [0] => Array
	//         (
	//             [0] => {%from}
	//             [1] => {%from}
	//             [2] => {%to}
	//         )
	// )

	if ($encode != "esc_html" && $encode != "urlencode" && $encode != "none") {
		return null; //それ以外エンコード指定は出力しない
	}


	$content = do_shortcode($content);

	preg_match_all('|\{%[a-z0-9\-_\[\]]+\}|', $content, $matches); //{%パラメータ名}を全てマッチさせる

	if (count($matches) > 0) {

		//{%パラメータ名}を1つ1つループ
		foreach ($matches[0] as $idx => $param_str) {

			$param_name = str_replace(
				array("{%", "}"),
				"",
				$param_str
			);

			$param_val = null;
			if (isset($_GET[$param_name])) {
				$param_val = $_GET[$param_name];
			}

			//{%パラメータ名}を実際に変換
			if ($encode == "none") {
				$content = str_replace($param_str, $param_val, $content);
			} else {
				$content = str_replace($param_str, $encode($param_val), $content);
			}
		}
	}

	return $content;
}

add_shortcode('replace_req_params', 'replace_req_params'); /* ショートコードを登録 */
<?php
/*
Plugin Name: Hilight Sticky
Plugin URI: http://www.wpcourse.com
Version:V1.05
Author: tomheng
Author URI:http://blog.webfuns.net
Description:you can hilight your sticky post as you want.
 */
function show_menu(){
    //在设置中添加一个菜单
    add_options_page(__('Hilight Title','Hilight Sticky'),__('Hilight Title','Hilight Sticky'), 8, __FILE__, 'action_menu');
}
function action_menu(){
   include('html.php');
}
//添加action 
/*
*top menu:add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
*sub menu: add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
*/
if ( is_admin() ){ // admin actions
  add_action('admin_menu','show_menu');
  add_action( 'admin_init', 'register_mysettings' );
} else {
  // non-admin enqueues, actions, and filters
}
function register_mysettings() { // whitelist options
  //注册之后就可以被options处理
  register_setting('myoption-group', 'color');
}
function hilight_sticky($title){
   $color=get_option('color');
   if($color&&is_sticky()&&!is_admin()){
      $title="<span style='color:$color'>".$title."</span>";
   }
   return $title;
}
//添加action 

add_filter('the_title','hilight_sticky');



?>

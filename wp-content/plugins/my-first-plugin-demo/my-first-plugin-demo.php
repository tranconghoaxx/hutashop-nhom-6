<?php
/**
 * Plugin Name: My First Plugin Demo 
 * Plugin URI: http://hocwp.net // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên nhóm 6 viết dành riêng cho WordPress, chỉ để học tập. 
 * Version: 1.0 
 * Author: Tran Cong Hoa, Truong Nguyen Hien Nhan, Tran Vu Ninh, Vo Minh TienTien
 * Author URI: http://sauhi.com // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */

if(!class_exists('My_First_Plugin_Demo')) {
    class My_First_Plugin_Demo {
            function __construct() {
                    if(!function_exists('add_shortcode')) {
                            return;
                    }
                    add_shortcode( 'hello' , array(&$this, 'hello_func') );
            }

            function hello_func($atts = array(), $content = null) {
                    extract(shortcode_atts(array('name' => 'World'), $atts));
                    return '<div><p>Hello '.$name.'!!!</p></div>';
            }
    }
}
function mfpd_load() {
    global $mfpd;
    $mfpd = new My_First_Plugin_Demo();
}
add_action( 'plugins_loaded', 'mfpd_load' );
?>

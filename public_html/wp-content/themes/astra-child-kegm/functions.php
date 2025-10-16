<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

// 전역 스타일 + Font Awesome 로드 (에디터 화면 제외)
add_action('wp_enqueue_scripts', function () {
  if ( is_admin() ) return; // 편집기 보호
  wp_enqueue_style('astra-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('kegm-style', get_stylesheet_directory_uri() . '/style.css', ['astra-style'], '1.0');
  wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '6.5.2');
}, 20);
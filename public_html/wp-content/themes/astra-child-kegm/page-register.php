<?php
/**
 * Template Name: KEGM Register Page
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$errors = new WP_Error();
$done   = false;

// 가입 가능 여부
$can_register = get_option( 'users_can_register' );

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && $can_register ) {
  check_admin_referer('kegm_register_action','kegm_register_nonce');

  $user_login = sanitize_user( $_POST['user_login'] ?? '' );
  $user_email = sanitize_email( $_POST['user_email'] ?? '' );
  $user_pass  = $_POST['user_pass'] ?? '';
  $user_pass2 = $_POST['user_pass2'] ?? '';

  if ( empty($user_login) ) $errors->add('user_login', '아이디를 입력하세요.');
  if ( empty($user_email) || !is_email($user_email) ) $errors->add('user_email', '올바른 이메일을 입력하세요.');
  if ( username_exists($user_login) ) $errors->add('user_login_exists', '이미 사용 중인 아이디입니다.');
  if ( email_exists($user_email) )   $errors->add('user_email_exists', '이미 가입된 이메일입니다.');
  if ( empty($user_pass) || $user_pass !== $user_pass2 ) $errors->add('user_pass', '비밀번호가 비어있거나 일치하지 않습니다.');

  if ( ! $errors->has_errors() ) {
    $user_id = wp_create_user( $user_login, $user_pass, $user_email );
    if ( is_wp_error($user_id) ) {
      $errors = $user_id;
    } else {
      // 기본 역할
      wp_update_user( array( 'ID' => $user_id, 'role' => 'subscriber' ) );

      // 자동 로그인 후 리다이렉트
      $creds = array(
        'user_login'    => $user_login,
        'user_password' => $user_pass,
        'remember'      => true,
      );
      $signon = wp_signon( $creds, false );
      wp_safe_redirect( home_url('/') );
      exit;
    }
  }
}
?>
<main id="primary" class="site-main" style="max-width:480px;margin:40px auto;padding:24px 20px;">
  <h1 style="margin-bottom:16px;">회원가입</h1>

  <?php if ( ! $can_register ) : ?>
    <p>현재는 회원가입을 받지 않습니다. 관리자에게 문의하세요.</p>
  <?php else : ?>
    <?php if ( is_wp_error($errors) && $errors->has_errors() ) : ?>
      <div class="kegm-error" style="background:#fef2f2;border:1px solid #fecaca;padding:12px 14px;border-radius:8px;margin-bottom:12px;">
        <?php foreach ( $errors->get_error_messages() as $m ) : ?>
          <p style="margin:4px 0;"><?php echo esc_html($m); ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="post" class="kegm-register-form" autocomplete="off">
      <?php wp_nonce_field('kegm_register_action','kegm_register_nonce'); ?>

      <label for="user_login">아이디</label>
      <input type="text" name="user_login" id="user_login" required style="width:100%;padding:10px 12px;margin:6px 0 12px;border:1px solid #e5e7eb;border-radius:8px;">

      <label for="user_email">이메일</label>
      <input type="email" name="user_email" id="user_email" required style="width:100%;padding:10px 12px;margin:6px 0 12px;border:1px solid #e5e7eb;border-radius:8px;">

      <label for="user_pass">비밀번호</label>
      <input type="password" name="user_pass" id="user_pass" required style="width:100%;padding:10px 12px;margin:6px 0 12px;border:1px solid #e5e7eb;border-radius:8px;">

      <label for="user_pass2">비밀번호 확인</label>
      <input type="password" name="user_pass2" id="user_pass2" required style="width:100%;padding:10px 12px;margin:6px 0 16px;border:1px solid #e5e7eb;border-radius:8px;">

      <button type="submit" class="btn" style="width:100%;padding:12px 14px;border-radius:10px;border:0;background:#0C3C78;color:#fff;font-weight:600;">회원가입</button>
    </form>

    <p style="margin-top:12px;">이미 계정이 있으신가요? <a href="<?php echo esc_url( home_url('/login/') ); ?>">로그인</a></p>
  <?php endif; ?>
</main>
<?php get_footer();
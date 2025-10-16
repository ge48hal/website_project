<?php
/**
 * Template Name: KEGM Login Page
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

if ( is_user_logged_in() ) :
  $current_user = wp_get_current_user();
  $display_name = $current_user && $current_user->display_name ? $current_user->display_name : $current_user->user_login;
  ?>
  <main id="primary" class="site-main" style="max-width:640px;margin:40px auto;padding:20px;">
    <div class="kegm-auth-card" role="region" aria-labelledby="welcome-title">
      <h1 id="welcome-title" class="welcome-title">
        환영합니다, <span class="welcome-name"><?php echo esc_html( $display_name ); ?></span>님
      </h1>

      <p class="login-state">이미 로그인되어 있습니다.</p>

      <nav class="chip-row" aria-label="빠른 작업">
        <a class="chip" href="<?php echo esc_url( home_url('/') ); ?>">홈으로 이동</a>
        <a class="chip" href="<?php echo esc_url( wp_logout_url( home_url('/') ) ); ?>">로그아웃</a>
      </nav>
    </div>
  </main>
<?php
else :
  // 기존 로그인 폼(원래 코드 그대로)
  $args = array(
    'echo'           => true,
    'remember'       => true,
    'redirect'       => home_url('/'),
    'form_id'        => 'kegm-loginform',
    'label_username' => __( '아이디 또는 이메일' ),
    'label_password' => __( '비밀번호' ),
    'label_remember' => __( '자동 로그인' ),
    'label_log_in'   => __( '로그인' ),
    'id_username'    => 'user_login',
    'id_password'    => 'user_pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'value_username' => '',
    'value_remember' => true,
  );
  ?>
  <main id="primary" class="site-main" style="max-width:420px;margin:40px auto;padding:24px 20px;">
    <div class="kegm-auth-card">
      <h1 style="margin-bottom:16px;">로그인</h1>
      <div class="kegm-auth-box">
        <?php wp_login_form( $args ); ?>
        <p style="margin-top:14px;">
          <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">비밀번호를 잊으셨나요?</a>
        </p>
        <p style="margin-top:6px;">
          계정이 없으신가요? <a href="<?php echo esc_url( home_url('/register/') ); ?>">회원가입</a>
        </p>
      </div>
    </div>
  </main>
<?php
endif;
get_footer();
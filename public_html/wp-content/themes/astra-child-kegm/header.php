<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">

    <!-- Top bar with login / signup -->
    <div class="header-top">
      <div class="header-container">
        <div class="auth-buttons">

          <!-- 항상 보이는 Home -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>

          <?php if ( is_user_logged_in() ) :
            $current_user = wp_get_current_user(); ?>
            <!-- 사용자 이름 + 작은 사람 아이콘 -->
            <span class="user-chip" aria-label="사용자">
              <!-- inline SVG: 외부 라이브러리 불필요, 색은 currentColor -->
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.42 0-8 2.14-8 4.78V21a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2.22C20 16.14 16.42 14 12 14Z"/>
              </svg>
              <span><?php echo esc_html( $current_user->display_name ); ?></span>
            </span>

            <!-- 로그아웃 -->
            <a href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>">로그아웃</a>

          <?php else : ?>
            <!-- 비로그인: 로그인만 -->
            <a href="<?php echo esc_url( home_url( '/login/' ) ); ?>">로그인</a>
          <?php endif; ?>

        </div>
      </div>
    </div>


  <!-- Main header row -->
  <div class="header-main">
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="https://test-kegm.org/wp-content/uploads/2025/09/Screenshot-2025-09-09-at-3.22.46-PM.png"
             alt="<?php echo esc_attr( get_bloginfo('name') ); ?>">
      </a>
    </div>

    <nav class="nav" aria-label="Primary">
      <ul class="menu">
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">교회소개</a></li>
        <li><a href="<?php echo esc_url( home_url( '/sermon/' ) ); ?>">설교</a></li>
        <li><a href="<?php echo esc_url( home_url( '/discipleship/' ) ); ?>">훈련ㆍ양육</a></li>
        <li><a href="<?php echo esc_url( home_url( '/departments/' ) ); ?>">교회부서</a></li>
      </ul>

      <!-- 공통 메가패널 -->
      <div class="mega-panel" aria-hidden="true">
        <div class="mega-inner">
        <!-- 교회소개 -->
        <section>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">교회소개</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/worship/' ) ); ?>">예배안내</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/events/' ) ); ?>">행사안내</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/bulletin/' ) ); ?>">주보</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/satzung/' ) ); ?>">법인체 정관</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/rules/' ) ); ?>">교회 회칙</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/history/' ) ); ?>">교회 연혁</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/notice/' ) ); ?>">공지사항</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/logo/' ) ); ?>">교회 이름과 로고</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/staff/' ) ); ?>">교역자</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/map/' ) ); ?>">오시는 길</a></li>
          </ul>
        </section>


          <!-- 설교 -->
          <section>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/sermon/' ) ); ?>">설교</a></li>
            </ul>
          </section>

          <!-- 훈련ㆍ양육 -->
          <section>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/discipleship/' ) ); ?>">훈련ㆍ양육</a></li>
            </ul>
          </section>

          <!-- 교회부서 -->
          <section>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/departments/' ) ); ?>">교회부서</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/education/' ) ); ?>">교육부 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/music/' ) ); ?>">음악부 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/selfgoverning/' ) ); ?>">자치회 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/kids/' ) ); ?>">유치부 게시판</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/children/' ) ); ?>">소년부 게시판</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/youth/' ) ); ?>">청소년부 게시판</a></li>
            </ul>
          </section>

        </div>
      </div>
    </nav>
    
    <!-- ★★★  (모바일 왼쪽 슬라이드 메뉴) ★★★ -->

    <!-- 모바일 메뉴 토글(체크박스) -->
    <input id="kegm-nav-toggle" type="checkbox" hidden>

    <!-- 햄버거 버튼 -->
    <label for="kegm-nav-toggle" class="kegm-hamburger" aria-label="메뉴 열기">
      <span></span><span></span><span></span>
    </label>

    <!-- 어두운 오버레이 -->
    <label for="kegm-nav-toggle" class="kegm-overlay" aria-hidden="true"></label>

    <!-- 왼쪽 슬라이드 드로어 -->
    <aside class="kegm-drawer" role="dialog" aria-modal="true" aria-label="모바일 내비게이션">
      <div class="kegm-drawer-head">
        <button type="button" class="kegm-close" aria-label="닫기"
          onclick="document.getElementById('kegm-nav-toggle').checked=false">×</button>
      </div>

      <nav class="kegm-drawer-nav" aria-label="모바일 내비게이션">
          <!-- 교회소개 -->
          <details>
            <summary>교회소개</summary>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">교회소개</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/worship/' ) ); ?>">예배안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/events/' ) ); ?>">행사안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/bulletin/' ) ); ?>">주보</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/satzung/' ) ); ?>">법인체 정관</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/rules/' ) ); ?>">교회 회칙</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/history/' ) ); ?>">교회 연혁</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/logo/' ) ); ?>">교회 이름과 로고</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/staff/' ) ); ?>">교역자</a></li>
              <li><a href="<?php echo esc_url( home_url( '/about/map/' ) ); ?>">오시는 길</a></li>
            </ul>
          </details>

          <!-- 설교 · 찬양 (메가패널 구성과 동일: 설교만) -->
          <details>
            <summary>설교</summary>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/sermon/' ) ); ?>">설교</a></li>
            </ul>
          </details>

          <!-- 훈련ㆍ양육 -->
          <details>
            <summary>훈련ㆍ양육</summary>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/discipleship/' ) ); ?>">훈련ㆍ양육</a></li>
            </ul>
          </details>

          <!-- 교회부서 -->
          <details>
            <summary>교회부서</summary>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/departments/' ) ); ?>">교회부서</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/education/' ) ); ?>">교육부 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/music/' ) ); ?>">음악부 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/selfgoverning/' ) ); ?>">자치회 안내</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/kids/' ) ); ?>">유치부 게시판</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/children/' ) ); ?>">소년부 게시판</a></li>
              <li><a href="<?php echo esc_url( home_url( '/departments/youth/' ) ); ?>">청소년부 게시판</a></li>
            </ul>
          </details>
        </nav>

    </aside>

  </div><!-- /.header-main -->

</header>

<main id="primary" class="site-main">
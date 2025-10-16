<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?></main>

<footer id="custom-footer">
  <div class="footer-container">
    <!-- 교회 로고 + 위치 -->
    <div class="footer-left">
      <img src="http://test-kegm.org/wp-content/uploads/2025/09/Screenshot-2025-09-09-at-3.22.46-PM-1.png" alt="뮌헨한인교회 로고" class="footer-logo">
      <div class="footer-info">
        <p>주소: Barbarossastraße 3, 81677 München</p>
        <p>이메일: kegm.online@gmail.com</p>
      </div>
    </div>

    <!-- 소셜 링크 -->
    <div class="footer-right">
      <a href="https://share.google/vMt6Q4MqRrnJixUum" target="_blank" rel="noopener" aria-label="Facebook">
        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
      </a>
      <a href="https://www.instagram.com/kegm.munich/" target="_blank" rel="noopener" aria-label="Instagram">
        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube">
        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
      </a>
    </div>
  </div>

<!-- 저작권 + 링크 -->
<div class="footer-bottom">
  <div class="footer-left">
    © <?php echo date('Y'); ?> 뮌헨한인교회. All Rights Reserved.
  </div>
  <div class="footer-right">
    <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">이용약관</a>
    <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">개인정보취급방침</a>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
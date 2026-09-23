  </main>
</div><!-- /.layout -->

<footer class="site-footer">
  <div class="footer-inner">
    <p><strong>Blackhawk Trading Co.</strong><br>
       1907 W. Historic Rt 66, Gallup, NM 87301</p>
    <p><a href="tel:+15058716120">1-505-871-6120</a><br>
       <a href="mailto:info@blackhawktradingco.com">info@blackhawktradingco.com</a></p>
    <p class="copyright">&copy; <?= date('Y') ?> Blackhawk Trading Co., Inc. All rights reserved.</p>
  </div>
</footer>

<script>
  // Small-screen menu toggle. On desktop the menu is always shown and this does nothing visible.
  (function () {
    var nav = document.getElementById('sidenav');
    var btn = nav.querySelector('.sidenav-toggle');
    nav.classList.add('js-collapsible');
    btn.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      btn.setAttribute('aria-expanded', open);
    });
  })();
</script>
</body>
</html>

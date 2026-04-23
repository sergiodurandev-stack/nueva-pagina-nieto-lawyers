<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-col">
        <img src="<?php echo esc_url(NL_ASSETS_URL . '/logo-blanco.png'); ?>" alt="Nieto &amp; Nieto Lawyers" class="footer-brand-logo">
        <p class="footer-brand-desc">Firma boutique especializada en soluciones legales corporativas, financieras y comerciales con más de 23 años de experiencia en Colombia y Europa.</p>
        <div class="footer-social">
          <a href="https://www.linkedin.com/company/nieto-&-nieto-lawyers" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61574706911597" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/nietolawyers/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.youtube.com/@nietolawyers" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">Áreas de Práctica</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/corporativo/')); ?>">Corporativo</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/tecnologia-datos-y-transformacion-digital/')); ?>">Tecnología y Datos</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/impuestos-aduanero-y-comercio-exterior/')); ?>">Impuestos y Aduanas</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/litigios-y-arbitraje/')); ?>">Litigios y Arbitraje</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/propiedad-intelectual/')); ?>">Propiedad Intelectual</a></li>
          <li><a href="<?php echo esc_url(home_url('/areas-de-practica/compliance/')); ?>">Compliance</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">Firma</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Quiénes Somos</a></li>
          <li><a href="<?php echo esc_url(home_url('/nuestro-equipo/')); ?>">Nuestro Equipo</a></li>
          <li><a href="<?php echo esc_url(home_url('/nuestra-historia/')); ?>">Nuestra Historia</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog Legal</a></li>
          <li><a href="<?php echo esc_url(home_url('/trabaja-con-nosotros/')); ?>">Trabaja con Nosotros</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">Contacto</h4>
        <ul class="footer-links" style="gap:16px">
          <li style="flex-direction:column;align-items:flex-start;gap:4px">
            <span style="color:#b8993a;font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase">Colombia</span>
            <span style="color:#d0cec9;font-size:.88rem">Bogotá, D.C.</span>
          </li>
          <li style="flex-direction:column;align-items:flex-start;gap:4px">
            <span style="color:#b8993a;font-size:.7rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase">Europa</span>
            <span style="color:#d0cec9;font-size:.88rem">Estambul, Turquía</span>
          </li>
          <li><a href="mailto:info@nieto-lawyers.com">info@nieto-lawyers.com</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> Nieto &amp; Nieto Lawyers. Todos los derechos reservados.</span>
      <span>
        <a href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>" style="color:inherit;text-decoration:underline;text-underline-offset:4px">Privacidad</a>
        &middot;
        <a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>" style="color:inherit;text-decoration:underline;text-underline-offset:4px">Términos</a>
      </span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

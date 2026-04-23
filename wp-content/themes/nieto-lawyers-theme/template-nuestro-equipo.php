<?php
/**
 * Template Name: Nuestro Equipo
 */

get_header();
$assets = NL_ASSETS_URL;

$founder = [
  'name'   => 'Jaime Nieto Pérez',
  'slug'   => 'jaime-nieto',
  'role'   => 'Socio Fundador & Gerente',
  'email'  => 'jaime.nieto@nietolawyers.com',
  'photo'  => $assets . '/Jaime-Nieto.png',
  'langs'  => ['Español', 'Inglés'],
  'areas'  => ['Corporativo', 'Contratación Estatal', 'Inmobiliario'],
  'bio'    => 'Con más de 40 años de trayectoria profesional, ha desarrollado una práctica de alto nivel en derecho corporativo, inmobiliario y contratación, acompañando a empresas, inversionistas y clientes estratégicos en decisiones de gran impacto.',
];

$members = [
  [
    'name'  => 'Jaime Andrés Nieto',
    'slug'  => 'jaime-andres-nieto',
    'role'  => 'Socio Senior',
    'email' => 'jaimeandres.nieto@nietolawyers.com',
    'photo' => $assets . '/Jaime-Andres-Nieto.png',
    'langs' => ['Español', 'Inglés', 'Francés'],
    'areas' => ['Inversión Extranjera', 'Propiedad Intelectual', 'Corporativo'],
  ],
  [
    'name'  => 'Estefani Nieto',
    'slug'  => 'estefani-nieto',
    'role'  => 'Socia Senior',
    'email' => 'estefani.nieto@nietolawyers.com',
    'photo' => $assets . '/Estefani-Nieto.png',
    'langs' => ['Español', 'Inglés', 'Francés', 'Turco'],
    'areas' => ['Regulatorio y Sanitario', 'Impuestos', 'Tecnología y Datos'],
  ],
  [
    'name'  => 'Doris Cecilia Criado',
    'slug'  => 'doris-cecilia-criado',
    'role'  => 'Abogada Senior',
    'email' => 'contabilidad@nietolawyers.com',
    'photo' => $assets . '/Doris-Cecilia-Criado.png',
    'langs' => ['Español'],
    'areas' => ['Contabilidad y Finanzas', 'Impuestos', 'Comercio Exterior'],
  ],
  [
    'name'  => 'Katty Escobar Gómez',
    'slug'  => 'katty-escobar-gomez',
    'role'  => 'Abogada Asociada',
    'email' => 'katty.escobar@nietolawyers.com',
    'photo' => $assets . '/Kathy-Escobar.png',
    'langs' => ['Español', 'Inglés'],
    'areas' => ['Compliance', 'Corporativo', 'Impuestos'],
  ],
  [
    'name'  => 'Mert Ocal',
    'slug'  => 'mert-ocal',
    'role'  => 'Of Counsel',
    'email' => 'mert.ocaln@nietolawyers.com',
    'photo' => $assets . '/Mert-Ocal.png',
    'langs' => ['Inglés', 'Turco'],
    'areas' => ['Inversión Extranjera', 'Contabilidad y Finanzas'],
  ],
  [
    'name'  => 'Aníbal Ricardo Coley',
    'slug'  => 'anibal-ricardo-coley',
    'role'  => 'Abogado',
    'email' => 'Anibalr.coley@nietolawyers.com',
    'photo' => $assets . '/Anibal-Coley-LAWYER-3-1.png',
    'langs' => ['Español'],
    'areas' => ['Contabilidad y Finanzas', 'Impuestos Aduaneros'],
  ],
];
?>

<!-- ════ BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url($assets . '/banner-home.jpg'); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Nuestro Equipo</span>
    </div>
    <h1 class="page-banner-title">Nuestro <span>Equipo</span></h1>
  </div>
</div>

<!-- ════ INTRO ════ -->
<section class="equipo-intro">
  <div class="container">
    <div class="reveal">
      <span class="section-label" style="display:block;margin-bottom:14px">Multidisciplinario · Internacional</span>
      <h2 class="section-title" style="margin-bottom:20px">Profesionales de <span>Alta Calidad</span></h2>
      <p>En Nieto &amp; Nieto Lawyers contarás con un grupo multidisciplinario conformado por abogados, contadores, financieros, internacionalistas e ingenieros de las más altas calidades profesionales y humanas. Dado nuestro carácter internacional, brindamos asesoría en español, inglés, francés o turco.</p>
    </div>
  </div>
</section>

<!-- ════ FOUNDER ════ -->
<section class="equipo-section">
  <div class="equipo-founder reveal">

    <div class="founder-card">

      <div class="founder-photo">
        <img src="<?php echo esc_url($founder['photo']); ?>" alt="<?php echo esc_attr($founder['name']); ?>">
        <div class="founder-photo-badge">Socio Fundador</div>
      </div>

      <div class="founder-info">
        <div class="founder-role"><?php echo esc_html($founder['role']); ?></div>
        <div class="founder-name"><?php echo esc_html($founder['name']); ?></div>
        <div class="founder-divider"></div>
        <p class="founder-bio"><?php echo esc_html($founder['bio']); ?></p>

        <div class="founder-meta">
          <div class="founder-meta-row">
            <div class="founder-meta-icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="founder-meta-text">
              <a href="mailto:<?php echo esc_attr($founder['email']); ?>">
                <?php echo esc_html($founder['email']); ?>
              </a>
            </div>
          </div>
          <div class="founder-meta-row">
            <div class="founder-meta-icon"><i class="fa-solid fa-language"></i></div>
            <div class="founder-meta-text"><?php echo esc_html(implode(' · ', $founder['langs'])); ?></div>
          </div>
        </div>

        <div class="founder-areas">
          <?php foreach ($founder['areas'] as $area) : ?>
          <span class="founder-area-tag"><?php echo esc_html($area); ?></span>
          <?php endforeach; ?>
        </div>

        <a href="<?php echo esc_url( home_url( '/abogados/' . $founder['slug'] . '/' ) ); ?>" class="btn btn-outline" style="margin-top:24px;display:inline-flex">
          <i class="fa-solid fa-user-tie"></i> Ver perfil completo
        </a>
      </div>

    </div>
  </div>

  <!-- ── Rest of team ── -->
  <div class="equipo-members-wrap">
    <div class="equipo-members-label">Equipo de Profesionales</div>
    <div class="equipo-members-grid">
      <?php foreach ($members as $m) : ?>
      <div class="member-card reveal">

        <div class="member-photo-wrap">
          <img src="<?php echo esc_url($m['photo']); ?>" alt="<?php echo esc_attr($m['name']); ?>" loading="lazy">
          <div class="member-photo-overlay"></div>
          <span class="member-photo-role"><?php echo esc_html($m['role']); ?></span>
        </div>

        <div class="member-info">
          <div class="member-name"><?php echo esc_html($m['name']); ?></div>

          <div class="member-tags">
            <?php foreach (array_slice($m['areas'], 0, 2) as $a) : ?>
            <span class="member-tag area"><?php echo esc_html($a); ?></span>
            <?php endforeach; ?>
            <?php foreach ($m['langs'] as $l) : ?>
            <span class="member-tag lang"><?php echo esc_html($l); ?></span>
            <?php endforeach; ?>
          </div>

          <div class="member-divider"></div>

          <a href="mailto:<?php echo esc_attr($m['email']); ?>" class="member-email">
            <i class="fa-solid fa-envelope"></i>
            <?php echo esc_html($m['email']); ?>
          </a>

          <?php if ( ! empty( $m['slug'] ) ) : ?>
          <a href="<?php echo esc_url( home_url( '/abogados/' . $m['slug'] . '/' ) ); ?>" class="member-profile-link">
            Ver perfil <i class="fa-solid fa-arrow-right"></i>
          </a>
          <?php endif; ?>
        </div>

      </div>
      <?php endforeach; ?>
    </div>
  </div>

</section>

<!-- ════ CTA ════ -->
<section style="padding:80px 0;background:var(--clr-dark);text-align:center;border-top:1px solid rgba(255,255,255,.05)">
  <div class="container reveal">
    <span class="section-label" style="display:block;margin-bottom:14px">Hablemos</span>
    <h2 class="section-title">¿Necesitas asesoría <span>legal</span>?</h2>
    <p style="color:var(--clr-muted);max-width:480px;margin:0 auto 36px">Nuestro equipo está listo para acompañarte en cada etapa de tu proceso legal o empresarial.</p>
    <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn-primary">
      <i class="fa-solid fa-envelope"></i>
      Contáctanos
    </a>
  </div>
</section>

<?php get_footer(); ?>

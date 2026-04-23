<?php
/**
 * Template Name: Quienes Somos
 */

get_header();
$assets = NL_ASSETS_URL;
?>

<!-- ════ PAGE BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url($assets . '/Banner-qs.jpg'); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Quiénes Somos</span>
    </div>
    <h1 class="page-banner-title">Sobre <span>Nosotros</span></h1>
  </div>
</div>

<!-- ════ INTRO ════ -->
<section class="qs-intro">
  <div class="container">
    <div class="qs-intro-grid">

      <div class="qs-intro-text reveal">
        <span class="section-label">Nuestra Firma</span>
        <h2 class="section-title" style="margin-bottom:28px">
          Nieto &amp; Nieto <span>Lawyers</span>
        </h2>

        <p><strong>Nieto &amp; Nieto Lawyers</strong> es una firma fundada en la ciudad de Bogotá, en el año 2000, conformada por un equipo de profesionales en derecho, financieros, internacionalistas, contadores e ingenieros nacionales y extranjeros, cuya misión principal consiste en proveer servicios jurídicos integrales que respondan, de forma eficiente, a las principales necesidades empresariales.</p>

        <p>Para el efecto, contamos con un equipo que maneja una multiplicidad de idiomas, con el objeto de ofrecer nuestros servicios a empresarios e inversionistas de diferentes latitudes y culturas, brindando asesoría legal de excelente calidad en español, inglés, francés y turco.</p>

        <p>Comprometidos con el fomento del comercio internacional, el apoyo al emprendimiento, la protección de la propiedad intelectual y la libre competencia como motor del crecimiento económico, y conscientes de los retos planteados por un mercado global cada vez más competitivo y altamente influenciado por el constante desarrollo tecnológico, junto con nuestros asociados y aliados en otros países, y nuestra sucursal en Estambul, Turquía, ofrecemos a nuestros clientes un apoyo legal integral para la promoción y desarrollo de sus negocios en Colombia y en el exterior.</p>

        <div class="qs-lang-badges">
          <span class="qs-lang-badge"><i class="fa-solid fa-language"></i> Español</span>
          <span class="qs-lang-badge"><i class="fa-solid fa-language"></i> English</span>
          <span class="qs-lang-badge"><i class="fa-solid fa-language"></i> Français</span>
          <span class="qs-lang-badge"><i class="fa-solid fa-language"></i> Türkçe</span>
        </div>

        <div style="margin-top:36px;display:flex;gap:16px;flex-wrap:wrap">
          <a href="<?php echo esc_url(home_url('/nuestra-historia/')); ?>" class="btn btn-primary">
            <i class="fa-solid fa-book-open"></i>
            Conoce nuestra historia
          </a>
          <a href="<?php echo esc_url(home_url('/nuestro-equipo/')); ?>" class="btn btn-outline">
            <i class="fa-solid fa-users"></i>
            Nuestro equipo
          </a>
        </div>
      </div>

      <div class="qs-intro-image reveal">
        <img src="<?php echo esc_url($assets . '/Fotomontaje-grupal-NN_V2_1.png'); ?>" alt="Equipo Nieto &amp; Nieto Lawyers">
        <div class="qs-intro-image-frame"></div>
      </div>

    </div>
  </div>
</section>

<!-- ════ PILARES: VISIÓN / MISIÓN / VALORES ════ -->
<section class="qs-pillars">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="section-label">Identidad Corporativa</span>
      <h2 class="section-title">Nuestra <span>Identidad</span></h2>
    </div>

    <div class="qs-pillars-grid">

      <!-- Visión -->
      <div class="qs-pillar reveal">
        <img src="<?php echo esc_url($assets . '/icon1.png'); ?>" alt="Visión" class="qs-pillar-icon gold-filter">
        <h3 class="qs-pillar-title">Nuestra Visión</h3>
        <p class="qs-pillar-text">Brindar servicios jurídicos efectivos a compañías e individuos nacionales y extranjeros en todas las partes del mundo con la misma calidad.</p>
      </div>

      <!-- Misión -->
      <div class="qs-pillar reveal">
        <img src="<?php echo esc_url($assets . '/icono2.png'); ?>" alt="Misión" class="qs-pillar-icon gold-filter">
        <h3 class="qs-pillar-title">Nuestra Misión</h3>
        <p class="qs-pillar-text">Aumentar nuestras oficinas y aliados en diferentes partes del mundo, actualizar nuestros servicios de acuerdo al cambio en las necesidades globales y desarrollar soluciones orientadas al consumidor de cada región del planeta.</p>
      </div>

      <!-- Valores -->
      <div class="qs-pillar reveal">
        <img src="<?php echo esc_url($assets . '/g1428.png'); ?>" alt="Valores" class="qs-pillar-icon gold-filter">
        <h3 class="qs-pillar-title">Nuestros Valores</h3>
        <ul class="qs-values-list">
          <li>Transparencia</li>
          <li>Confidencialidad</li>
          <li>Honestidad</li>
          <li>Trabajo en equipo</li>
          <li>Eficiencia</li>
          <li>Soluciones con enfoque al cliente</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ════ STATS BAR ════ -->
<section style="background:var(--clr-dark3);padding:56px 0;border-top:1px solid rgba(255,255,255,.05)">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:2px">
      <?php
      $stats = [
        ['num'=>'23+', 'label'=>'Años de experiencia', 'icon'=>'fa-briefcase'],
        ['num'=>'14',  'label'=>'Áreas de práctica',   'icon'=>'fa-scale-balanced'],
        ['num'=>'4',   'label'=>'Idiomas de atención',  'icon'=>'fa-language'],
        ['num'=>'2',   'label'=>'Sedes internacionales','icon'=>'fa-location-dot'],
      ];
      foreach ($stats as $s): ?>
      <div class="reveal" style="text-align:center;padding:32px 16px;border-right:1px solid rgba(255,255,255,.06)">
        <i class="fa-solid <?php echo esc_attr($s['icon']); ?>" style="font-size:1.4rem;color:var(--clr-accent);margin-bottom:12px;display:block"></i>
        <div style="font-family:var(--ff-heading);font-size:2.2rem;font-weight:900;color:var(--clr-white);line-height:1"><?php echo esc_html($s['num']); ?></div>
        <div style="font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--clr-muted);margin-top:8px"><?php echo esc_html($s['label']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════ HISTORIA PREVIEW ════ -->
<section class="qs-historia-strip">
  <div class="container">
    <div class="qs-historia-inner">
      <div class="qs-historia-text reveal">
        <span class="section-label">Desde el año 2000</span>
        <h2 class="section-title" style="margin-bottom:20px">Nuestra <span>Historia</span></h2>
        <p>Nieto &amp; Nieto Lawyers surgió en un momento crucial para la economía colombiana. Fue fundada el 14 de diciembre de 2000, en respuesta a la crisis financiera generada por el sistema UPAC, que afectó a millones de colombianos. Desde entonces, hemos crecido hasta convertirnos en una firma de referencia con presencia internacional.</p>
        <a href="<?php echo esc_url(home_url('/nuestra-historia/')); ?>" class="btn btn-primary">
          <i class="fa-solid fa-arrow-right"></i>
          Ver historia completa
        </a>
      </div>
      <div class="reveal" style="flex-shrink:0">
        <img src="<?php echo esc_url($assets . '/foto-historia.jpg'); ?>"
             alt="Historia Nieto & Nieto Lawyers"
             style="width:320px;border-radius:var(--radius-lg);object-fit:cover;aspect-ratio:3/4;box-shadow:0 24px 60px rgba(0,0,0,.5)">
      </div>
    </div>
  </div>
</section>

<!-- ════ CTA ════ -->
<section style="padding:80px 0;background:var(--clr-dark);text-align:center">
  <div class="container reveal">
    <h2 class="section-title">¿Listo para hablar con <span>nuestro equipo</span>?</h2>
    <p style="color:var(--clr-muted);max-width:500px;margin:0 auto 36px">Agenda una consulta gratuita y descubre cómo podemos ayudarte.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
        Contáctanos
      </a>
      <a href="<?php echo esc_url(home_url('/nuestro-equipo/')); ?>" class="btn btn-outline">
        <i class="fa-solid fa-users"></i>
        Ver el equipo
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

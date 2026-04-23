<?php
/**
 * Template Name: Nuestra Historia
 */

get_header();
$assets = NL_ASSETS_URL;
?>

<!-- ════ PAGE BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url($assets . '/Fotomontaje-grupal-NN_V2_1.png'); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Quiénes Somos</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Nuestra Historia</span>
    </div>
    <h1 class="page-banner-title">Nuestra <span>Historia</span></h1>
  </div>
</div>

<!-- ════ INTRO ════ -->
<section class="historia-intro">
  <div class="container">
    <div class="historia-intro-inner reveal">
      <span class="section-label" style="display:block;margin-bottom:16px">Desde el 14 de diciembre de 2000</span>
      <p>Más de dos décadas de trayectoria construyendo soluciones jurídicas de excelencia para empresas e individuos en Colombia y el mundo.</p>
    </div>
  </div>
</section>

<!-- ════ TIMELINE ════ -->
<section class="timeline">
  <div class="timeline-line"></div>
  <div class="timeline-items">

    <!-- 2000 – Fundación -->
    <div class="timeline-item reveal">
      <div class="timeline-body">
        <span class="timeline-tag">Fundación</span>
        <h3 class="timeline-title">El nacimiento de la firma</h3>
        <p class="timeline-text">Nieto &amp; Nieto Lawyers surgió en un momento crucial para la economía colombiana. Fue fundada el <strong>14 de diciembre de 2000</strong>, en respuesta a la crisis financiera generada por el sistema UPAC, el cual afectó a millones de colombianos desde finales de los 90.</p>
        <p class="timeline-text" style="margin-top:12px">El fundador de la firma, <strong>Jaime Nieto Pérez</strong>, es un Doctor en Leyes y Jurisprudencia que buscaba brindar asesoría legal y soluciones jurídicas a aquellos que habían sido perjudicados por los desequilibrios del mercado financiero.</p>
      </div>
      <div class="timeline-center">
        <div class="timeline-dot"><i class="fa-solid fa-landmark"></i></div>
        <span class="timeline-year">2000</span>
      </div>
      <div class="timeline-visual">
        <figure>
          <img src="<?php echo esc_url($assets . '/foto-historia.jpg'); ?>" alt="Jaime Nieto Pérez">
          <figcaption>Fotografía de Jaime Nieto en la década de los 80's</figcaption>
        </figure>
      </div>
    </div>

    <!-- 2002 – Reconocimiento -->
    <div class="timeline-item reveal">
      <div class="timeline-body">
        <span class="timeline-tag">Reconocimiento</span>
        <h3 class="timeline-title">Código de Ética del Empresario</h3>
        <p class="timeline-text">Gracias a la pasión y disciplina para ayudar a las personas perjudicadas por la crisis financiera, en el año 2002, la <strong>Cámara de Comercio de Bogotá</strong> le otorgó a la firma la distinción <em>"Código de Ética del Empresario"</em>, con la cual se reconoce la excelencia del servicio y su aporte a la sociedad colombiana.</p>
        <div class="timeline-milestone">
          <i class="fa-solid fa-award"></i>
          <span>"Código de Ética del Empresario" – Cámara de Comercio de Bogotá</span>
        </div>
      </div>
      <div class="timeline-center">
        <div class="timeline-dot"><i class="fa-solid fa-award"></i></div>
        <span class="timeline-year">2002</span>
      </div>
      <div class="timeline-visual">
        <figure>
          <img src="<?php echo esc_url($assets . '/certificado-historia.jpg'); ?>" alt="Certificado Cámara de Comercio">
          <figcaption>Fotografía de Cámara y Comercio – banco de imágenes de Nieto &amp; Nieto Lawyers, 20 de mayo de 2000</figcaption>
        </figure>
      </div>
    </div>

    <!-- 2000-2019 – Crecimiento -->
    <div class="timeline-item reveal">
      <div class="timeline-body">
        <span class="timeline-tag">Crecimiento</span>
        <h3 class="timeline-title">Consolidación y expansión de servicios</h3>
        <p class="timeline-text">Desde entonces, la firma ha logrado fortalecer sus servicios en múltiples campos que comprenden la negociación de contratos comerciales internacionales, fusiones y adquisiciones, impuestos y comercio exterior, propiedad intelectual, regulatorio, sanitario, competencia y protección al consumidor, litigios y arbitraje nacional e internacional, entre otros.</p>
      </div>
      <div class="timeline-center">
        <div class="timeline-dot"><i class="fa-solid fa-chart-line"></i></div>
        <span class="timeline-year">2001–2018</span>
      </div>
      <div class="timeline-visual">
        <div style="background:var(--clr-dark3);border-radius:var(--radius-lg);padding:32px;border:1px solid rgba(255,255,255,.06)">
          <div style="font-size:.72rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--clr-accent);margin-bottom:20px">Áreas consolidadas</div>
          <?php
          $areas = [
            'fa-file-contract'   => 'Contratos internacionales',
            'fa-building-columns'=> 'Fusiones y adquisiciones',
            'fa-landmark'        => 'Impuestos y comercio exterior',
            'fa-lightbulb'       => 'Propiedad intelectual',
            'fa-shield-halved'   => 'Regulatorio y sanitario',
            'fa-gavel'           => 'Litigios y arbitraje',
          ];
          foreach ($areas as $icon => $label): ?>
          <div style="display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid rgba(255,255,255,.05)">
            <i class="fa-solid <?php echo esc_attr($icon); ?>" style="color:var(--clr-accent);width:16px;flex-shrink:0"></i>
            <span style="font-size:.88rem;color:var(--clr-text)"><?php echo esc_html($label); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- 2019 – Expansión a Europa -->
    <div class="timeline-item reveal">
      <div class="timeline-body">
        <span class="timeline-tag">Expansión Internacional</span>
        <h3 class="timeline-title">Presencia en Europa — Estambul, Turquía</h3>
        <p class="timeline-text">Desde <strong>2019</strong>, Nieto &amp; Nieto Lawyers cuenta con presencia en <strong>Estambul, Turquía</strong>, para responder a la demanda de inversionistas europeos interesados en el mercado latinoamericano, así como para brindar apoyo constante a los empresarios colombianos que apuntan a acceder al mercado europeo y asiático.</p>
        <div class="timeline-milestone">
          <i class="fa-solid fa-globe"></i>
          <span>Primera sede internacional — puente entre Colombia y Europa</span>
        </div>
      </div>
      <div class="timeline-center">
        <div class="timeline-dot"><i class="fa-solid fa-globe"></i></div>
        <span class="timeline-year">2019</span>
      </div>
      <div class="timeline-visual">
        <div style="background:var(--clr-dark3);border-radius:var(--radius-lg);padding:36px;border:1px solid rgba(255,255,255,.06);text-align:center">
          <div style="font-size:3.5rem;margin-bottom:12px">🇹🇷</div>
          <div style="font-family:var(--ff-heading);font-size:1.4rem;font-weight:700;color:var(--clr-white);margin-bottom:8px">Estambul</div>
          <div style="font-size:.78rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--clr-accent);margin-bottom:16px">Turquía · Europa</div>
          <p style="font-size:.88rem;color:var(--clr-muted);line-height:1.65">Sede estratégica para el corredor de inversión Colombia ↔ Europa ↔ Asia</p>
        </div>
      </div>
    </div>

    <!-- Presente -->
    <div class="timeline-item reveal">
      <div class="timeline-body">
        <span class="timeline-tag">Presente</span>
        <h3 class="timeline-title">Una firma boutique de referencia</h3>
        <p class="timeline-text">Hoy, Nieto &amp; Nieto Lawyers es una firma boutique reconocida por su excelencia, con un equipo multidisciplinario de abogados, ingenieros, contadores e internacionalistas que atienden en <strong>español, inglés, francés y turco</strong>.</p>
        <p class="timeline-text" style="margin-top:12px">Con más de <strong>23 años de trayectoria</strong>, 14 áreas de práctica y presencia en Colombia y Europa, continuamos creciendo para servir mejor a nuestros clientes alrededor del mundo.</p>
      </div>
      <div class="timeline-center">
        <div class="timeline-dot"><i class="fa-solid fa-star"></i></div>
        <span class="timeline-year">2024+</span>
      </div>
      <div class="timeline-visual">
        <img src="<?php echo esc_url($assets . '/Fotomontaje-grupal-NN_V3.png'); ?>" alt="Equipo Nieto &amp; Nieto Lawyers" style="border-radius:var(--radius-lg)">
      </div>
    </div>

  </div>
</section>

<!-- ════ SEDES ════ -->
<section class="historia-sedes">
  <div class="container">
    <div class="reveal" style="text-align:center;margin-bottom:56px">
      <span class="section-label">Presencia Global</span>
      <h2 class="section-title">Nuestras <span>Sedes</span></h2>
    </div>
    <div class="historia-sedes-grid">

      <div class="sede-card reveal">
        <div class="sede-year">2000</div>
        <div class="sede-flag">🇨🇴</div>
        <div class="sede-country">Sede Principal</div>
        <div class="sede-city">Bogotá, Colombia</div>
        <p class="sede-desc">Nuestra sede principal desde la fundación en el año 2000. Centro de operaciones para toda Latinoamérica, con atención en español, inglés y francés.</p>
      </div>

      <div class="sede-card reveal">
        <div class="sede-year">2019</div>
        <div class="sede-flag">🇹🇷</div>
        <div class="sede-country">Sede Internacional</div>
        <div class="sede-city">Estambul, Turquía</div>
        <p class="sede-desc">Abierta en 2019 para conectar inversores europeos y asiáticos con el mercado colombiano y latinoamericano. Atención en inglés, turco y español.</p>
      </div>

    </div>
  </div>
</section>

<!-- ════ CTA ════ -->
<section style="padding:80px 0;background:var(--clr-dark2);text-align:center;border-top:1px solid rgba(255,255,255,.05)">
  <div class="container reveal">
    <span class="section-label" style="display:block;margin-bottom:16px">Más de 23 años a tu servicio</span>
    <h2 class="section-title">Sé parte de nuestra <span>historia</span></h2>
    <p style="color:var(--clr-muted);max-width:480px;margin:0 auto 36px">Contáctanos y descubre cómo nuestra experiencia puede ayudarte a alcanzar tus metas legales y empresariales.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
        Contáctanos
      </a>
      <a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>" class="btn btn-outline">
        <i class="fa-solid fa-arrow-left"></i>
        Quiénes Somos
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

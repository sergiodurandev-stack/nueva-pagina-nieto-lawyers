<?php
/**
 * Template Name: Areas de Practica
 */

get_header();
$a = NL_ASSETS_URL;

$areas = [
  [
    'name'    => 'Corporativo',
    'slug'    => 'corporativo',
    'icon'    => 'fa-building',
    'img'     => $a . '/corporativo.jpg',
    'cat'     => 'empresarial',
    'featured'=> true,
    'desc'    => 'Asesoría integral en estructuración societaria, fusiones, adquisiciones, gobierno corporativo y contratos empresariales de alto impacto.',
  ],
  [
    'name'    => 'Inversión Extranjera y Negocios Internacionales',
    'slug'    => 'inversion-extranjera-y-negocios-internacionales',
    'icon'    => 'fa-globe',
    'img'     => $a . '/inversion-extranjera.jpg',
    'cat'     => 'internacional',
    'desc'    => 'Acompañamiento a inversionistas extranjeros y empresas colombianas en su expansión global.',
  ],
  [
    'name'    => 'Regulatorio y Sanitario',
    'slug'    => 'regulatorio-y-sanitario',
    'icon'    => 'fa-shield-halved',
    'img'     => $a . '/regulacion.jpg',
    'cat'     => 'regulatorio',
    'desc'    => 'Cumplimiento normativo en sectores altamente regulados: salud, alimentos, cosméticos y dispositivos médicos.',
  ],
  [
    'name'    => 'Impuestos, Aduanero y Comercio Exterior',
    'slug'    => 'impuestos-aduanero-y-comercio-exterior',
    'icon'    => 'fa-landmark',
    'img'     => $a . '/impuestos.png',
    'cat'     => 'fiscal',
    'desc'    => 'Planeación fiscal, tributos nacionales e internacionales, aduanas y comercio exterior.',
  ],
  [
    'name'    => 'Tecnología, Datos y Transformación Digital',
    'slug'    => 'tecnologia-datos-y-transformacion-digital',
    'icon'    => 'fa-microchip',
    'img'     => $a . '/tecnologia.jpg',
    'cat'     => 'tecnologia',
    'desc'    => 'Protección de datos, IA, transformación digital y peritaje informático.',
  ],
  [
    'name'    => 'Medicina y Ciencias de la Salud',
    'slug'    => 'medicina-y-ciencias-de-la-salud',
    'icon'    => 'fa-heart-pulse',
    'img'     => $a . '/medicina.jpg',
    'cat'     => 'regulatorio',
    'desc'    => 'Derecho médico, responsabilidad sanitaria y asesoría a instituciones de salud.',
  ],
  [
    'name'    => 'Competencia y Protección al Consumidor',
    'slug'    => 'competencia-y-proteccion-al-consumidor',
    'icon'    => 'fa-scale-balanced',
    'img'     => $a . '/Competencia.png',
    'cat'     => 'empresarial',
    'desc'    => 'Defensa de la libre competencia, prácticas restrictivas y protección al consumidor.',
  ],
  [
    'name'    => 'Compliance',
    'slug'    => 'compliance',
    'icon'    => 'fa-check-double',
    'img'     => $a . '/compliance.jpg',
    'cat'     => 'empresarial',
    'desc'    => 'Programas de cumplimiento normativo, SAGRILAFT, gestión de riesgos y ética empresarial.',
  ],
  [
    'name'    => 'Litigios y Arbitraje',
    'slug'    => 'litigios-y-arbitraje',
    'icon'    => 'fa-gavel',
    'img'     => $a . '/litigios.jpg',
    'cat'     => 'litigios',
    'desc'    => 'Representación en procesos judiciales, arbitraje nacional e internacional y solución de controversias.',
  ],
  [
    'name'    => 'Contratación Estatal',
    'slug'    => 'contratacion-estatal',
    'icon'    => 'fa-file-signature',
    'img'     => $a . '/contratacion.jpg',
    'cat'     => 'empresarial',
    'desc'    => 'Procesos de licitación, contratos con el Estado y solución de controversias contractuales públicas.',
  ],
  [
    'name'    => 'Propiedad Intelectual',
    'slug'    => 'propiedad-intelectual',
    'icon'    => 'fa-lightbulb',
    'img'     => $a . '/propiedad.jpg',
    'cat'     => 'tecnologia',
    'desc'    => 'Registro y defensa de marcas, patentes, derechos de autor y activos intangibles.',
  ],
  [
    'name'    => 'Inmobiliario',
    'slug'    => 'inmobiliario',
    'icon'    => 'fa-house',
    'img'     => $a . '/inmobiliaria.jpg',
    'cat'     => 'empresarial',
    'desc'    => 'Asesoría en compraventa, arrendamiento, propiedad horizontal y proyectos de construcción.',
  ],
  [
    'name'    => 'Pro-Bono',
    'slug'    => 'pro-bono',
    'icon'    => 'fa-hands-holding-heart',
    'img'     => $a . '/bg-home.jpg',
    'cat'     => 'social',
    'desc'    => 'Servicio legal gratuito a comunidades vulnerables y organizaciones sin fines de lucro.',
  ],
  [
    'name'    => 'Contabilidad y Finanzas Corporativas',
    'slug'    => 'contabilidad-y-finanzas-corporativas',
    'icon'    => 'fa-chart-line',
    'img'     => $a . '/corporativo.jpg',
    'cat'     => 'fiscal',
    'desc'    => 'Gestión contable, estados financieros, NIIF, nómina y planeación financiera corporativa.',
  ],
];

$cats = [
  'todos'         => 'Todas',
  'empresarial'   => 'Empresarial',
  'internacional' => 'Internacional',
  'fiscal'        => 'Fiscal & Contable',
  'regulatorio'   => 'Regulatorio',
  'tecnologia'    => 'Tecnología & PI',
  'litigios'      => 'Litigios',
  'social'        => 'Pro-Bono',
];
?>

<!-- ════ BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url($a . '/litigios.jpg'); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Áreas de Práctica</span>
    </div>
    <h1 class="page-banner-title">Áreas de <span>Práctica</span></h1>
  </div>
</div>

<!-- ════ INTRO ════ -->
<section style="padding:72px 0 0;background:var(--clr-dark)">
  <div class="container reveal" style="text-align:center">
    <span class="section-label" style="display:block;margin-bottom:14px">14 Especialidades</span>
    <h2 class="section-title" style="margin-bottom:20px">Soluciones Legales <span>Integrales</span></h2>
    <p style="font-size:1.05rem;color:var(--clr-text);max-width:640px;margin:0 auto">
      Ofrecemos asesoría especializada en las áreas del derecho más relevantes para el mundo empresarial contemporáneo, con un enfoque práctico y orientado a resultados.
    </p>
  </div>
</section>

<!-- ════ LISTING ════ -->
<section class="areas-listing">
  <div class="container">

    <!-- Filter bar -->
    <div class="areas-filter-bar reveal">
      <?php foreach ($cats as $key => $label) : ?>
      <button class="filter-btn <?php echo $key === 'todos' ? 'active' : ''; ?>"
              data-filter="<?php echo esc_attr($key); ?>">
        <?php echo esc_html($label); ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div class="areas-listing-grid" id="areasGrid">
      <?php foreach ($areas as $i => $area) :
        $featured = !empty($area['featured']);
        $base_url  = home_url('/areas-de-practica/' . $area['slug'] . '/');
      ?>
      <a href="<?php echo esc_url($base_url); ?>"
         class="area-listing-card <?php echo $featured ? 'featured' : ''; ?> reveal"
         data-cat="<?php echo esc_attr($area['cat']); ?>">

        <div class="area-listing-thumb">
          <img src="<?php echo esc_url($area['img']); ?>"
               alt="<?php echo esc_attr($area['name']); ?>" loading="lazy">
          <div class="area-listing-thumb-overlay"></div>
          <div class="area-listing-icon">
            <i class="fa-solid <?php echo esc_attr($area['icon']); ?>"></i>
          </div>
        </div>

        <div class="area-listing-body">
          <h3 class="area-listing-name"><?php echo esc_html($area['name']); ?></h3>
          <?php if ($featured) : ?>
          <p style="font-size:.9rem;color:var(--clr-muted);line-height:1.7;margin-bottom:0">
            <?php echo esc_html($area['desc']); ?>
          </p>
          <?php endif; ?>
          <div class="area-listing-cta">
            <span class="area-listing-cta-text">
              Ver más <i class="fa-solid fa-arrow-right"></i>
            </span>
            <span class="area-listing-num"><?php printf('%02d', $i + 1); ?></span>
          </div>
        </div>

      </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ════ CTA ════ -->
<section style="padding:80px 0;background:var(--clr-dark2);text-align:center;border-top:1px solid rgba(255,255,255,.05)">
  <div class="container reveal">
    <h2 class="section-title">¿No encuentras tu área?</h2>
    <p style="color:var(--clr-muted);max-width:480px;margin:0 auto 36px">
      Contáctanos y nuestro equipo evaluará tu caso para encontrar la solución jurídica adecuada.
    </p>
    <a href="<?php echo esc_url(home_url('/#contacto')); ?>" class="btn btn-primary">
      <i class="fa-solid fa-envelope"></i>
      Consulta Gratuita
    </a>
  </div>
</section>

<script>
(function(){
  var btns  = document.querySelectorAll('.filter-btn');
  var cards = document.querySelectorAll('.area-listing-card');

  btns.forEach(function(btn){
    btn.addEventListener('click', function(){
      var filter = this.dataset.filter;

      btns.forEach(function(b){ b.classList.remove('active'); });
      this.classList.add('active');

      cards.forEach(function(card){
        var match = filter === 'todos' || card.dataset.cat === filter;
        card.style.display = match ? '' : 'none';
      });

      /* re-trigger featured span on filter */
      var grid  = document.getElementById('areasGrid');
      var first = grid.querySelector('.area-listing-card:not([style*="none"])');
      cards.forEach(function(c){ c.classList.remove('featured'); });
      if(first && filter === 'todos') first.classList.add('featured');
    });
  });
})();
</script>

<?php get_footer(); ?>

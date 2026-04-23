<?php
/**
 * Single template for CPT: abogados
 */

$slug   = get_queried_object()->post_name ?? '';
$assets = NL_ASSETS_URL;

$lawyers = [
  'jaime-nieto' => [
    'name'    => 'Jaime Nieto Pérez',
    'role'    => 'Socio Fundador & Gerente',
    'email'   => 'jaime.nieto@nietolawyers.com',
    'photo'   => $assets . '/Jaime-Nieto.png',
    'montaje' => $assets . '/integrante.jpg',
    'langs'   => ['Español', 'Inglés'],
    'years'   => '40+',
    'areas'   => [
      ['nombre' => 'Corporativo',          'icon' => 'fa-building',       'slug' => 'corporativo'],
      ['nombre' => 'Contratación Estatal', 'icon' => 'fa-file-contract',  'slug' => 'contratacion-estatal'],
      ['nombre' => 'Inmobiliario',         'icon' => 'fa-house-chimney',  'slug' => 'inmobiliario'],
    ],
    'bio'     => 'Jaime Nieto Pérez es socio fundador de Nieto & Nieto Lawyers y una de las figuras que mejor representa la solidez de la firma. Con más de 40 años de trayectoria profesional, ha desarrollado una práctica de alto nivel en derecho corporativo, inmobiliario y contratación, acompañando a empresas, inversionistas y clientes estratégicos en decisiones de gran impacto.',
    'trayect' => '<p>A lo largo de su carrera, Jaime ha asesorado compañías nacionales e internacionales de sectores como el industrial, manufacturero, inmobiliario, salud y telecomunicaciones, participando en asuntos corporativos, contractuales e inmobiliarios de alto impacto.</p><p>Su experiencia comprende tanto la estructuración y acompañamiento de negocios como la gestión de controversias y la protección de intereses patrimoniales. Es reconocido por su capacidad de análisis, su comprensión del entorno regulatorio colombiano y su habilidad para articular soluciones jurídicas complejas con claridad y efectividad.</p>',
  ],
  'jaime-andres-nieto' => [
    'name'    => 'Jaime Andrés Nieto',
    'role'    => 'Socio',
    'email'   => 'jaimeandres.nieto@nietolawyers.com',
    'photo'   => $assets . '/Jaime-Andres-Nieto.png',
    'montaje' => $assets . '/i2.jpg',
    'langs'   => ['Español', 'Inglés', 'Francés'],
    'years'   => '15+',
    'areas'   => [
      ['nombre' => 'Inversión Extranjera',   'icon' => 'fa-globe',      'slug' => 'inversion-extranjera-y-negocios-internacionales'],
      ['nombre' => 'Propiedad Intelectual',  'icon' => 'fa-lightbulb',  'slug' => 'propiedad-intelectual'],
      ['nombre' => 'Corporativo',            'icon' => 'fa-building',   'slug' => 'corporativo'],
      ['nombre' => 'Tecnología y Datos',     'icon' => 'fa-microchip',  'slug' => 'tecnologia-datos-y-transformacion-digital'],
    ],
    'bio'     => 'Jaime Andrés Nieto es abogado con una sólida formación en derecho contractual y derecho privado, egresado de la Universidad del Rosario, donde fue becario de la Facultad de Jurisprudencia. Con una especialización en Derecho Contractual y una maestría en Derecho Privado, ha logrado posicionarse como un referente en la asesoría de negociaciones contractuales de alto nivel.',
    'trayect' => '<p>A lo largo de su carrera ha brindado asesoría integral en la negociación e implementación de vehículos contractuales para negocios nacionales e internacionales, incluyendo Letters of Intent, MOUs, acuerdos de distribución y joint ventures.</p><p>Cuenta con amplia experiencia en derecho de la propiedad intelectual, especialmente en registro y protección de marcas a nivel nacional e internacional, derechos de autor y contratos de licencia y transferencia de tecnología.</p>',
    'quote'   => 'Combina visiÃ³n internacional, rigor contractual y comprensiÃ³n del negocio para estructurar relaciones de largo plazo con seguridad jurÃ­dica.',
    'highlights' => [
      [
        'title' => 'NegociaciÃ³n de alto valor',
        'text'  => 'AcompaÃ±a operaciones complejas donde la estrategia contractual debe equilibrar crecimiento, protecciÃ³n patrimonial y claridad entre las partes.',
      ],
      [
        'title' => 'Puente entre Colombia y mercados globales',
        'text'  => 'Su experiencia en negocios internacionales le permite estructurar relaciones transfronterizas con una mirada prÃ¡ctica sobre riesgos, jurisdicciones y ejecuciÃ³n.',
      ],
      [
        'title' => 'Activos intangibles y tecnologÃ­a',
        'text'  => 'Integra propiedad intelectual, licenciamiento y transferencia de tecnologÃ­a dentro de estrategias comerciales sostenibles y bien documentadas.',
      ],
    ],
  ],
  'estefani-nieto' => [
    'name'    => 'Estefani Nieto',
    'role'    => 'Socia',
    'email'   => 'estefani.nieto@nietolawyers.com',
    'photo'   => $assets . '/Estefani-Nieto.png',
    'montaje' => $assets . '/i3.jpg',
    'langs'   => ['Español', 'Inglés', 'Francés', 'Turco'],
    'years'   => '12+',
    'areas'   => [
      ['nombre' => 'Regulatorio y Sanitario', 'icon' => 'fa-shield-halved', 'slug' => 'regulatorio-y-sanitario'],
      ['nombre' => 'Impuestos y Aduanas',     'icon' => 'fa-landmark',      'slug' => 'impuestos-aduanero-y-comercio-exterior'],
      ['nombre' => 'Tecnología y Datos',      'icon' => 'fa-microchip',     'slug' => 'tecnologia-datos-y-transformacion-digital'],
      ['nombre' => 'Inversión Extranjera',    'icon' => 'fa-globe',         'slug' => 'inversion-extranjera-y-negocios-internacionales'],
    ],
    'bio'     => 'Estefani Nieto es socia de Nieto Lawyers con una práctica enfocada en asuntos internacionales, sectores altamente regulados y transformación empresarial. Su perfil integra visión jurídica, criterio estratégico y comprensión del negocio, acompañando a empresas e inversionistas en decisiones complejas relacionadas con Colombia, Latinoamérica y mercados internacionales.',
    'trayect' => '<p>Ha centrado su trayectoria en la asesoría a inversionistas extranjeros y compañías internacionales, acompañando procesos de entrada a mercado, expansión comercial y estructuración jurídica de operaciones.</p><p>En el ámbito regulatorio y sanitario, cuenta con experiencia en el sector salud, alimentos, cosméticos y dispositivos médicos, asesorando en registro de productos y cumplimiento normativo ante el INVIMA.</p>',
    'quote'   => 'Integra perspectiva internacional, criterio regulatorio y comprension del negocio para acompanar decisiones sensibles de expansion, cumplimiento y transformacion.',
    'highlights' => [
      [
        'title' => 'Expansion internacional con criterio local',
        'text'  => 'Acompana a inversionistas y companias en su entrada a mercado, estructuracion operativa y toma de decisiones en contextos multiculturales y multijurisdiccionales.',
      ],
      [
        'title' => 'Sectores altamente regulados',
        'text'  => 'Su experiencia en salud, alimentos, cosmeticos y dispositivos medicos le permite traducir exigencias regulatorias en rutas de accion concretas y viables.',
      ],
      [
        'title' => 'Transformacion y cumplimiento',
        'text'  => 'Articula estrategia empresarial, tecnologia y cumplimiento para que las organizaciones crezcan con mayor orden, trazabilidad y seguridad juridica.',
      ],
    ],
  ],
  'doris-cecilia-criado' => [
    'name'    => 'Doris Cecilia Criado',
    'role'    => 'Abogada Senior',
    'email'   => 'contabilidad@nietolawyers.com',
    'photo'   => $assets . '/Doris-Cecilia-Criado.png',
    'montaje' => $assets . '/i4.jpg',
    'langs'   => ['Español'],
    'years'   => '35+',
    'areas'   => [
      ['nombre' => 'Contabilidad y Finanzas', 'icon' => 'fa-chart-line',      'slug' => 'contabilidad-y-finanzas-corporativas'],
      ['nombre' => 'Impuestos y Aduanas',     'icon' => 'fa-landmark',        'slug' => 'impuestos-aduanero-y-comercio-exterior'],
      ['nombre' => 'Compliance',              'icon' => 'fa-clipboard-check', 'slug' => 'compliance'],
    ],
    'bio'     => 'Doris Criado es contadora pública con más de 35 años de experiencia especializada en gestión contable integral y optimización fiscal para empresas nacionales e internacionales. Con su extenso conocimiento en contabilidad corporativa, tributación y nómina, es una aliada clave para empresas que buscan maximizar su eficiencia financiera.',
    'trayect' => '<p>Egresada de la Universidad Externado de Colombia, ha asesorado a empresas del sector privado, PYMES y entidades públicas en la elaboración de estados financieros, declaraciones tributarias y el ciclo contable completo.</p><p>Su experiencia incluye la implementación de NIIF y sistemas contables como SIIGO, HELISA y OPTIMATIC, así como la gestión de tesorería, nómina y facturación.</p>',
    'quote'   => 'Aporta orden financiero, criterio tributario y disciplina operativa para que las empresas tomen decisiones con mayor control y claridad.',
    'highlights' => [
      [
        'title' => 'Control contable integral',
        'text'  => 'Acompana a empresas en el manejo del ciclo contable completo, con foco en consistencia de informacion, cumplimiento y trazabilidad.',
      ],
      [
        'title' => 'Vision tributaria practica',
        'text'  => 'Convierte obligaciones fiscales y reportes periodicos en procesos claros, sostenibles y alineados con la realidad operativa de cada cliente.',
      ],
      [
        'title' => 'Operacion y soporte financiero',
        'text'  => 'Integra contabilidad, tesoreria, nomina y herramientas de gestion para fortalecer la base administrativa y financiera de la organizacion.',
      ],
    ],
  ],
  'katty-escobar-gomez' => [
    'name'    => 'Katty Escobar Gómez',
    'role'    => 'Abogada',
    'email'   => 'katty.escobar@nietolawyers.com',
    'photo'   => $assets . '/Kathy-Escobar.png',
    'montaje' => $assets . '/i5.jpg',
    'langs'   => ['Español', 'Inglés'],
    'years'   => '10+',
    'areas'   => [
      ['nombre' => 'Compliance',   'icon' => 'fa-clipboard-check', 'slug' => 'compliance'],
      ['nombre' => 'Corporativo',  'icon' => 'fa-building',        'slug' => 'corporativo'],
      ['nombre' => 'Impuestos',    'icon' => 'fa-landmark',        'slug' => 'impuestos-aduanero-y-comercio-exterior'],
    ],
    'bio'     => 'Katty es abogada especializada en derecho internacional, relaciones comerciales y derecho migratorio. Su enfoque principal es asistir a empresas e individuos que buscan expandir sus operaciones o establecer vínculos entre Australia y Latinoamérica, brindando asesoría en inversión extranjera, expansión de negocios y resolución de disputas.',
    'trayect' => '<p>Con sólida experiencia en derecho internacional y comercial, asesora a empresas australianas en su expansión hacia Latinoamérica, brindando apoyo en negociación de contratos, cumplimiento normativo y resolución de disputas en sectores como tecnología, energía y manufactura.</p><p>También ofrece servicios de asesoría migratoria para individuos y familias en procesos de visas, residencias y ciudadanías.</p>',
  ],
  'mert-ocal' => [
    'name'    => 'Mert Ocal',
    'role'    => 'Of Counsel',
    'email'   => 'mert.ocaln@nietolawyers.com',
    'photo'   => $assets . '/Mert-Ocal.png',
    'montaje' => $assets . '/i7.jpg',
    'langs'   => ['Inglés', 'Turco'],
    'years'   => '10+',
    'areas'   => [
      ['nombre' => 'Inversión Extranjera',    'icon' => 'fa-globe',      'slug' => 'inversion-extranjera-y-negocios-internacionales'],
      ['nombre' => 'Contabilidad y Finanzas', 'icon' => 'fa-chart-line', 'slug' => 'contabilidad-y-finanzas-corporativas'],
    ],
    'bio'     => 'Mert es profesional en Ingeniería graduado de la Universidad de Koç con una Maestría en Finanzas de la Universidad de Bahçeşehir en Estambul. Con más de una década de experiencia en los sectores agrícola, industrial y manufacturero, ha liderado proyectos estratégicos que permiten a sus clientes maximizar rentabilidad y eficiencia operativa.',
    'trayect' => '<p>Aporta una perspectiva única gracias a su experiencia combinada en ingeniería, finanzas y derecho de negocios internacionales. Su conocimiento del mercado turco y latinoamericano lo convierte en un puente estratégico para empresas que buscan operar entre estas regiones.</p><p>Ha liderado proyectos de estructuración financiera, análisis de viabilidad y due diligence en sectores agroindustriales, manufactura y tecnología.</p>',
  ],
  'anibal-ricardo-coley' => [
    'name'    => 'Aníbal Ricardo Coley',
    'role'    => 'Abogado',
    'email'   => 'Anibalr.coley@nietolawyers.com',
    'photo'   => $assets . '/Anibal-Coley-LAWYER-3-1.png',
    'montaje' => $assets . '/Anibal-Coley-1-1.png',
    'langs'   => ['Español'],
    'years'   => '8+',
    'areas'   => [
      ['nombre' => 'Contabilidad y Finanzas', 'icon' => 'fa-chart-line', 'slug' => 'contabilidad-y-finanzas-corporativas'],
      ['nombre' => 'Impuestos y Aduanas',     'icon' => 'fa-landmark',   'slug' => 'impuestos-aduanero-y-comercio-exterior'],
    ],
    'bio'     => 'Aníbal es contador público graduado de la Universidad del Atlántico, con especialización en Gerencia Financiera de la Universidad Libre de Colombia. Ha desarrollado competencias clave en gestión contable y financiera, planeación fiscal estratégica y preparación de estados financieros e informes de gestión.',
    'trayect' => '<p>Combina un conocimiento técnico profundo con una perspectiva práctica, abordando retos contables y fiscales con soluciones efectivas y personalizadas para cada cliente.</p><p>Aporta al equipo su dominio en la implementación de normativas contables nacionales e internacionales, así como en la presentación de obligaciones tributarias ante la DIAN y otras entidades de control.</p>',
  ],
];

$lawyer = $lawyers[ $slug ] ?? null;

if ( ! $lawyer ) {
  wp_redirect( home_url( '/nuestro-equipo/' ) );
  exit;
}

get_header();
$first = explode( ' ', $lawyer['name'] )[0];
?>

<!-- ════ BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $assets . '/banner-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <a href="<?php echo esc_url( home_url( '/nuestro-equipo/' ) ); ?>">Nuestro Equipo</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php echo esc_html( $lawyer['name'] ); ?></span>
    </div>
    <h1 class="page-banner-title"><?php echo esc_html( $lawyer['name'] ); ?></h1>
    <p style="color:var(--clr-accent);font-family:var(--ff-head);font-size:.85rem;letter-spacing:.15em;text-transform:uppercase;margin-top:10px">
      <?php echo esc_html( $lawyer['role'] ); ?>
    </p>
  </div>
</div>

<!-- ════ PERFIL ════ -->
<section class="abg-profile">
  <div class="container">
    <div class="abg-profile-grid reveal">

      <!-- Columna izquierda: foto + datos -->
      <div class="abg-profile-aside">

        <div class="abg-photo-frame">
          <img src="<?php echo esc_url( $lawyer['photo'] ); ?>"
               alt="<?php echo esc_attr( $lawyer['name'] ); ?>"
               loading="eager">
          <div class="abg-photo-badge">
            <span class="abg-photo-badge-num"><?php echo esc_html( $lawyer['years'] ); ?></span>
            <span class="abg-photo-badge-txt">años de<br>experiencia</span>
          </div>
        </div>

        <div class="abg-aside-card">

          <div class="abg-aside-block">
            <p class="abg-aside-label"><i class="fa-solid fa-envelope"></i> Contacto</p>
            <a href="mailto:<?php echo esc_attr( $lawyer['email'] ); ?>" class="abg-aside-email">
              <?php echo esc_html( $lawyer['email'] ); ?>
            </a>
          </div>

          <div class="abg-aside-divider"></div>

          <div class="abg-aside-block">
            <p class="abg-aside-label"><i class="fa-solid fa-language"></i> Idiomas</p>
            <div class="abg-aside-tags">
              <?php foreach ( $lawyer['langs'] as $l ) : ?>
                <span class="abg-tag gold"><?php echo esc_html( $l ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="abg-aside-divider"></div>

          <div class="abg-aside-block">
            <p class="abg-aside-label"><i class="fa-solid fa-scale-balanced"></i> Áreas</p>
            <div class="abg-aside-tags">
              <?php foreach ( $lawyer['areas'] as $a ) : ?>
                <a href="<?php echo esc_url( home_url( '/areas-de-practica/' . $a['slug'] . '/' ) ); ?>"
                   class="abg-tag muted"><?php echo esc_html( $a['nombre'] ); ?></a>
              <?php endforeach; ?>
            </div>
          </div>

          <a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:28px">
            <i class="fa-solid fa-calendar-check"></i> Consulta Gratuita
          </a>

        </div>
      </div>

      <!-- Columna derecha: bio + trayectoria -->
      <div class="abg-profile-main">

        <div class="abg-profile-bio">
          <span class="section-label">Perfil Profesional</span>
          <h2 class="section-title" style="margin:12px 0 24px"><?php echo esc_html( $lawyer['name'] ); ?></h2>
          <p class="abg-bio-lead"><?php echo esc_html( $lawyer['bio'] ); ?></p>
        </div>

        <div class="abg-profile-sep"></div>

        <div class="abg-profile-accordions">
          <?php if ( ! empty( $lawyer['quote'] ) || ! empty( $lawyer['highlights'] ) ) : ?>
            <details class="abg-accordion">
              <summary class="abg-accordion-summary">
                <div>
                  <span class="section-label">Enfoque Estratégico</span>
                  <h3 class="abg-trayect-heading">Cómo acompaña cada operación</h3>
                </div>
                <span class="abg-accordion-icon" aria-hidden="true"></span>
              </summary>
              <div class="abg-accordion-panel">
                <?php if ( ! empty( $lawyer['quote'] ) ) : ?>
                  <blockquote class="abg-focus-quote">
                    <?php echo esc_html( $lawyer['quote'] ); ?>
                  </blockquote>
                <?php endif; ?>

                <?php if ( ! empty( $lawyer['highlights'] ) ) : ?>
                  <div class="abg-focus-grid">
                    <?php foreach ( $lawyer['highlights'] as $item ) : ?>
                      <article class="abg-focus-card">
                        <h4 class="abg-focus-title"><?php echo esc_html( $item['title'] ); ?></h4>
                        <p class="abg-focus-text"><?php echo esc_html( $item['text'] ); ?></p>
                      </article>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </details>
          <?php endif; ?>

          <details class="abg-accordion">
            <summary class="abg-accordion-summary">
              <div>
                <span class="section-label">Experiencia</span>
                <h3 class="abg-trayect-heading">Trayectoria Profesional</h3>
              </div>
              <span class="abg-accordion-icon" aria-hidden="true"></span>
            </summary>
            <div class="abg-accordion-panel">
              <div class="abg-trayect-card">
                <div class="abg-trayect-meta-top">
                  <span class="abg-trayect-kicker"><?php echo esc_html( $lawyer['role'] ); ?></span>
                  <span class="abg-trayect-years"><?php echo esc_html( $lawyer['years'] ); ?> años de experiencia</span>
                </div>

                <p class="abg-trayect-meta-text">Experiencia enfocada en asuntos estratégicos, negociación y acompañamiento legal de alto impacto.</p>

                <div class="abg-trayect-body">
                  <?php echo wp_kses_post( $lawyer['trayect'] ); ?>
                </div>
              </div>
            </div>
          </details>
        </div>

        <div class="abg-profile-sep"></div>

        <!-- Áreas como cards -->
        <div class="abg-profile-areas">
          <span class="section-label">Especialización</span>
          <h3 class="abg-trayect-heading">Áreas de Práctica</h3>
          <div class="abg-areas-row">
            <?php foreach ( $lawyer['areas'] as $a ) : ?>
              <a href="<?php echo esc_url( home_url( '/areas-de-practica/' . $a['slug'] . '/' ) ); ?>"
                 class="abg-area-pill">
                <i class="fa-solid <?php echo esc_attr( $a['icon'] ); ?>"></i>
                <?php echo esc_html( $a['nombre'] ); ?>
                <i class="fa-solid fa-arrow-right abg-pill-arrow"></i>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ════ CTA ════ -->
<section class="abg-cta-strip">
  <div class="container">
    <div class="abg-cta-strip-inner reveal">
      <div class="abg-cta-copy">
        <span class="abg-cta-kicker">Consulta personalizada</span>
        <h2 class="section-title abg-cta-title">
          ¿Necesitas asesoría de <span><?php echo esc_html( $first ); ?></span>?
        </h2>
        <p style="color:var(--clr-muted)">Agenda una consulta gratuita y recibe orientación legal personalizada.</p>
      </div>
      <div class="abg-cta-strip-btns">
        <a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" class="btn btn-primary abg-cta-btn-primary">
          <i class="fa-solid fa-envelope"></i> Contáctanos
        </a>
        <a href="<?php echo esc_url( home_url( '/nuestro-equipo/' ) ); ?>" class="btn btn-outline abg-cta-btn-secondary">
          <i class="fa-solid fa-users"></i> Ver Equipo
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

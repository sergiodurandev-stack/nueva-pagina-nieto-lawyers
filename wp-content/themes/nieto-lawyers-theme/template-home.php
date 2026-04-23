<?php
/**
 * Template Name: Home
 */

get_header();

$assets = NL_ASSETS_URL;

/* ACF values (with fallbacks) */
$hero_headline    = get_field('hero_headline') ?: 'COMPROMETIDOS';
$hero_subheadline = get_field('hero_subheadline') ?: 'CON LA PROTECCIÓN DE SUS INTERESES';
$hero_bg          = get_field('hero_background') ?: $assets . '/banner-home.jpg';
$hero_cta_text    = get_field('hero_cta_text') ?: 'Contáctanos';
$hero_cta_url     = get_field('hero_cta_url') ?: '#contacto';

$about_title = get_field('about_title') ?: '¿Quiénes somos?';
$about_text  = get_field('about_text') ?: '<p>Con más de 23 años de experiencia en el mercado colombiano y con una sede en Europa (Estambul), somos una firma boutique enfocada en brindar servicios de alta calidad. Apoyados en herramientas tecnológicas de última generación, ofrecemos a nuestros clientes soluciones legales eficientes desde las perspectivas corporativa, financiera y comercial.</p><p><strong>Contáctanos hoy mismo y asegura el fortalecimiento y crecimiento de tu empresa.</strong></p>';
$about_image = get_field('about_image') ?: $assets . '/corporativo.jpg';
$about_stats = get_field('about_stats');

$areas_title = get_field('areas_title') ?: 'Nuestras Áreas de Práctica';
$practice_areas = get_field('practice_areas');

$team_title    = get_field('team_title') ?: 'Nuestro Equipo';
$team_members  = get_field('team_members');
$team_page_url = home_url('/nuestro-equipo/');

$contact_title    = get_field('contact_title') ?: 'Comunícate con Nosotros';
$contact_subtitle = get_field('contact_subtitle') ?: 'Estamos aquí para ayudarte';
$contact_phone    = get_field('contact_phone') ?: '';
$contact_email    = get_field('contact_email') ?: get_option('admin_email');
$contact_address  = get_field('contact_address') ?: 'Bogotá, Colombia';

/* Default practice areas */
if ( ! $practice_areas ) {
  $ap = home_url('/areas-de-practica/');
  $practice_areas = [
    ['name'=>'Tecnología, datos y transformación digital',    'image'=>$assets.'/tecnologia.jpg',      'icon'=>'fa-microchip',      'url'=>$ap.'tecnologia-datos-y-transformacion-digital/'],
    ['name'=>'Inversión extranjera y negocios internacionales','image'=>$assets.'/inversion-extranjera.jpg','icon'=>'fa-globe',       'url'=>$ap.'inversion-extranjera-y-negocios-internacionales/'],
    ['name'=>'Regulatorio y Sanitario',                       'image'=>$assets.'/regulacion.jpg',      'icon'=>'fa-shield-halved',  'url'=>$ap.'regulatorio-y-sanitario/'],
    ['name'=>'Corporativo',                                   'image'=>$assets.'/corporativo.jpg',     'icon'=>'fa-building',       'url'=>$ap.'corporativo/'],
    ['name'=>'Impuestos, aduanero y comercio exterior',       'image'=>$assets.'/impuestos.png',       'icon'=>'fa-landmark',       'url'=>$ap.'impuestos-aduanero-y-comercio-exterior/'],
    ['name'=>'Medicina y ciencias de la salud',               'image'=>$assets.'/medicina.jpg',        'icon'=>'fa-heart-pulse',    'url'=>$ap.'medicina-y-ciencias-de-la-salud/'],
    ['name'=>'Competencia y protección al consumidor',        'image'=>$assets.'/Competencia.png',     'icon'=>'fa-scale-balanced', 'url'=>$ap.'competencia-y-proteccion-al-consumidor/'],
    ['name'=>'Compliance',                                    'image'=>$assets.'/compliance.jpg',      'icon'=>'fa-check-double',   'url'=>$ap.'compliance/'],
    ['name'=>'Litigios y arbitraje',                          'image'=>$assets.'/litigios.jpg',        'icon'=>'fa-gavel',          'url'=>$ap.'litigios-y-arbitraje/'],
    ['name'=>'Contratación estatal',                          'image'=>$assets.'/contratacion.jpg',    'icon'=>'fa-file-signature', 'url'=>$ap.'contratacion-estatal/'],
    ['name'=>'Propiedad intelectual',                         'image'=>$assets.'/propiedad.jpg',       'icon'=>'fa-lightbulb',      'url'=>$ap.'propiedad-intelectual/'],
    ['name'=>'Inmobiliario',                                  'image'=>$assets.'/inmobiliaria.jpg',    'icon'=>'fa-house',          'url'=>$ap.'inmobiliario/'],
    ['name'=>'Pro-Bono',                                      'image'=>$assets.'/banner-home.jpg',     'icon'=>'fa-hands-helping',  'url'=>$ap.'pro-bono/'],
    ['name'=>'Contabilidad y finanzas corporativas',          'image'=>$assets.'/corporativo.jpg',     'icon'=>'fa-chart-line',     'url'=>$ap.'contabilidad-y-finanzas-corporativas/'],
  ];
}

/* Default team members */
if ( ! $team_members ) {
  $ab = home_url('/abogados/');
  $team_members = [
    ['name'=>'Jaime Nieto',          'role'=>'Socio Fundador',        'photo'=>$assets.'/integrante.jpg',       'url'=>$ab.'jaime-nieto/'],
    ['name'=>'Jaime Andrés Nieto',   'role'=>'Socio',                 'photo'=>$assets.'/i2.jpg',               'url'=>$ab.'jaime-andres-nieto/'],
    ['name'=>'Doris Cecilia Criado', 'role'=>'Socia',                 'photo'=>$assets.'/i3.jpg',               'url'=>$ab.'doris-cecilia-criado/'],
    ['name'=>'Estefani Nieto',       'role'=>'Abogada',               'photo'=>$assets.'/i4.jpg',               'url'=>$ab.'estefani-nieto/'],
    ['name'=>'Mert Ocal',            'role'=>'Abogado Internacional', 'photo'=>$assets.'/i5.jpg',               'url'=>$ab.'mert-ocal/'],
    ['name'=>'Katty Escobar Gómez', 'role'=>'Abogada',               'photo'=>$assets.'/i7.jpg',               'url'=>$ab.'katty-escobar-gomez/'],
    ['name'=>'Aníbal Ricardo Coley', 'role'=>'Abogado',               'photo'=>$assets.'/Anibal-Coley-1-1.png', 'url'=>$ab.'anibal-ricardo-coley/'],
  ];
}

/* Static reviews (fallback) */
$static_reviews = [
  ['stars'=>5, 'text'=>'Excelente firma de abogados. Muy profesionales y atentos. Resolvieron mi caso de manera eficiente y con gran conocimiento.', 'name'=>'A.G.', 'date'=>'Hace 2 semanas'],
  ['stars'=>5, 'text'=>'El equipo de Nieto & Nieto Lawyers fue increíblemente útil. Siempre disponibles para responder mis preguntas. Los recomiendo ampliamente.', 'name'=>'D.L.', 'date'=>'Hace 1 mes'],
  ['stars'=>5, 'text'=>'Servicio excepcional. Su conocimiento del derecho corporativo nos ayudó a navegar una situación muy compleja con éxito.', 'name'=>'J.G.', 'date'=>'Hace 3 semanas'],
];

/* Recent posts */
$recent_posts = nieto_get_recent_posts(3);
$featured_member = ! empty($team_members) ? $team_members[0] : null;
$other_members   = count($team_members) > 1 ? array_slice($team_members, 1) : [];
?>

<section class="hero" id="inicio">
  <div class="hero-bg" style="background-image:url('<?php echo esc_url($hero_bg); ?>')"></div>
  <div class="hero-frame" aria-hidden="true"></div>
</section>

<section class="about" id="nosotros">
  <div class="container">
    <div class="about-intro reveal">
      <div class="about-intro-copy">
        <span class="section-label">Nieto &amp; Nieto Lawyers</span>
        <h1 class="about-hero-title"><?php echo esc_html($hero_headline); ?></h1>
        <p class="about-hero-subtitle"><?php echo esc_html($hero_subheadline); ?></p>
      </div>

      <div class="about-intro-aside">
        <p>Firma boutique especializada en derecho corporativo, financiero y comercial con presencia en Colombia y Europa.</p>
        <div class="about-intro-actions">
          <a href="<?php echo esc_url($hero_cta_url); ?>" class="btn btn-primary">
            <i class="fa-solid fa-envelope"></i>
            <?php echo esc_html($hero_cta_text); ?>
          </a>
          <a href="#areas" class="btn btn-outline">
            <i class="fa-solid fa-scale-balanced"></i>
            Áreas de Práctica
          </a>
        </div>
      </div>
    </div>

    <div class="about-grid">
      <div class="about-image-wrap reveal">
        <img src="<?php echo esc_url($about_image); ?>" alt="Nieto &amp; Nieto Lawyers - Firma">
        <div class="about-image-badge">
          <div class="num" data-counter data-target="23" data-suffix="+">23+</div>
          <div class="label">Años de<br>Experiencia</div>
        </div>
      </div>

      <div class="about-content reveal">
        <span class="section-label">Sobre Nosotros</span>
        <h2 class="section-title"><?php echo esc_html($about_title); ?></h2>
        <div class="section-lead"><?php echo wp_kses_post($about_text); ?></div>

        <?php if ( $about_stats ) : ?>
        <div class="about-stats">
          <?php foreach ($about_stats as $stat) : ?>
          <div class="stat-item">
            <div class="stat-num"><?php echo esc_html($stat['number']); ?></div>
            <div class="stat-label"><?php echo esc_html($stat['label']); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php else : ?>
        <div class="about-stats">
          <div class="stat-item">
            <div class="stat-num">14</div>
            <div class="stat-label">Áreas de Práctica</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">2</div>
            <div class="stat-label">Sedes</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">500+</div>
            <div class="stat-label">Clientes</div>
          </div>
        </div>
        <?php endif; ?>

        <a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>" class="btn btn-primary">
          <i class="fa-solid fa-arrow-right"></i>
          Ver más
        </a>
      </div>
    </div>
  </div>
</section>

<section class="practice-areas" id="areas">
  <div class="container">
    <div class="practice-areas-header reveal">
      <span class="section-label">Nuestra Especialización</span>
      <h2 class="section-title"><?php echo esc_html($areas_title); ?></h2>
      <p class="section-lead">Soluciones legales integrales para empresas y personas en las áreas más importantes del derecho contemporáneo.</p>
    </div>
  </div>

  <div class="areas-grid">
    <?php foreach ($practice_areas as $area) :
      $name  = is_array($area) ? $area['name'] : '';
      $image = is_array($area) ? $area['image'] : '';
      $icon  = is_array($area) ? ($area['icon'] ?: 'fa-scale-balanced') : 'fa-scale-balanced';
      $url   = is_array($area) ? ($area['url'] ?: '#') : '#';
    ?>
    <a href="<?php echo esc_url($url); ?>" class="area-card reveal">
      <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" class="area-card-img" loading="lazy">
      <div class="area-card-overlay"></div>
      <div class="area-card-body">
        <div class="area-card-icon">
          <i class="fa-solid <?php echo esc_attr($icon); ?>"></i>
        </div>
        <h3 class="area-card-name"><?php echo esc_html($name); ?></h3>
        <span class="area-card-link">
          Ver más <i class="fa-solid fa-arrow-right"></i>
        </span>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="team" id="equipo">
  <div class="container">
    <div class="team-header">
      <div class="reveal">
        <span class="section-label">Nuestros Profesionales</span>
        <h2 class="section-title"><?php echo esc_html($team_title); ?></h2>
        <p class="section-lead">Una composición más simétrica para presentar al equipo con mejor ritmo visual y mayor claridad.</p>
      </div>
      <a href="<?php echo esc_url($team_page_url); ?>" class="btn btn-outline reveal">
        Ver todo el equipo <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>

    <div class="team-layout">
      <?php if ($featured_member) :
        $name  = is_array($featured_member) ? $featured_member['name'] : '';
        $role  = is_array($featured_member) ? $featured_member['role'] : '';
        $photo = is_array($featured_member) ? $featured_member['photo'] : '';
        $url   = is_array($featured_member) ? ($featured_member['url'] ?: $team_page_url) : $team_page_url;
      ?>
      <a href="<?php echo esc_url($url); ?>" class="team-card team-card-featured reveal">
        <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="team-card-photo" loading="lazy">
        <div class="team-card-overlay"></div>
        <div class="team-card-body">
          <div class="team-card-tag">Perfil destacado</div>
          <div class="team-card-name"><?php echo esc_html($name); ?></div>
          <div class="team-card-role"><?php echo esc_html($role); ?></div>
        </div>
      </a>
      <?php endif; ?>

      <div class="team-grid">
        <?php foreach ($other_members as $member) :
          $name  = is_array($member) ? $member['name'] : '';
          $role  = is_array($member) ? $member['role'] : '';
          $photo = is_array($member) ? $member['photo'] : '';
          $url   = is_array($member) ? ($member['url'] ?: $team_page_url) : $team_page_url;
        ?>
        <a href="<?php echo esc_url($url); ?>" class="team-card reveal">
          <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="team-card-photo" loading="lazy">
          <div class="team-card-overlay"></div>
          <div class="team-card-body">
            <div class="team-card-name"><?php echo esc_html($name); ?></div>
            <div class="team-card-role"><?php echo esc_html($role); ?></div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="reviews" id="testimonios">
  <div class="container">
    <div class="reviews-header reveal">
      <span class="section-label">Testimonios</span>
      <h2 class="section-title">¿Qué dicen de <span>nosotros</span>?</h2>
      <div class="google-badge">
        <i class="fa-brands fa-google"></i>
        Valoraciones de Google
        <strong style="color:#fff;margin-left:4px;">5.0</strong>
      </div>
    </div>

    <div class="reviews-grid">
      <?php foreach ($static_reviews as $review) : ?>
      <div class="review-card reveal">
        <div class="review-stars">
          <?php for ($i = 0; $i < $review['stars']; $i++) : ?>
            <i class="fa-solid fa-star"></i>
          <?php endfor; ?>
        </div>
        <p class="review-text"><?php echo esc_html($review['text']); ?></p>
        <div class="review-author">
          <div class="review-avatar"><?php echo esc_html(substr($review['name'], 0, 2)); ?></div>
          <div>
            <div class="review-name"><?php echo esc_html($review['name']); ?></div>
            <div class="review-date"><?php echo esc_html($review['date']); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if ( ! empty($recent_posts) ) : ?>
<section class="latest-posts" id="blog">
  <div class="container">
    <div class="latest-posts-header">
      <div class="reveal">
        <span class="section-label">Noticias y Artículos</span>
        <h2 class="section-title">Últimas <span>Noticias</span></h2>
      </div>
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline reveal">
        Nuestro Blog <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>

    <div class="posts-grid">
      <?php foreach ($recent_posts as $i => $post) :
        setup_postdata($post);
        $thumb = get_the_post_thumbnail_url($post->ID, 'large');
        if ( ! $thumb ) {
          $thumb = $assets . '/img-noticias.jpg';
        }
        $cats = get_the_category($post->ID);
        $cat_name = $cats ? $cats[0]->name : 'Legal';
      ?>
      <article class="post-card <?php echo $i === 0 ? 'featured' : ''; ?> reveal">
        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="post-card-thumb">
          <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>" loading="lazy">
        </a>
        <div class="post-card-body">
          <div class="post-meta">
            <span class="post-category"><?php echo esc_html($cat_name); ?></span>
            <span class="post-date"><?php echo esc_html(get_the_date('d M Y', $post->ID)); ?></span>
          </div>
          <h3 class="post-title">
            <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo esc_html(get_the_title($post->ID)); ?></a>
          </h3>
          <?php if ($i === 0) : ?>
          <p class="post-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt($post->ID), 24, '...')); ?></p>
          <?php endif; ?>
          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="post-read-more">
            Leer más <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="contact" id="contacto">
  <div class="container">
    <div class="contact-grid">
      <div class="reveal">
        <span class="section-label">Contáctanos</span>
        <h2 class="section-title"><?php echo esc_html($contact_title); ?></h2>
        <p style="color:var(--clr-muted);margin-bottom:40px"><?php echo esc_html($contact_subtitle); ?></p>

        <?php if ($contact_phone) : ?>
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
          <div>
            <div class="contact-info-label">Teléfono</div>
            <div class="contact-info-value"><?php echo esc_html($contact_phone); ?></div>
          </div>
        </div>
        <?php endif; ?>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
          <div>
            <div class="contact-info-label">Email</div>
            <div class="contact-info-value"><?php echo esc_html($contact_email); ?></div>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <div class="contact-info-label">Dirección</div>
            <div class="contact-info-value"><?php echo esc_html($contact_address); ?></div>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="fa-solid fa-globe"></i></div>
          <div>
            <div class="contact-info-label">Europa</div>
            <div class="contact-info-value">Estambul, Turquía</div>
          </div>
        </div>
      </div>

      <div class="reveal">
        <div class="contact-form">
          <h3 class="form-title">Envíanos un mensaje</h3>
          <form id="nlContactForm" novalidate>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="nl_name">Nombre *</label>
                <input type="text" id="nl_name" name="name" class="form-control" placeholder="Tu nombre" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="nl_email">Email *</label>
                <input type="email" id="nl_email" name="email" class="form-control" placeholder="tu@email.com" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="nl_phone">Teléfono</label>
                <input type="tel" id="nl_phone" name="phone" class="form-control" placeholder="+57 300 000 0000">
              </div>
              <div class="form-group">
                <label class="form-label" for="nl_area">Área de interés</label>
                <select id="nl_area" name="area" class="form-control">
                  <option value="">Selecciona un área...</option>
                  <option>Corporativo</option>
                  <option>Tecnología y Datos</option>
                  <option>Impuestos y Aduanas</option>
                  <option>Litigios y Arbitraje</option>
                  <option>Propiedad Intelectual</option>
                  <option>Compliance</option>
                  <option>Inversión Extranjera</option>
                  <option>Regulatorio y Sanitario</option>
                  <option>Medicina y Salud</option>
                  <option>Inmobiliario</option>
                  <option>Contratación Estatal</option>
                  <option>Contabilidad y Finanzas</option>
                  <option>Otro</option>
                </select>
              </div>
            </div>
            <div class="form-group full">
              <label class="form-label" for="nl_message">Mensaje *</label>
              <textarea id="nl_message" name="message" class="form-control" placeholder="Cuéntanos sobre tu caso o consulta..." required></textarea>
            </div>
            <div id="nlFormResponse" class="form-response" style="margin-bottom:16px"></div>
            <div class="form-submit">
              <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-paper-plane"></i>
                Enviar Mensaje
              </button>
              <span style="font-size:.78rem;color:var(--clr-muted)">Respuesta en 24-48 h</span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<a href="#" class="subscribe-banner">
  <img src="<?php echo esc_url($assets . '/Banner-suscribirse.gif'); ?>" alt="Suscríbete a nuestro boletín jurídico">
</a>

<?php get_footer(); ?>

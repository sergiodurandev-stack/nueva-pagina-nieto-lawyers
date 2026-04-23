<?php
/**
 * Template Name: Trabaja con Nosotros
 */

get_header();
$a = NL_ASSETS_URL;
?>

<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $a . '/banner-home.jpg' ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Trabaja con Nosotros</span>
    </div>
    <h1 class="page-banner-title">Trabaja con <span>Nosotros</span></h1>
  </div>
</div>

<section class="tc-intro">
  <div class="container">
    <div class="reveal" style="max-width:720px">
      <span class="section-label" style="display:block;margin-bottom:14px">Únete al equipo</span>
      <h2 class="section-title" style="margin-bottom:24px">Forma parte de <span>Nieto &amp; Nieto Lawyers</span></h2>
      <p>En Nieto &amp; Nieto Lawyers estamos comprometidos con la excelencia, la innovación jurídica y el desarrollo profesional. Buscamos talento apasionado por el derecho, con visión internacional y vocación de servicio.</p>
      <p style="margin-top:16px">Si compartes nuestros valores y quieres crecer en un entorno dinámico, multicultural y con proyección global, nos encantaría conocerte.</p>
    </div>
  </div>
</section>

<section class="tc-values">
  <div class="container">
    <div class="reveal" style="text-align:center;margin-bottom:48px">
      <span class="section-label">Lo que ofrecemos</span>
      <h2 class="section-title">Por qué trabajar con <span>nosotros</span></h2>
    </div>
    <div class="tc-values-grid reveal">
      <div class="tc-value-card">
        <i class="fa-solid fa-globe"></i>
        <h3>Entorno Internacional</h3>
        <p>Trabaja con casos y clientes de múltiples jurisdicciones, con oficinas en Colombia y Europa.</p>
      </div>
      <div class="tc-value-card">
        <i class="fa-solid fa-graduation-cap"></i>
        <h3>Desarrollo Profesional</h3>
        <p>Acceso a formación continua, seminarios especializados y oportunidades de crecimiento.</p>
      </div>
      <div class="tc-value-card">
        <i class="fa-solid fa-handshake"></i>
        <h3>Cultura Colaborativa</h3>
        <p>Equipo multidisciplinario donde el respeto, la transparencia y el trabajo en equipo son la base.</p>
      </div>
      <div class="tc-value-card">
        <i class="fa-solid fa-scale-balanced"></i>
        <h3>Casos de Alto Impacto</h3>
        <p>Participa en proyectos legales desafiantes que realmente marcan la diferencia.</p>
      </div>
    </div>
  </div>
</section>

<section class="tc-positions">
  <div class="container">
    <div class="reveal" style="text-align:center;margin-bottom:48px">
      <span class="section-label">Vacantes</span>
      <h2 class="section-title">Posiciones <span>abiertas</span></h2>
    </div>

    <div class="tc-empty-positions reveal">
      <i class="fa-solid fa-file-circle-plus"></i>
      <p>No hay vacantes abiertas en este momento.</p>
      <p style="color:var(--clr-muted);font-size:.9rem">Sin embargo, siempre estamos abiertos a conocer talento excepcional. Envíanos tu hoja de vida y te contactaremos cuando surja una oportunidad.</p>
    </div>
  </div>
</section>

<section class="tc-form-section">
  <div class="container">
    <div class="tc-form-inner reveal">
      <div style="text-align:center;margin-bottom:40px">
        <span class="section-label" style="display:block;margin-bottom:14px">Postúlate</span>
        <h2 class="section-title">Envíanos tu <span>hoja de vida</span></h2>
      </div>

      <form id="nlJobForm" class="tc-form" novalidate>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="job_name">Nombre completo *</label>
            <input type="text" id="job_name" name="name" class="form-control" placeholder="Tu nombre" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="job_email">Email *</label>
            <input type="email" id="job_email" name="email" class="form-control" placeholder="tu@email.com" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="job_phone">Teléfono</label>
            <input type="tel" id="job_phone" name="phone" class="form-control" placeholder="+57 300 000 0000">
          </div>
          <div class="form-group">
            <label class="form-label" for="job_area">Área de interés</label>
            <select id="job_area" name="area" class="form-control">
              <option value="">Selecciona un área...</option>
              <option>Corporativo</option>
              <option>Tecnología y Datos</option>
              <option>Impuestos y Aduanas</option>
              <option>Litigios y Arbitraje</option>
              <option>Propiedad Intelectual</option>
              <option>Compliance</option>
              <option>Inversión Extranjera</option>
              <option>Regulatorio y Sanitario</option>
              <option>Administración</option>
              <option>Marketing / Comunicaciones</option>
              <option>Otro</option>
            </select>
          </div>
        </div>
        <div class="form-group full">
          <label class="form-label" for="job_message">Mensaje / Carta de presentación</label>
          <textarea id="job_message" name="message" class="form-control" placeholder="Cuéntanos por qué te gustaría trabajar con nosotros..." rows="5"></textarea>
        </div>
        <div class="form-submit">
          <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-paper-plane"></i>
            Enviar postulación
          </button>
          <span style="font-size:.78rem;color:var(--clr-muted)">Te responderemos a la brevedad</span>
        </div>
        <div id="nlJobFormResponse" class="form-response" style="margin-top:16px"></div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>

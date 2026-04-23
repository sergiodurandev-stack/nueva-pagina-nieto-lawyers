<?php
/**
 * Single template for CPT: areas-de-practica
 */

$slug = get_queried_object()->post_name ?? '';
$assets = NL_ASSETS_URL;

$areas = [
  'corporativo' => [
    'name'   => 'Corporativo',
    'icon'   => 'fa-building',
    'img'    => $assets . '/corporativo.jpg',
    'intro'  => '<p>Nuestra área Corporativa ofrece asesoría integral en la estructuración y operación de empresas. Acompañamos a nuestros clientes en cada etapa del ciclo empresarial, desde la constitución de sociedades hasta procesos de fusiones, adquisiciones y reestructuraciones.</p><p>Contamos con un equipo multidisciplinario con profundo conocimiento del derecho societario colombiano e internacional, lo que nos permite brindar soluciones jurídicas efectivas y alineadas con los objetivos estratégicos de cada cliente.</p>',
    'services' => [
      ['titulo' => 'Fusiones y Adquisiciones', 'desc' => 'Estructuramos y llevamos a cabo fusiones y adquisiciones, incluyendo la revisión exhaustiva de información (due diligence), la negociación y elaboración de acuerdos y la gestión de trámites ante autoridades competentes.'],
      ['titulo' => 'Gobierno Corporativo', 'desc' => 'Asesoramos en la implementación de estructuras de gobierno corporativo, elaboración de estatutos, reglamentos internos y políticas de buen gobierno que fortalezcan la gestión empresarial.'],
      ['titulo' => 'Contratos Empresariales', 'desc' => 'Redactamos, revisamos y negociamos todo tipo de contratos comerciales, incluyendo acuerdos de distribución, agencia, franquicia, suministro y licencia.'],
      ['titulo' => 'Acuerdos de Accionistas', 'desc' => 'Diseñamos y negociamos pactos de socios y acuerdos de accionistas que protejan los intereses de todas las partes y prevengan conflictos futuros.'],
      ['titulo' => 'Derecho Societario', 'desc' => 'Asesoramos en la constitución, transformación, escisión y liquidación de sociedades, garantizando el cumplimiento de todos los requisitos legales y registrales.'],
      ['titulo' => 'Asesoría Financiera y de Capital', 'desc' => 'Acompañamos a empresas en la obtención de financiamiento, emisión de títulos valores, estructuración de deuda y operaciones en mercados de capitales.'],
    ],
    'lawyers' => ['jaime-nieto' => 'Jaime Nieto Pérez', 'jaime-andres-nieto' => 'Jaime Andrés Nieto', 'katty-escobar-gomez' => 'Katty Escobar Gómez'],
  ],
  'inversion-extranjera-y-negocios-internacionales' => [
    'name'   => 'Inversión Extranjera y Negocios Internacionales',
    'icon'   => 'fa-globe',
    'img'    => $assets . '/inversion-extranjera.jpg',
    'intro'  => '<p>Acompañamos a inversionistas extranjeros y empresas colombianas en su expansión global. Nuestra práctica combina conocimiento del marco jurídico colombiano con experiencia en derecho internacional de los negocios, facilitando la entrada de capital y la internacionalización de empresas.</p><p>Contamos con alianzas estratégicas en múltiples jurisdicciones y una sucursal en Estambul, Turquía, que nos permite brindar un servicio verdaderamente global.</p>',
    'services' => [
      ['titulo' => 'Estructuración de Inversiones Extranjeras', 'desc' => 'Nos aseguramos de que nuestros clientes cumplan con los requisitos legales y regulatorios para la realización de inversiones extranjeras en Colombia, desde la estructuración inicial hasta el registro ante el Banco de la República.'],
      ['titulo' => 'Negociación y Redacción de Contratos Internacionales', 'desc' => 'Asesoramos en la negociación e implementación de contratos internacionales incluyendo Letters of Intent, MOUs, joint ventures, acuerdos de distribución y contratos de licencia.'],
      ['titulo' => 'Due Diligence Internacional', 'desc' => 'Realizamos revisiones exhaustivas de información legal, financiera y regulatoria para operaciones de inversión extranjera directa.'],
      ['titulo' => 'Cumplimiento Regulatorio Internacional', 'desc' => 'Asesoramos en el cumplimiento de normativas locales e internacionales aplicables a operaciones transfronterizas, incluyendo controles de cambio y regulaciones sectoriales.'],
      ['titulo' => 'Tratados de Libre Comercio', 'desc' => 'Aprovechamos los TLC suscritos por Colombia para optimizar la estructura de las operaciones internacionales de nuestros clientes y maximizar sus beneficios arancelarios.'],
      ['titulo' => 'Resolución de Disputas Internacionales', 'desc' => 'Representamos a clientes en arbitrajes internacionales y disputas transfronterizas ante organismos internacionales de resolución de controversias.'],
    ],
    'lawyers' => ['jaime-andres-nieto' => 'Jaime Andrés Nieto', 'estefani-nieto' => 'Estefani Nieto', 'mert-ocal' => 'Mert Ocal'],
  ],
  'regulatorio-y-sanitario' => [
    'name'   => 'Regulatorio y Sanitario',
    'icon'   => 'fa-shield-halved',
    'img'    => $assets . '/regulacion.jpg',
    'intro'  => '<p>Brindamos asesoría especializada a empresas de sectores altamente regulados, incluyendo salud, alimentos, cosméticos, medicamentos y dispositivos médicos. Nuestro equipo conoce en profundidad el marco normativo del INVIMA y otras autoridades sanitarias.</p><p>Acompañamos a nuestros clientes en el cumplimiento de los requisitos legales y regulatorios para la comercialización de productos en Colombia, minimizando riesgos y optimizando tiempos.</p>',
    'services' => [
      ['titulo' => 'Registro y Autorización de Productos', 'desc' => 'Asesoramos a empresas en el proceso de registro de productos ante el INVIMA, incluyendo alimentos, medicamentos, cosméticos, dispositivos médicos y productos de aseo.'],
      ['titulo' => 'Asesoría en Normativa Sanitaria', 'desc' => 'Orientamos a nuestros clientes sobre el cumplimiento de las normativas sanitarias aplicables a su sector, incluyendo BPM, BPA, BPL y demás regulaciones técnicas.'],
      ['titulo' => 'Auditoría de Cumplimiento Sanitario', 'desc' => 'Realizamos auditorías de cumplimiento para identificar brechas regulatorias y proponer planes de acción correctivos antes de inspecciones oficiales.'],
      ['titulo' => 'Defensa en Procedimientos Administrativos', 'desc' => 'Representamos a empresas en procedimientos sancionatorios ante el INVIMA y demás autoridades sanitarias del orden nacional y departamental.'],
      ['titulo' => 'Vigilancia Sanitaria y Farmacovigilancia', 'desc' => 'Asesoramos en el diseño e implementación de sistemas de farmacovigilancia, tecnovigilancia y demás sistemas de vigilancia post-comercialización exigidos por la regulación colombiana.'],
    ],
    'lawyers' => ['estefani-nieto' => 'Estefani Nieto'],
  ],
  'impuestos-aduanero-y-comercio-exterior' => [
    'name'   => 'Impuestos, Aduanero y Comercio Exterior',
    'icon'   => 'fa-landmark',
    'img'    => $assets . '/impuestos.png',
    'intro'  => '<p>Nuestra práctica tributaria ofrece asesoría integral en planeación fiscal, cumplimiento de obligaciones tributarias y defensa ante la DIAN. Combinamos el conocimiento profundo de la normativa colombiana con una visión estratégica que permite a nuestros clientes optimizar su carga impositiva dentro del marco legal.</p><p>En materia aduanera y de comercio exterior, acompañamos a importadores y exportadores en todos los aspectos de sus operaciones internacionales.</p>',
    'services' => [
      ['titulo' => 'Planeación Fiscal', 'desc' => 'Desarrollamos estrategias fiscales que permitan a nuestros clientes minimizar la carga tributaria y maximizar su eficiencia fiscal, tanto en operaciones nacionales como internacionales.'],
      ['titulo' => 'Cumplimiento de Obligaciones Tributarias', 'desc' => 'Asesoramos en la presentación de declaraciones de renta, IVA, retención en la fuente, impuesto de industria y comercio y demás obligaciones tributarias.'],
      ['titulo' => 'Recuperación de Saldos a Favor', 'desc' => 'Gestionamos ante la DIAN las solicitudes de devolución y compensación de saldos a favor en IVA, renta y otros impuestos.'],
      ['titulo' => 'Defensa Tributaria', 'desc' => 'Representamos a contribuyentes en procesos de fiscalización, recursos de reconsideración, apelaciones y demandas ante la jurisdicción contencioso-administrativa.'],
      ['titulo' => 'Aduanas y Comercio Exterior', 'desc' => 'Asesoramos en regímenes aduaneros, clasificación arancelaria, origen de mercancías, valoración aduanera y cumplimiento de las obligaciones ante la DIAN y otras entidades de control.'],
    ],
    'lawyers' => ['estefani-nieto' => 'Estefani Nieto', 'doris-cecilia-criado' => 'Doris Cecilia Criado', 'katty-escobar-gomez' => 'Katty Escobar Gómez'],
  ],
  'tecnologia-datos-y-transformacion-digital' => [
    'name'   => 'Tecnología, Datos y Transformación Digital',
    'icon'   => 'fa-microchip',
    'img'    => $assets . '/tecnologia.jpg',
    'intro'  => '<p>Nuestra área de práctica en Tecnología, Datos y Transformación Digital juega un papel primordial en el mundo actual, donde la tecnología y los datos son elementos fundamentales en todos los aspectos de la vida empresarial. Con la llegada de la era digital, ha surgido la necesidad de contar con asesoramiento legal especializado.</p><p>En Nieto &amp; Nieto Lawyers, comprendemos la importancia de la tecnología y los datos en el entorno empresarial actual, brindando asesoramiento jurídico integral a personas, empresas y organizaciones que enfrentan desafíos legales relacionados con el manejo, procesamiento y protección de datos.</p>',
    'services' => [
      ['titulo' => 'Protección de Datos Personales', 'desc' => 'Brindamos asesoramiento completo sobre el cumplimiento de las leyes y regulaciones de protección de datos, incluyendo la Ley 1581 de 2012. Diseñamos e implementamos sistemas de protección de datos, políticas de privacidad y procedimientos de gestión de datos.'],
      ['titulo' => 'Contratos Tecnológicos', 'desc' => 'Redactamos y negociamos contratos de desarrollo de software, acuerdos de servicios en la nube (SaaS, IaaS, PaaS), contratos de licencia de software y acuerdos de nivel de servicio (SLA).'],
      ['titulo' => 'Propiedad Intelectual Tecnológica', 'desc' => 'Asesoramos en la protección de activos de propiedad intelectual en el ámbito tecnológico, incluyendo patentes de software, derechos de autor sobre código fuente y protección de algoritmos.'],
      ['titulo' => 'Transformación Digital', 'desc' => 'Acompañamos a empresas en sus procesos de transformación digital, asesorando sobre el marco legal aplicable a la implementación de inteligencia artificial, blockchain y otras tecnologías emergentes.'],
      ['titulo' => 'Peritaje Informático', 'desc' => 'Ofrecemos servicios de peritaje informático para procesos judiciales y arbitrales, incluyendo análisis forense digital, recuperación de evidencia electrónica y dictámenes periciales.'],
      ['titulo' => 'Comercio Electrónico', 'desc' => 'Asesoramos a empresas de e-commerce en el cumplimiento de la normativa aplicable, incluyendo protección al consumidor digital, medios de pago electrónicos y firma electrónica.'],
    ],
    'lawyers' => ['jaime-andres-nieto' => 'Jaime Andrés Nieto', 'estefani-nieto' => 'Estefani Nieto'],
  ],
  'medicina-y-ciencias-de-la-salud' => [
    'name'   => 'Medicina y Ciencias de la Salud',
    'icon'   => 'fa-heart-pulse',
    'img'    => $assets . '/medicina.jpg',
    'intro'  => '<p>Nuestra práctica en Medicina y Ciencias de la Salud ofrece asesoría jurídica especializada a profesionales de la salud, instituciones médicas, pacientes y empresas del sector farmacéutico y biotecnológico.</p><p>Contamos con experiencia en el complejo marco normativo del sistema de salud colombiano, que nos permite brindar soluciones efectivas tanto a prestadores como a usuarios del sistema.</p>',
    'services' => [
      ['titulo' => 'Protección de Derechos de Pacientes', 'desc' => 'Asesoramos a pacientes y usuarios del sistema de salud en la protección de sus derechos, incluyendo acceso a servicios médicos, medicamentos de alto costo y tecnologías en salud.'],
      ['titulo' => 'Responsabilidad Médica', 'desc' => 'Representamos a profesionales e instituciones de salud en procesos por responsabilidad médica, tanto en la vía disciplinaria como en la jurisdicción civil y contencioso-administrativa.'],
      ['titulo' => 'Derecho Farmacéutico', 'desc' => 'Asesoramos a empresas farmacéuticas en el marco regulatorio aplicable a la investigación, desarrollo, producción y comercialización de medicamentos y dispositivos médicos.'],
      ['titulo' => 'Negligencia Médica', 'desc' => 'Representamos a víctimas de negligencia médica en la reclamación de indemnizaciones y en procesos de conciliación y mediación con instituciones de salud y aseguradoras.'],
      ['titulo' => 'Telemedicina', 'desc' => 'Asesoramos en el marco legal de la telemedicina y la salud digital, incluyendo protección de datos de salud, consentimiento informado electrónico y habilitación de servicios de telesalud.'],
    ],
    'lawyers' => ['estefani-nieto' => 'Estefani Nieto'],
  ],
  'competencia-y-proteccion-al-consumidor' => [
    'name'   => 'Competencia y Protección al Consumidor',
    'icon'   => 'fa-balance-scale',
    'img'    => $assets . '/Competencia.png',
    'intro'  => '<p>Nuestra práctica en Competencia y Protección al Consumidor ofrece asesoría jurídica especializada tanto a empresas que enfrentan investigaciones por prácticas anticompetitivas como a consumidores que buscan proteger sus derechos.</p><p>Contamos con amplio conocimiento de la normativa de libre competencia en Colombia y del estatuto del consumidor, lo que nos permite brindar una defensa efectiva ante la SIC y demás autoridades competentes.</p>',
    'services' => [
      ['titulo' => 'Asesoría a Consumidores y Empresas', 'desc' => 'Acompañamos integralmente a los consumidores sobre sus derechos y obligaciones en relación con los bienes y servicios que adquieren, así como a las empresas en el cumplimiento de la normativa de protección al consumidor.'],
      ['titulo' => 'Competencia Desleal', 'desc' => 'Representamos a empresas en investigaciones y procesos por competencia desleal, incluyendo actos de confusión, engaño, descrédito y explotación de reputación ajena.'],
      ['titulo' => 'Prácticas Restrictivas de la Competencia', 'desc' => 'Asesoramos a empresas en investigaciones de la SIC por prácticas colusorias, abuso de posición dominante y operaciones de integración empresarial.'],
      ['titulo' => 'Defensa del Consumidor', 'desc' => 'Tramitamos acciones de protección al consumidor ante la SIC y los juzgados civiles, reclamando garantías, reversión de pagos y demás derechos previstos en el Estatuto del Consumidor.'],
      ['titulo' => 'Libre Competencia', 'desc' => 'Brindamos asesoría preventiva a empresas para garantizar que sus prácticas comerciales cumplan con la normativa de libre competencia, evitando investigaciones y sanciones.'],
    ],
    'lawyers' => ['jaime-andres-nieto' => 'Jaime Andrés Nieto'],
  ],
  'compliance' => [
    'name'   => 'Compliance',
    'icon'   => 'fa-clipboard-check',
    'img'    => $assets . '/compliance.jpg',
    'intro'  => '<p>Nuestra práctica de Compliance ayuda a las organizaciones a establecer, mantener y mejorar programas de cumplimiento normativo efectivos. Acompañamos a empresas en la gestión de riesgos legales, regulatorios y reputacionales asociados con el incumplimiento de normas.</p><p>En Nieto &amp; Nieto Lawyers entendemos que un programa de compliance robusto es un elemento clave para la sostenibilidad y la competitividad de cualquier organización.</p>',
    'services' => [
      ['titulo' => 'Auditoría de Cumplimiento Corporativo', 'desc' => 'Efectuamos una revisión exhaustiva de los procesos, políticas y prácticas de una empresa para evaluar su cumplimiento con las normas legales, regulatorias y contractuales aplicables.'],
      ['titulo' => 'Sistemas de Gestión de Compliance', 'desc' => 'Diseñamos e implementamos sistemas de gestión de cumplimiento normativo, incluyendo manuales de compliance, códigos de conducta y canales de denuncia.'],
      ['titulo' => 'Prevención de Lavado de Activos', 'desc' => 'Asesoramos en el diseño e implementación de sistemas de administración del riesgo de lavado de activos y financiación del terrorismo (SARLAFT) exigidos por la normativa colombiana.'],
      ['titulo' => 'Defensa en Procesos Disciplinarios', 'desc' => 'Representamos a personas naturales y jurídicas en procesos disciplinarios y sancionatorios ante entidades de supervisión y control, incluyendo Superintendencias, Contraloría y Procuraduría.'],
      ['titulo' => 'Compliance Anticorrupción', 'desc' => 'Implementamos programas de anticorrupción y transparencia conforme a la Ley 1778 de 2016 y estándares internacionales como la FCPA y UK Bribery Act.'],
    ],
    'lawyers' => ['katty-escobar-gomez' => 'Katty Escobar Gómez'],
  ],
  'litigios-y-arbitraje' => [
    'name'   => 'Litigios y Arbitraje',
    'icon'   => 'fa-gavel',
    'img'    => $assets . '/litigios.jpg',
    'intro'  => '<p>Nuestra práctica en Litigios y Arbitraje ofrece representación de alto nivel en disputas comerciales complejas, tanto en la jurisdicción ordinaria como en mecanismos alternativos de solución de controversias.</p><p>Trabajamos proactivamente para identificar y abordar posibles situaciones conflictivas antes de que se conviertan en disputas, minimizando costos y preservando relaciones comerciales.</p>',
    'services' => [
      ['titulo' => 'Prevención de Conflictos', 'desc' => 'Trabajamos proactivamente para identificar y abordar posibles situaciones conflictivas antes de que se conviertan en disputas legales, a través de una revisión contractual preventiva y asesoría continua.'],
      ['titulo' => 'Litigios Comerciales', 'desc' => 'Representamos a nuestros clientes en procesos judiciales de naturaleza comercial ante todas las instancias de la jurisdicción ordinaria y contencioso-administrativa.'],
      ['titulo' => 'Arbitraje Nacional e Internacional', 'desc' => 'Representamos a clientes en procedimientos arbitrales ante centros de arbitraje colombianos e internacionales, incluyendo la CCICB, el CAC y la ICC.'],
      ['titulo' => 'Mediación y Conciliación', 'desc' => 'Facilitamos procesos de mediación y conciliación que permitan resolver disputas de manera ágil, preservando las relaciones comerciales de nuestros clientes.'],
      ['titulo' => 'Ejecución de Laudos', 'desc' => 'Asesoramos y representamos a clientes en el reconocimiento y ejecución de laudos arbitrales nacionales e internacionales en Colombia y en el exterior.'],
      ['titulo' => 'Representación ante Autoridades', 'desc' => 'Representamos a clientes en procesos ante entidades regulatorias y de supervisión, incluyendo SIC, SFC, Contraloría y demás organismos de control.'],
    ],
    'lawyers' => ['jaime-nieto' => 'Jaime Nieto Pérez', 'jaime-andres-nieto' => 'Jaime Andrés Nieto'],
  ],
  'contratacion-estatal' => [
    'name'   => 'Contratación Estatal',
    'icon'   => 'fa-file-contract',
    'img'    => $assets . '/contratacion.jpg',
    'intro'  => '<p>Nuestra práctica en Contratación Estatal ofrece acompañamiento integral a proponentes y contratistas en todos los procesos de contratación con el Estado colombiano. Contamos con amplio conocimiento de la Ley 80 de 1993, la Ley 1150 de 2007 y el Decreto 1082 de 2015.</p><p>Acompañamos a nuestros clientes desde la preparación de propuestas hasta la liquidación de los contratos, pasando por la ejecución y las controversias que puedan surgir durante el desarrollo del contrato.</p>',
    'services' => [
      ['titulo' => 'Procesos de Selección', 'desc' => 'Brindamos acompañamiento legal integral en la participación en licitaciones públicas, concursos de méritos, selecciones abreviadas y contratación directa con entidades del Estado.'],
      ['titulo' => 'Celebración de Contratos', 'desc' => 'Asesoramos en la negociación y perfeccionamiento de contratos estatales, garantizando el cumplimiento de los requisitos de ejecución y las obligaciones de las partes.'],
      ['titulo' => 'Ejecución de Contratos', 'desc' => 'Acompañamos a contratistas durante la ejecución de contratos estatales, asesorando en la gestión de garantías, actas de inicio, comités de seguimiento y modificaciones contractuales.'],
      ['titulo' => 'Impugnaciones y Recursos', 'desc' => 'Representamos a proponentes en la interposición de recursos de reposición y apelación contra actos administrativos precontractuales, incluyendo declaratorias de desierta y adjudicaciones.'],
      ['titulo' => 'Controversias Contractuales', 'desc' => 'Representamos a contratistas en reclamaciones por incumplimiento contractual, mayores cantidades de obra, desequilibrio económico y demás controversias surgidas durante la ejecución.'],
      ['titulo' => 'Liquidación de Contratos', 'desc' => 'Asesoramos en los procesos de liquidación de contratos estatales, incluyendo la elaboración de actas de liquidación, reclamaciones finales y solución de controversias pendientes.'],
    ],
    'lawyers' => ['jaime-nieto' => 'Jaime Nieto Pérez'],
  ],
  'propiedad-intelectual' => [
    'name'   => 'Propiedad Intelectual',
    'icon'   => 'fa-lightbulb',
    'img'    => $assets . '/propiedad.jpg',
    'intro'  => '<p>Nuestra práctica en Propiedad Intelectual brinda protección integral a los activos intangibles de nuestros clientes, incluyendo marcas, patentes, derechos de autor y secretos empresariales.</p><p>Acompañamos a empresas e inventores en el registro, defensa y explotación comercial de sus creaciones, tanto a nivel nacional como internacional, con alianzas en múltiples jurisdicciones.</p>',
    'services' => [
      ['titulo' => 'Protección de Marcas y Signos Distintivos', 'desc' => 'Brindamos acompañamiento a nuestros clientes en la protección de marcas y signos distintivos, como nombres comerciales, lemas y logotipos, ante la SIC y en jurisdicciones extranjeras a través de nuestros aliados.'],
      ['titulo' => 'Patentes de Invención', 'desc' => 'Asesoramos en el proceso de solicitud y registro de patentes de invención y modelos de utilidad ante la SIC, incluyendo la redacción de reivindicaciones y la gestión de oposiciones.'],
      ['titulo' => 'Derechos de Autor', 'desc' => 'Asesoramos en el registro y protección de obras literarias, artísticas, musicales y de software ante la Dirección Nacional de Derechos de Autor.'],
      ['titulo' => 'Secretos Empresariales', 'desc' => 'Diseñamos estrategias de protección de información confidencial y secretos empresariales, incluyendo acuerdos de confidencialidad, políticas internas y acciones legales por apropiación indebida.'],
    ],
    'lawyers' => ['jaime-andres-nieto' => 'Jaime Andrés Nieto'],
  ],
  'inmobiliario' => [
    'name'   => 'Inmobiliario',
    'icon'   => 'fa-house-chimney',
    'img'    => $assets . '/inmobiliaria.jpg',
    'intro'  => '<p>Nuestra práctica inmobiliaria ofrece asesoría integral en todo tipo de transacciones y proyectos del sector de finca raíz. Acompañamos a constructoras, promotores, compradores, vendedores e inversores en todas las etapas de sus proyectos inmobiliarios.</p><p>Contamos con profundo conocimiento de la normativa urbanística, de propiedad horizontal y del mercado de capitales inmobiliario colombiano.</p>',
    'services' => [
      ['titulo' => 'Compraventa de Inmuebles', 'desc' => 'Brindamos asesoría legal en la compra y venta de bienes raíces, incluyendo la revisión de títulos, elaboración de promesas de compraventa y escrituras públicas.'],
      ['titulo' => 'Contratos de Arrendamiento', 'desc' => 'Redactamos y negociamos contratos de arrendamiento comercial y residencial, cánones de arrendamiento, garantías y procedimientos de restitución.'],
      ['titulo' => 'Fiducia Inmobiliaria', 'desc' => 'Asesoramos en la estructuración y seguimiento de negocios fiduciarios inmobiliarios, incluyendo fiducias de administración, garantía y preventas.'],
      ['titulo' => 'Propiedad Horizontal', 'desc' => 'Asesoramos a constructoras en la constitución de propiedades horizontales y a administraciones y copropietarios en la gestión y resolución de conflictos.'],
      ['titulo' => 'Crowdfunding Inmobiliario', 'desc' => 'Asesoramos en la estructuración de proyectos de financiación colectiva inmobiliaria (crowdfunding), incluyendo el cumplimiento de la normativa de la SFC.'],
      ['titulo' => 'Urbanismo y Licencias', 'desc' => 'Acompañamos a promotores en la obtención de licencias de construcción y urbanismo, permisos ante curadurías y gestión de trámites ante entidades municipales.'],
      ['titulo' => 'Propiedad Horizontal Turística', 'desc' => 'Estructuramos proyectos de tiempo compartido y propiedad horizontal con uso turístico, garantizando el cumplimiento de la normativa del MinCIT y la SIC.'],
    ],
    'lawyers' => ['jaime-nieto' => 'Jaime Nieto Pérez'],
  ],
  'pro-bono' => [
    'name'   => 'Pro-Bono',
    'icon'   => 'fa-hands-holding-heart',
    'img'    => $assets . '/bg-home.jpg',
    'intro'  => '<p>Nuestra práctica Pro-Bono refleja el compromiso de Nieto &amp; Nieto Lawyers con el acceso a la justicia, el fortalecimiento institucional y el acompañamiento jurídico de impacto social. Ponemos nuestra experiencia al servicio de personas, comunidades y organizaciones que requieren orientación legal estratégica y no siempre cuentan con los recursos para obtenerla.</p><p>Esta línea de trabajo nos permite contribuir activamente a iniciativas con valor humano y transformador, articulando asesoría legal rigurosa con sensibilidad social, enfoque preventivo y vocación de servicio.</p>',
    'services' => [
      ['titulo' => 'Asesoría a Fundaciones y ONG', 'desc' => 'Brindamos orientación jurídica a organizaciones sin ánimo de lucro en su constitución, gobierno corporativo, cumplimiento regulatorio y estructuración de proyectos de impacto social.'],
      ['titulo' => 'Acompañamiento a Comunidades Vulnerables', 'desc' => 'Apoyamos procesos legales que involucran a personas o comunidades en situación de vulnerabilidad, priorizando el acceso efectivo a información, defensa y rutas institucionales.'],
      ['titulo' => 'Conceptos y Orientación Preventiva', 'desc' => 'Emitimos conceptos y recomendaciones jurídicas iniciales para ayudar a identificar riesgos, alternativas de actuación y mecanismos de protección de derechos.'],
      ['titulo' => 'Fortalecimiento Institucional', 'desc' => 'Acompañamos a iniciativas sociales en la estructuración de políticas internas, contratos, esquemas de cumplimiento y buenas prácticas de gestión.'],
      ['titulo' => 'Apoyo en Alianzas de Impacto', 'desc' => 'Asesoramos en convenios, memorandos de entendimiento y esquemas de colaboración entre sector privado, organizaciones sociales y actores internacionales.'],
      ['titulo' => 'Evaluación de Casos con Impacto Social', 'desc' => 'Analizamos solicitudes pro-bono para identificar su viabilidad, alcance jurídico y potencial de impacto, priorizando casos alineados con nuestra capacidad y misión institucional.'],
    ],
    'lawyers' => [],
  ],
  'contabilidad-y-finanzas-corporativas' => [
    'name'   => 'Contabilidad y Finanzas Corporativas',
    'icon'   => 'fa-chart-line',
    'img'    => $assets . '/corporativo.jpg',
    'intro'  => '<p>Nuestra práctica en Contabilidad y Finanzas Corporativas ofrece servicios integrales de asesoría contable, financiera y tributaria para empresas de todos los sectores. Contamos con un equipo de contadores públicos y asesores financieros con amplia experiencia en el sector privado y público.</p><p>Combinamos el rigor técnico de la contabilidad con una visión estratégica de negocio, permitiendo a nuestros clientes tomar decisiones financieras informadas y cumplir con todas sus obligaciones legales y tributarias.</p>',
    'services' => [
      ['titulo' => 'Servicios Contables', 'desc' => 'Elaboración y revisión de estados financieros, asesoría en la implementación de NIIF, SIIGO, HELISA y OPTIMATIC, gestión de nómina y seguridad social.'],
      ['titulo' => 'Planeación Financiera', 'desc' => 'Diseñamos estrategias financieras integrales que permitan a nuestros clientes alcanzar sus objetivos de crecimiento, optimizar su estructura de capital y gestionar sus riesgos financieros.'],
      ['titulo' => 'Auditoría Financiera', 'desc' => 'Realizamos auditorías financieras independientes que brinden confianza a accionistas, inversionistas y acreedores sobre la razonabilidad de los estados financieros.'],
      ['titulo' => 'Asesoría Tributaria', 'desc' => 'Prestamos asesoría integral en el cumplimiento de obligaciones tributarias nacionales y territoriales, incluyendo la elaboración de declaraciones de renta, IVA y retención en la fuente.'],
    ],
    'lawyers' => ['doris-cecilia-criado' => 'Doris Cecilia Criado', 'anibal-ricardo-coley' => 'Aníbal Ricardo Coley', 'mert-ocal' => 'Mert Ocal'],
  ],
];

$area = $areas[ $slug ] ?? null;

if ( ! $area ) {
  wp_redirect( home_url( '/areas-de-practica/' ) );
  exit;
}

get_header();
?>

<!-- ════ BANNER ════ -->
<div class="page-banner">
  <div class="page-banner-bg" style="background-image:url('<?php echo esc_url( $area['img'] ); ?>')"></div>
  <div class="container page-banner-content">
    <div class="page-banner-breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
      <i class="fa-solid fa-chevron-right"></i>
      <a href="<?php echo esc_url( home_url( '/areas-de-practica/' ) ); ?>">Áreas de Práctica</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span><?php echo esc_html( $area['name'] ); ?></span>
    </div>
    <div class="area-banner-icon"><i class="fa-solid <?php echo esc_attr( $area['icon'] ); ?>"></i></div>
    <h1 class="page-banner-title"><?php echo esc_html( $area['name'] ); ?></h1>
  </div>
</div>

<!-- ════ INTRO ════ -->
<section class="area-single-intro">
  <div class="container">
    <div class="area-single-intro-grid reveal">
      <div>
        <span class="section-label">Área de Práctica</span>
        <h2 class="section-title" style="margin-bottom:28px">Nuestra <span>Especialización</span></h2>
        <div class="area-single-body">
          <?php echo wp_kses_post( $area['intro'] ); ?>
        </div>
        <a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" class="btn btn-primary" style="margin-top:32px">
          <i class="fa-solid fa-calendar-check"></i> Consulta Gratuita
        </a>
      </div>
      <div class="area-single-img-wrap">
        <img src="<?php echo esc_url( $area['img'] ); ?>" alt="<?php echo esc_attr( $area['name'] ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ════ SERVICIOS ════ -->
<section class="area-services">
  <div class="container">
    <div class="reveal" style="text-align:center;margin-bottom:56px">
      <span class="section-label">Lo que ofrecemos</span>
      <h2 class="section-title">Nuestros <span>Servicios</span></h2>
    </div>
    <div class="area-services-grid reveal">
      <?php foreach ( $area['services'] as $i => $srv ) : ?>
        <div class="area-service-card">
          <div class="area-service-num"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></div>
          <h3 class="area-service-title"><?php echo esc_html( $srv['titulo'] ); ?></h3>
          <p class="area-service-desc"><?php echo esc_html( $srv['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════ ABOGADOS RELACIONADOS ════ -->
<?php if ( ! empty( $area['lawyers'] ) ) : ?>
<section class="area-lawyers">
  <div class="container">
    <div class="reveal" style="text-align:center;margin-bottom:48px">
      <span class="section-label">Equipo Especializado</span>
      <h2 class="section-title">Abogados <span>en esta área</span></h2>
    </div>
    <div class="area-lawyers-grid reveal">
      <?php foreach ( $area['lawyers'] as $lslug => $lname ) : ?>
        <a href="<?php echo esc_url( home_url( '/abogados/' . $lslug . '/' ) ); ?>" class="area-lawyer-card">
          <div class="area-lawyer-icon"><i class="fa-solid fa-user-tie"></i></div>
          <span class="area-lawyer-name"><?php echo esc_html( $lname ); ?></span>
          <span class="area-lawyer-link">Ver perfil <i class="fa-solid fa-arrow-right"></i></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ════ CTA ════ -->
<section class="area-cta">
  <div class="container reveal" style="text-align:center">
    <h2 class="section-title">¿Necesitas asesoría en <span><?php echo esc_html( $area['name'] ); ?></span>?</h2>
    <p style="color:var(--clr-muted);max-width:520px;margin:0 auto 36px">
      Contáctanos y uno de nuestros especialistas evaluará tu caso de forma gratuita y confidencial.
    </p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" class="btn btn-primary">
        <i class="fa-solid fa-envelope"></i> Contáctanos
      </a>
      <a href="<?php echo esc_url( home_url( '/areas-de-practica/' ) ); ?>" class="btn btn-outline">
        <i class="fa-solid fa-th-large"></i> Todas las Áreas
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

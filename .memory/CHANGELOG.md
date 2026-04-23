# 📜 Commits / Cambios Recientes

## Fase 1 — Templates base + Responsive

| Archivo | Cambio |
|---------|--------|
| `archive.php` | ✅ Creado — Archives de CPTs y posts |
| `single.php` | ✅ Creado — Single post con sidebar, breadcrumb |
| `search.php` | ✅ Creado — Resultados de búsqueda |
| `404.php` | ✅ Creado — Página 404 personalizada |
| `page.php` | ✅ Creado — Fallback genérico |
| `single-abogados.php` | ✅ Creado — Perfiles de 7 abogados |
| `single-areas-de-practica.php` | ✅ Creado — Single área de práctica |
| `main.css` | ✅ Responsive global, fix overflow, scroll-padding-top |
| `functions.php` | ✅ CPTs registrados, ACF fields, handlers AJAX |
| `header.php` | ✅ Header con nav responsive |
| `footer.php` | ✅ Footer completo |
| `template-home.php` | ✅ Home page |
| `template-quienes-somos.php` | ✅ Quiénes Somos |
| `template-nuestra-historia.php` | ✅ Historia / Timeline |
| `template-nuestro-equipo.php` | ✅ Equipo |
| `template-areas-de-practica.php` | ✅ Listado áreas |
| `template-blog.php` | ✅ Blog con tabs |

## Fase 2 — Subpáginas institucionales

| Archivo | Cambio |
|---------|--------|
| `template-trabaja-con-nosotros.php` | ✅ Creado — formulario + AJAX |
| `template-politica-de-privacidad.php` | ✅ Creado — contenido legal completo |
| `template-terminos-y-condiciones.php` | ✅ Creado — contenido legal completo |
| `footer.php` | ✅ Enlaces redes (reales), áreas (slugs), privacidad/términos |
| `main.css` | ✅ ~700 líneas CSS nuevas páginas |
| `main.js` | ✅ Handler formulario trabajo |
| `functions.php` | ✅ 3 páginas registradas + handler AJAX trabajo |

## Fase 3 — Migración contenido (COMPLETADA ✅)

| Tarea | Estado |
|-------|--------|
| Identificar contenido original (nieto-lawyers.local:10053) | ✅ Completado |
| Mapear CPTs originales vs nuevos | ✅ Completado |
| Migrar posts con CPT coincidente | ✅ Completado (83 posts) |
| Migrar `actualidad` (58) a `noticias-legales` | ✅ Completado |
| Migrar `noticiaslegales` (5) a `noticias-legales` | ✅ Completado |
| Migrar `guias-kits-legales` (3) a `practicos-exp` | ✅ Completado |
| Copiar uploads (2023-2025) | ✅ Completado |
| Reemplazar URLs | ✅ Completado |
| Crear 3 páginas faltantes (Trabaja, Privacidad, Términos) | ✅ Completado |
| Bug "min lectura" en single.php | ✅ Corregido |
| Verificar archive.php URLs | ✅ Verificado (200) |

## Sesión 2025-04-23 — Deploy y fix BD remota

| Tarea | Detalle |
|-------|---------|
| 🚀 Deploy a servidor remoto | Git push a GitHub |
| 💾 Importar BD remota | Dump SQL via phpMyAdmin (sergpwry_wp528, prefijo wpeu_) |
| 🐛 Fix URLs duplicadas | Se duplicó el "1" en URLs (lawyers11). Corregido con UPDATEs |
| 🐛 Fix prefijo tablas | WordPress remoto usa wpeu_, no wp_. Copiados datos con INSERTs |
| 📄 Páginas nuevas | Creadas en BD: Trabaja con Nosotros (117), Privacidad (118), Términos (119) |
| 🔧 Bug min lectura | Reemplazado get_post_time('H:i') por cálculo word_count/200 en single.php |
| ✅ Archive URLs | Verificadas todas las URLs de CPTs y categorías (200 OK) |
| 📁 Memoria actualizada | STATE.md, CHANGELOG.md, TASKS.md actualizados en .memory/ y theme/memory/ |

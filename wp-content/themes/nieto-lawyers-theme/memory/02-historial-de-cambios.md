# Historial de Cambios — Nieto & Nieto Lawyers

## Fecha Actual — Fase 3: Migración y Cierre

### Cambios Realizados

#### Migración de Contenido
```
1. Creación de scripts de migración (PHP):
   - nl-migrate.php → No ejecutable (falta PDO en CLI)
   - nl-migrate-web.php → ✅ Ejecutado vía web con PDO+WordPress

2. Migración ejecutada:
   - 14 categorías migradas (categoria → category)
   - 83 posts migrados con mapping de tipos
   - 59 metadatos migrados
   - 72 relaciones término-post migradas
   
3. Post-migración:
   - URLs reemplazadas: nieto-lawyers.local → nieto-lawyers-1.local
   - Uploads 2023, 2024, 2025 copiados desde sitio original
   - Scripts de migración eliminados por seguridad
```

#### Problemas Resueltos (Sesión Actual)
| # | Problema | Archivo | Solución Aplicada |
|---|----------|---------|-------------------|
| 1 | "min lectura" muestra hora | `single.php:69` | ✅ Reemplazado `get_post_time('H:i')` por cálculo real (word_count / 200) |
| 2 | Faltan páginas en BD | — | ✅ Creadas vía SQL: Trabaja con Nosotros (117), Política Privacidad (118), Términos (119) con sus templates |
| 3 | Archive URLs no verificadas | `archive.php` | ✅ Verificado: `/noticias-legales/`, `/opinion-analisis/`, `/practicos-exp/`, `/category/*/` responden 200 |
| 4 | Featured images perdidas | `wp_postmeta` | 🟡 Pendiente — 169 _thumbnail_id en original, 0 en nuevo. Archivos físicos existen, faltan registros attachment |
| 5 | Overflow móvil | `main.css` | ⚪ Pendiente de verificar |

#### Decisiones Tomadas
- `actualidad` (58) → `noticias-legales`
- `noticiaslegales` (5) → `noticias-legales`
- `guias-kits-legales` (3) → `practicos-exp`
- `test-rapidos*` (3) → Descartados
- `areas-de-practica` y `abogados` → No migrados (hardcodeados en templates)

#### Assets
- `/uploads/nieto-assets/` contiene 49 archivos (íconos, fotos, banners)
- Todas las imágenes referenciadas en los templates existen
- Uploads 2023-2025 copiados desde el original

---

## Historial Previo

### Fase 2 — Templates y Estilos
- Creación de todos los templates PHP
- CSS completo responsive
- Formularios AJAX
- Perfiles de abogados hardcodeados
- Áreas de práctica hardcodeadas

### Fase 1 — Setup
- Creación del tema hijo
- Registro de CPTs
- Configuración inicial de WordPress

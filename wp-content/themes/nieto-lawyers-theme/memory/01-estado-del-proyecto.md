# Estado del Proyecto — Nieto & Nieto Lawyers

## Fase 3: Finalización

### Última actualización: 2025 (sesión actual)

---

## ✅ COMPLETADO

### Infraestructura
- ✅ Tema hijo creado: `nieto-lawyers-theme` (basado en Twenty Twenty-Five)
- ✅ 8 templates PHP completos (institucionales + blog + equipo + áreas)
- ✅ Header con nav responsive y menú hamburguesa
- ✅ Footer completo con 4 columnas
- ✅ CSS completo con todos los breakpoints: 1100px → 360px
- ✅ Variables CSS globales
- ✅ Animaciones CSS (reveal, fadeUp)
- ✅ Formulario de contacto con AJAX
- ✅ Formulario de trabajo con AJAX (Trabaja con Nosotros)
- ✅ 7 perfiles de abogados completos (hardcodeados en template)
- ✅ 14 áreas de práctica completas (hardcodeadas en template)
- ✅ CPTs registrados en `functions.php`
- ✅ Sidebar del blog registrado
- ✅ Redes sociales con URLs reales
- ✅ Widgets del footer hardcodeados
- ✅ Page templates para todas las páginas institucionales
- ✅ 404 page
- ✅ Search page

### Migración de Contenido (Ejecutada el [fecha actual])
- ✅ Script PHP de migración creado y ejecutado
- ✅ 14 categorías del taxonomy "categoria" migradas como "category"
- ✅ 83 posts migrados con mapping de tipos:
  - `actualidad` (58) → `noticias-legales`
  - `opinion-analisis` (11) → `opinion-analisis`
  - `practicos-exp` (3) → `practicos-exp`
  - `post` (3) → `post`
  - `noticiaslegales` (5) → `noticias-legales`
  - `guias-kits-legales` (3) → `practicos-exp`
- ✅ 59 metadatos de posts migrados
- ✅ 72 relaciones término-post migradas
- ✅ URLs actualizadas: `nieto-lawyers.local` → `nieto-lawyers-1.local`
- ✅ Uploads copiados: 2023, 2024, 2025 desde sitio original

### Decisiones de Mapeo (Tomadas)
- `actualidad` → `noticias-legales` ✅
- `noticiaslegales` (sin guión) → `noticias-legales` ✅
- `guias-kits-legales` → `practicos-exp` (son guías prácticas) ✅
- `test-rapidos*` → Descartados (datos de prueba) ✅
- `areas-de-practica` → NO migrado (hardcodeado en template) ✅
- `abogados` → NO migrado (hardcodeado en template) ✅

---

## 🔄 EN PROGRESO / PENDIENTE

### Alto Impacto
1. **Páginas faltantes en BD**: ✅ RESUELTO — Creadas vía SQL:
   - Trabaja con Nosotros (ID 117, template: `template-trabaja-con-nosotros.php`)
   - Política de Privacidad (ID 118, template: `template-politica-de-privacidad.php`)
   - Términos y Condiciones (ID 119, template: `template-terminos-y-condiciones.php`)
   
2. **Bug "min lectura"** en `single.php`: ✅ RESUELTO — Reemplazado `get_post_time('H:i')` por cálculo real de tiempo de lectura basado en word count / 200

3. **Archive template**: ✅ VERIFICADO — Las URLs responden 200:
   - `/noticias-legales/` ✅ (200)
   - `/opinion-analisis/` ✅ (200)
   - `/practicos-exp/` ✅ (200)
   - `/category/*/` ✅ (200 con categorías existentes; `actualidad` no es categoría, es CPT)

4. **Overflow negro en móvil**: ⚪ Pendiente de verificar

### Medio Impacto
5. **Featured images**: 🟡 Pendiente — 169 _thumbnail_id en original, 0 en nuevo. Los archivos físicos existen en `/uploads/` pero faltan los registros `wp_posts` tipo attachment. Requiere script para registrar attachments y mapear _thumbnail_id.
   
6. **Optimización de assets**: 
   - Imágenes en `/uploads/nieto-assets/` ya están presentes
   - Verificar que todas las rutas sean correctas

7. **Menú de navegación**: Verificar que el menú de WP esté configurado correctamente

### Bajo Impacto
8. **SEO**: Meta descriptions para templates
9. **Rendimiento**: Lazy loading ya implementado en templates

---

## 📊 ESTADÍSTICAS

| Ítem | Sitio Original | Sitio Nuevo |
|------|---------------|-------------|
| Posts publicados | 230 | 29 → ~112 (post-migración) |
| Pages | 23 | 7 → ~10 (con páginas faltantes) |
| Categorías | 14 (categoria) | 14 (category) |
| Abogados (hardcodeados) | 7 | 7 |
| Áreas de práctica | 15 | 14 |
| Plugins activos | 31 | mínimos |
| WooCommerce | Sí | No |

---

## 📝 NOTAS TÉCNICAS

- **Base de datos original**: MySQL puerto 10053, DB 'local', prefijo wp_
- **Base de datos nueva**: MySQL puerto 10059, DB 'local', prefijo wp_
- **PHP disponible**: `C:\Users\flocl\AppData\Local\Programs\Local\resources\extraResources\lightning-services\php-8.2.27+1\bin\win64\php.exe`
- **MySQL cliente**: `C:\Program Files\MySQL\MySQL Server 9.5\bin\mysql.exe`
- **No hay WP-CLI disponible**
- **No hay PDO driver en el PHP de CLI** (usar MySQL directo o web PHP)

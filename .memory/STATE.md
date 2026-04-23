# 🧠 Estado del Proyecto — Nieto & Nieto Lawyers (Fase 3 en progreso)

**Última actualización:** 2025-04-23 (sesión deploy + fix BD remota)

---

## 🏗️ ARQUITECTURA DEL PROYECTO

### Dos sitios locales WordPress (Local by Flywheel)

| Sitio | Dominio | MySQL Port | Descripción |
|-------|---------|------------|-------------|
| **Original** 🏛️ | `nieto-lawyers.local` | **10053** | Sitio antiguo con Elementor Pro (contiene datos reales) |
| **Nuevo** 🆕 | `nieto-lawyers-1.local` | **10059** | **Este proyecto** — sitio rehecho desde VS Code con código puro |

> **Nota:** Ambos usan DB `local`, user `root`, password `root`

### 🌐 Sitio remoto (Namecheap cPanel)
- **URL real:** `https://arasaka.sergioduran.dev/nuevo-nieto-lawyers1/` **(con 1 al final)**
- **Prefijo BD remoto:** `wpeu_` (NO `wp_`)
- **Admin:** `https://arasaka.sergioduran.dev/nuevo-nieto-lawyers1/wp-admin/`
- **Usuario:** `nieto123`
- **Hosting:** Namecheap cPanel con phpMyAdmin y File Manager

> ⚠️ **IMPORTANTE:** El `deploy.sh` original tiene la URL mal (`nuevo-nieto-lawyers` sin el 1). La URL correcta es con `lawyers1`.

---

## ✅ FASE 1 COMPLETA — Templates base + responsive

### 📄 8 nuevos templates PHP creados
| Archivo | Propósito |
|---------|-----------|
| `archive.php` | Archives de noticias-legales, opinion-analisis, practicos-exp y posts regulares |
| `single.php` | Posts individuales (con sidebar, breadcrumb, etiquetas, navegación) |
| `search.php` | Resultados de búsqueda (con formulario y grid de resultados) |
| `404.php` | Página no encontrada (con enlaces útiles) |
| `page.php` | Fallback genérico para páginas sin template específico |
| `template-trabaja-con-nosotros.php` | Página de postulaciones laborales (con formulario + AJAX) |
| `template-politica-de-privacidad.php` | Política de privacidad completa |
| `template-terminos-y-condiciones.php` | Términos y condiciones completos |

### 🛠️ Archivos modificados
| Archivo | Cambios |
|---------|---------|
| `functions.php` | ✅ 3 nuevas páginas registradas (Trabaja con Nosotros, Privacidad, Términos), sidebar de blog, handler AJAX para formulario de trabajo |
| `footer.php` | ✅ Enlaces corregidos (redes sociales con URLs reales, áreas apuntan a slugs, enlaces a Privacidad y Términos) |
| `main.css` | ✅ ~700 líneas de CSS para todas las nuevas páginas |
| `main.js` | ✅ Handler JavaScript para el formulario de trabajo |

### ✅ Secciones responsivas cubiertas
Header/Nav, Hero, About, Practice Areas, Team, Reviews, Latest Posts, Contact, Footer, Page Banner, Quiénes Somos, Historia/Timeline, Equipo, Áreas de Práctica, Blog, Single Abogado, Single Área

### Breakpoints: 1100, 1024, 960, 900, 820, 768, 700, 600, 480, 400, 360px

---

## ✅ FASE 2 COMPLETA — Subpáginas institucionales ✅

| Tarea | Estado |
|-------|--------|
| Template Trabaja con Nosotros + contenido | ✅ Completo |
| Template Política de Privacidad + contenido | ✅ Completo |
| Template Términos y Condiciones + contenido | ✅ Completo |
| Footer corregido (redes, áreas, enlaces) | ✅ Completo |

---

## ✅ FASE 3 — Migración de contenido (COMPLETADA el 2025-04-23)

### Contenido migrado (83 posts + 14 categorías)
| CPT Nuevo | Cantidad | Origen |
|-----------|----------|--------|
| `noticias-legales` | 63 | `actualidad` (58) + `noticiaslegales` (5) |
| `opinion-analisis` | 11 | `opinion-analisis` |
| `practicos-exp` | 6 | `practicos-exp` (3) + `guias-kits-legales` (3) |
| `post` | 4 | `post` (3) + Hello world |
| **Total** | **84** | |

### Decisiones de Mapeo (Tomadas)
| Origen | Destino | Decisión |
|--------|---------|----------|
| `actualidad` (58) | `noticias-legales` | ✅ Migrado |
| `noticiaslegales` (5) | `noticias-legales` | ✅ Migrado (sin guión) |
| `guias-kits-legales` (3) | `practicos-exp` | ✅ Migrado (son guías prácticas) |
| `test-rapidos*` (3) | Descartados | ✅ Basura eliminada |
| `areas-de-practica` | NO migrado | ✅ Hardcodeado en template |
| `abogados` | NO migrado | ✅ Hardcodeado en template |

### Assets
- ✅ `/uploads/` 2023-2025 copiados desde sitio original
- ✅ URLs reemplazadas: `nieto-lawyers.local` → `nieto-lawyers-1.local`
- ✅ 49 archivos en `/uploads/nieto-assets/`

---

## 📋 PENDIENTES POST-DEPLOY

### 🟡 Media Prioridad
1. **Featured images**: 169 _thumbnail_id en original, 0 en nuevo. Archivos físicos existen, faltan registros attachment. Requiere script para registrar attachments y mapear _thumbnail_id.
2. **Overflow móvil**: Verificar si persiste overflow horizontal en móvil (`.areas-grid`, hero).
3. **Permalinks**: Puede necesitar refrescarse en el admin remoto si alguna URL da 404.

### 🟢 Baja Prioridad
4. SEO básico (meta descriptions, alt texts)
5. Verificar rendimiento / velocidad de carga
6. Menú de navegación configurado correctamente

---

## 📊 ESTADÍSTICAS

| Ítem | Sitio Original | Sitio Nuevo Local | Sitio Remoto |
|------|---------------|-------------------|-------------|
| Posts publicados | 230 | ~112 | ~112 |
| Pages | 23 | ~11 | ~11 |
| Categorías | 14 | 14 | 14 |
| Abogados (hardcodeados) | 7 | 7 | 7 |
| Áreas de práctica | 15 | 14 | 14 |
| Plugins activos | 31 | mínimos | LiteSpeed Cache |

---

## 📝 NOTAS TÉCNICAS

- **Base de datos original**: MySQL puerto 10053, DB 'local', prefijo wp_
- **Base de datos nueva local**: MySQL puerto 10059, DB 'local', prefijo wp_
- **Base de datos remota**: Host `localhost:3306`, DB `sergpwry_wp528`, prefijo `wpeu_` (¡importante!)
- **PHP disponible**: `C:\Users\flocl\AppData\Local\Programs\Local\resources\extraResources\lightning-services\php-8.2.27+1\bin\win64\php.exe`
- **MySQL cliente**: `C:\Program Files\MySQL\MySQL Server 9.5\bin\mysql.exe`
- **No hay WP-CLI disponible en local**
- **No hay PDO driver en el PHP de CLI** (usar MySQL directo o web PHP)
- **Deploy**: Git push a GitHub + importar dump via phpMyAdmin + subir theme ZIP via File Manager
- **URL correcta remota**: `arasaka.sergioduran.dev/nuevo-nieto-lawyers1/` (con 1 al final)

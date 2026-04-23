# 🧠 Estado del Proyecto — Nieto & Nieto Lawyers (Fase 3 en progreso)

**Última actualización:** 2025 (sesión actual)

---

## 🏗️ ARQUITECTURA DEL PROYECTO

### Dos sitios locales WordPress (Local by Flywheel)

| Sitio | Dominio | MySQL Port | Descripción |
|-------|---------|------------|-------------|
| **Original** 🏛️ | `nieto-lawyers.local` | **10053** | Sitio antiguo con Elementor Pro (contiene datos reales) |
| **Nuevo** 🆕 | `nieto-lawyers-1.local` | **10059** | **Este proyecto** — sitio rehecho desde VS Code con código puro |

> **Nota:** Ambos usan DB `local`, user `root`, password `root`

### Despliegue (deploy.sh)
- Local: `nieto-lawyers-1.local`
- Staging: `arasaka.sergioduran.dev/nuevo-nieto-lawyers`
- Producción: `https://nieto-lawyers.com` (según style.css)

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

## 🔄 FASE 2 COMPLETA — Subpáginas institucionales ✅

| Tarea | Estado |
|-------|--------|
| Template Trabaja con Nosotros + contenido | ✅ Completo |
| Template Política de Privacidad + contenido | ✅ Completo |
| Template Términos y Condiciones + contenido | ✅ Completo |
| Footer corregido (redes, áreas, enlaces) | ✅ Completo |

---

## 🚧 FASE 3 — Migración de contenido (EN PROGRESO)

### Sitio original (`nieto-lawyers.local:10053`) — Contenido encontrado:

| CPT en original | Cantidad | ¿Mapeable al nuevo theme? |
|-----------------|----------|--------------------------|
| `actualidad` | **58 posts** | ❌ No existe en nuevo theme. Propuesta: migrar a `noticias-legales` |
| `opinion-analisis` | **11 posts** | ✅ Coincide exactamente |
| `areas-de-practica` | 15 | ✅ Coincide |
| `abogados` | 7 | ✅ Coincide |
| `noticiaslegales` (sin guión) | 5 | ❌ Renombrar a `noticias-legales` |
| `guias-kits-legales` | 3 | ❌ No existe en nuevo theme |
| `post` | 3 | ✅ Nativo de WP |
| `practicos-exp` | 3 | ✅ Coincide exactamente |
| `noticias-legales` | 2 | ✅ Son de prueba ("test", "test 2") |

### Pendiente de decisión:
- [ ] ¿Migrar `actualidad` (58) a `noticias-legales`?
- [ ] ¿Migrar `noticiaslegales` (5) a `noticias-legales`?
- [ ] ¿Qué hacer con `guias-kits-legales` (3)?
- [ ] Copiar imágenes de `/uploads/` del original al nuevo
- [ ] Reemplazar URLs viejas (`nieto-lawyers.local`) por nuevas

---

## ✅ Lo que está OK
- Perfiles de 7 abogados completos con quote + highlights
- `wp-config.php` excluido de FTP y git
- Scroll-padding-top para header fijo
- Redes sociales con URLs reales
- 8 páginas institucionales funcionando
- Resultados de búsqueda operativos
- Página 404 personalizada
- Archives de CPTs funcionales
- Formulario de trabajo recibiendo correos

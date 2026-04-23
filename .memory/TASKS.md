# 📋 Pendientes Priorizados — Post-Deploy

## 🟡 Media prioridad

### Featured images (posts migrados sin _thumbnail_id)
- [x] Script PHP creado: `register-featured-images.php`
- [ ] **Ejecutar script** en el sitio remoto vía web:
  ```
  https://arasaka.sergioduran.dev/nuevo-nieto-lawyers1/wp-content/themes/nieto-lawyers-theme/register-featured-images.php?key=NL_MIGRA_THUMBS_2025
  ```
- [ ] Eliminar el script después de ejecutarlo (por seguridad)
- [ ] Verificar que las imágenes destacadas aparezcan correctamente

### Menú de navegación
- [x] Header actualizado para usar `wp_nav_menu()` con fallback hardcoded
- [x] CSS añadido para `.primary-menu` (li, a, current-menu-item states)
- [x] CSS responsive actualizado para nueva estructura de menú
- [ ] **Ir a Apariencia > Menús** en el admin de WP, crear un menú con las páginas y asignarlo a "Primary Menu"

### Permalinks
- [ ] Ir a **Ajustes > Enlaces permanentes** y hacer clic en "Guardar cambios" para refrescar reglas

## 🟢 Baja prioridad

- [ ] SEO básico (meta descriptions, alt texts)
- [ ] Overflow móvil — test en dispositivos reales (<400px)
- [ ] Revisar rendimiento / velocidad de carga
- [ ] Verificar sidebar del blog funcione con widgets
- [ ] Optimización de assets

---

## ✅ LO LOGRADO EN ESTA SESIÓN

| Tarea | Estado |
|-------|--------|
| Script featured images (`register-featured-images.php`) | ✅ Creado |
| Menú navegación con `wp_nav_menu()` | ✅ Header + CSS actualizados |
| Overflow móvil — revisión CSS | ✅ Verificado, no requiere cambios |
| Deploy automatizado con GitHub Actions | ✅ Workflow optimizado (solo theme, no todo WP) |
| Secrets FTP | ✅ Ya configurados en GitHub |
| Push a `main` → deploy automático | ✅ Verificado (workflow success) |

---

## 🗺️ HOJA DE RUTA

### Fase 1 ✅ — Templates base + responsive (COMPLETA)
### Fase 2 ✅ — Subpáginas institucionales (COMPLETA)
### Fase 3 ✅ — Migración de contenido (COMPLETA)
### Post-Deploy 🔄 — Featured images, menú, permalinks, SEO (PENDIENTE)

---

*Nota: Se continuará en un nuevo chat. El contexto completo está en `.memory/`*

> ⚠️ **IMPORTANTE:** El prefijo de BD en el servidor remoto es `wpeu_`, no `wp_`. La URL real es `nuevo-nieto-lawyers1` (con 1 al final).
> 🚀 **Deploy automático**: Push a `main` → GitHub Actions sincroniza `wp-content/themes/nieto-lawyers-theme/` vía FTP.

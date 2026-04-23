# 📋 Pendientes Priorizados — Post-Deploy

## 🟡 Media prioridad

### Featured images (posts migrados sin _thumbnail_id)
- [x] Script PHP creado: `register-featured-images.php`
- [ ] Ejecutar script en el sitio (local o remoto) para registrar attachments y mapear _thumbnail_id
- [ ] Verificar que las imágenes destacadas aparezcan correctamente

### Overflow móvil
- [x] CSS revisado — html/body ya tienen `overflow-x: hidden; width: 100%`
- [x] `.areas-grid` ya tiene `max-width: 100vw`
- [x] Hero ya tiene `overflow: hidden`
- [ ] Realizar test en dispositivos reales para verificar

### Menú de navegación
- [x] Header actualizado para usar `wp_nav_menu()` con fallback hardcoded
- [x] CSS añadido para `.primary-menu` (li, a, current-menu-item states)
- [x] CSS responsive actualizado para nueva estructura de menú
- [ ] Asignar ubicación de menú (primary) desde el admin de WP

## 🟢 Baja prioridad

- [ ] SEO básico (meta descriptions, alt texts)
- [ ] Revisar rendimiento / velocidad de carga
- [ ] Verificar sidebar del blog funcione con widgets
- [ ] Optimización de assets

---

## 🗺️ HOJA DE RUTA

### Fase 1 ✅ — Templates base + responsive (COMPLETA)
### Fase 2 ✅ — Subpáginas institucionales (COMPLETA)
### Fase 3 ✅ — Migración de contenido (COMPLETA)
### Post-Deploy 🔄 — Featured images, overflow, menú, SEO (PENDIENTE)

---

*Nota: Se continuará en un nuevo chat. El contexto completo está en `.memory/`*

> ⚠️ **IMPORTANTE:** El prefijo de BD en el servidor remoto es `wpeu_`, no `wp_`. La URL real es `nuevo-nieto-lawyers1` (con 1 al final).

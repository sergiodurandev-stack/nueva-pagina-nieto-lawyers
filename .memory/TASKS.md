# 📋 Pendientes Priorizados — Post-Deploy

## 🟡 Media prioridad

### Featured images (posts migrados sin _thumbnail_id)
- [ ] 169 _thumbnail_id en original, 0 en nuevo
- [ ] Archivos físicos existen en /uploads/ (2023-2025)
- [ ] Solución: Crear script PHP que registre attachments y mapee _thumbnail_id
- [ ] Alternativa: Usar plugin para regenerar thumbnails

### Overflow móvil
- [ ] Verificar si persiste overflow horizontal en móvil (<400px)
- [ ] Revisar `.areas-grid` con `max-width: 100vw`
- [ ] Verificar hero en móviles pequeños

### Menú de navegación
- [ ] Verificar que el menú de WP esté configurado correctamente
- [ ] Asignar ubicación de menú (primary, footer)

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

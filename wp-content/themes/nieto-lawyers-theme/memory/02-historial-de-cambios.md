# Historial de Cambios — Nieto & Nieto Lawyers

## 2025-04-23 — Sesión de Deploy y Corrección BD Remota

### Deploy a Servidor Remoto (Namecheap)
```
1. Git push a GitHub (solo archivos)
2. Dump SQL generado (local_dump_remoto.sql) con URLs reemplazadas
3. Importado via phpMyAdmin (DB: sergpwry_wp528, prefijo: wpeu_)
4. Theme ZIP subido y extraído via File Manager de cPanel
```

### Problemas Encontrados y Soluciones
| # | Problema | Solución |
|---|----------|----------|
| 1 | SSH no funcionaba (sin llave configurada) | Usamos git push + cPanel phpMyAdmin + File Manager |
| 2 | URLs con `lawyers11` (doble 1) | UPDATE REPLACE en wpeu_options, wpeu_posts, wpeu_postmeta |
| 3 | WordPress usaba prefijo `wpeu_`, datos en `wp_` | INSERT INTO wpeu_posts/meta/term_relationships SELECT FROM wp_ |
| 4 | Páginas nuevas (117-119) no aparecían en admin | Solucionado al copiar datos a tablas wpeu_ |
| 5 | Blog vacío en remoto | Solucionado al importar dump en BD correcta (wpeu_) |

### URLs Verificadas (remoto)
| Ruta | Estado |
|------|--------|
| `/` | ✅ 200 |
| `/blog/` | ✅ 200 |
| `/noticias-legales/` | ✅ 200 |
| `/opinion-analisis/` | ✅ 200 |
| `/practicos-exp/` | ✅ 200 |
| `/trabaja-con-nosotros/` | ✅ 200 |
| `/politica-de-privacidad/` | ✅ 200 |
| `/terminos-y-condiciones/` | ✅ 200 |
| `/wp-admin/` | ✅ 302 (login) |

### Pendientes Post-Deploy
| # | Tarea | Prioridad |
|---|------|-----------|
| 1 | Featured images (169 _thumbnail_id sin migrar) | 🟡 Media |
| 2 | Overflow móvil | 🟡 Media |
| 3 | Menú de navegación | 🟡 Media |
| 4 | SEO básico | 🟢 Baja |

### Notas Importantes
- El servidor remoto usa **prefijo `wpeu_`** en las tablas, NO `wp_`
- La URL correcta es **`nuevo-nieto-lawyers1`** (con 1 al final), NO `nuevo-nieto-lawyers`
- El `deploy.sh` original tiene la URL mal (sin el 1)
- El hosting tiene **LiteSpeed Cache** activo

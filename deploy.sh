#!/bin/bash

# ==========================================
# 1. VARIABLES
# ==========================================
LOCAL_URL="nieto-lawyers-1.local" 
REMOTE_URL="arasaka.sergioduran.dev/nuevo-nieto-lawyers" 

REMOTE_SSH_USER="sergpwry"
REMOTE_SSH_HOST="arasaka.sergioduran.dev"
REMOTE_PORT="21098"
REMOTE_WP_PATH="/home/sergpwry/arasaka.sergioduran.dev/nuevo-nieto-lawyers"
PRIVATE_KEY="$HOME/.ssh/id_ed25519"

# ==========================================
# 2. VERIFICACIÓN
# ==========================================
if [ ! -f "local_dump.sql" ]; then
    echo "❌ ERROR: Falta local_dump.sql."
    exit 1
fi

# ==========================================
# 3. EMPAQUETAR Y SUBIR
# ==========================================
echo "📦 1/3: Empaquetando archivos locales..."
tar -czf update.tar.gz ./wp-content ./local_dump.sql

echo "🚀 2/3: Subiendo a Namecheap (usando llave SSH VIP)..."
scp -P $REMOTE_PORT -i "$PRIVATE_KEY" update.tar.gz $REMOTE_SSH_USER@$REMOTE_SSH_HOST:"$REMOTE_WP_PATH/"

# ==========================================
# 4. INYECTAR EN PRODUCCIÓN
# ==========================================
echo "🔄 3/3: Descomprimiendo, inyectando DB y actualizando URLs..."
ssh -p $REMOTE_PORT -i "$PRIVATE_KEY" $REMOTE_SSH_USER@$REMOTE_SSH_HOST << EOF
    cd "$REMOTE_WP_PATH"
    tar -xzf update.tar.gz
    wp db import local_dump.sql
    wp search-replace 'http://$LOCAL_URL' 'https://$REMOTE_URL' --all-tables
    wp cache flush
    rm local_dump.sql update.tar.gz
EOF

# ==========================================
# 5. LIMPIEZA LOCAL
# ==========================================
rm update.tar.gz local_dump.sql
echo "✅ Despliegue hegemónico completado con éxito."
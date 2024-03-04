#!/bin/bash

# Define NGINX configuration file path
NGINX_CONF="/etc/nginx/conf.d/nginx.conf"
DOMAIN="sample.test"

# Step 1: Update Hosts File
echo "127.0.0.1   $DOMAIN" >> /etc/hosts

# Step 2: Write NGINX configuration
cat > $NGINX_CONF << EOF
server {
    listen 80;
    server_name *.$DOMAIN;
    root /var/www/html;
    index index.php index.html index.htm;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}
EOF

# Step 3: Start NGINX
nginx -g 'daemon off;'
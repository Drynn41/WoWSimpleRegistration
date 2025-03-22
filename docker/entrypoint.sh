#!/bin/bash

# Démarre PHP-FPM
php-fpm --nodaemonize &

# Démarre Apache en mode foreground
httpd -D FOREGROUND

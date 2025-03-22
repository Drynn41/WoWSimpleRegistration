FROM rockylinux:9 AS php8-composer

RUN dnf install -y epel-release
RUN dnf install -y dnf-plugins-core
RUN dnf install -y https://rpms.remirepo.net/enterprise/remi-release-9.rpm
RUN dnf module reset php -y && dnf module enable php:remi-8.2 -y

RUN dnf install httpd net-tools procps git wget composer php php-gd php-gmp php-cli php-mbstring php-xml php-pdo php-bcmath php-json php-intl php-zip php-curl php-mysqlnd php-json -y
RUN composer require gregwar/captcha
WORKDIR /root


#
## CMD BUILD
#

FROM php8-composer AS cms-registration

RUN git clone https://github.com/masterking32/WoWSimpleRegistration

# Copier le contenu du projet vers /var/www/html
RUN cp -R /root/WoWSimpleRegistration/* /var/www/html/

WORKDIR /var/www/html/application

RUN composer install
COPY docker/config.php /var/www/html/application/config/config.php

# Activer mod_rewrite pour Apache (important pour les URLs conviviales)
RUN dnf install -y httpd-tools
RUN sed -i 's/^#LoadModule rewrite_module/LoadModule rewrite_module/' /etc/httpd/conf/httpd.conf
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/httpd/conf/httpd.conf

# Copier la configuration d'Apache dans le conteneur
COPY docker/000-default.conf /etc/httpd/conf.d/

COPY docker/php-fpm.conf /etc/httpd/conf.d/

RUN chown -R apache:apache /var/www/html && chmod -R 755 /var/www/html && mkdir /run/php-fpm/
# Exposer le port 80 pour accéder à Apache
EXPOSE 80

# Démarrer Apache en mode foreground
COPY docker/entrypoint.sh /
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

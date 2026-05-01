FROM php:8.2-apache

# Fix MPM
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork rewrite

# IMPORTANTISSIMO: usa la porta Railway
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

EXPOSE 8080

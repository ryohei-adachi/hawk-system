FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

#Anti Malware kinsing
RUN rm -rf /tmp/kinsing /tmp/kdevtmpfsi && touch /tmp/kdevtmpfsi && touch /var/tmp/kinsing && touch /tmp/kinsing
RUN echo "everything is good here" > /tmp/kdevtmpfsi
RUN echo "everything is good here" > /tmp/kinsing
RUN chmod go-rwx /var/tmp
RUN chmod 1777 /tmp
RUN touch /etc/cron.allow
RUN echo "root" > /etc/cron.allow
RUN echo “www-data” >> /etc/cron.allow
RUN cat /tmp/kdevtmpfsi && cat /var/tmp/kinsing && cat /tmp/kinsing
FROM hitalos/laravel:latest

WORKDIR /var/www

ADD . /var/www

RUN curl -L -o ddtrace.apk https://github.com/DataDog/dd-trace-php/releases/download/0.47.1/datadog-php-tracer_0.47.1_noarch.apk
RUN apk add --allow-untrusted ddtrace.apk
RUN rm ddtrace.apk

RUN composer install --no-interaction --no-dev --prefer-dist
RUN npm install

RUN chmod 755 /var/www/startup.sh
RUN chmod -R 777 /var/www/storage
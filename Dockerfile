FROM kwame42/cakephp:latest
RUN apt-get install -y php5-mongo
RUN do_composer require --no-interaction league/monga
RUN do_composer require --no-interaction lewestopher/cakephp-monga
RUN rm -rf /var/www/html/cake/src
RUN rm -rf /var/www/html/cake/config
COPY src /var/www/html/cake/src
COPY config /var/www/html/cake/config
ADD change_mongo_server /usr/local/etc/init.d/21-change_mongo_server
ADD conf_mongodb /usr/local/bin/conf_mongodb
ADD nginx.conf /etc/nginx/conf.d/default.conf

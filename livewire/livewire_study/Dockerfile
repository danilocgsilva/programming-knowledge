FROM debian:bookworm-slim

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install curl git zip -y
RUN apt-get install php php-mysql php-xdebug php-curl php-zip php-xml php-mbstring php-sqlite3 -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - 
RUN apt-get install -y nodejs
COPY /config/xdebug.ini /etc/php/8.2/mods-available/
COPY /config/startup.sh /startup.sh
COPY /config/apache2.conf /etc/apache2/
RUN chmod +x /startup.sh

CMD sh /startup.sh
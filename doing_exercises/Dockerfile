FROM debian:bookworm-slim

RUN apt-get update
RUN apt-get upgrade -y

# Adding convenient utilities
RUN apt-get install vim -y
RUN apt install software-properties-common -y
RUN apt-get install python3-launchpadlib -y

# Adding python assets
RUN mkdir /python
RUN apt-get install python3 python3-pip -y

# Adding php assets
RUN "" | LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt update
RUN apt-get -y install lsb-release ca-certificates curl apt-transport-https
RUN curl -sSLo /tmp/debsuryorg-archive-keyring.deb https://packages.sury.org/debsuryorg-archive-keyring.deb
RUN dpkg -i /tmp/debsuryorg-archive-keyring.deb
RUN sh -c 'echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt-get update
RUN apt install php8.4-cli -y
RUN mkdir /php

CMD while : ; do sleep 1000; done

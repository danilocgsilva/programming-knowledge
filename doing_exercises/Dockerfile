FROM debian:bookworm-slim

RUN apt-get update
RUN apt-get upgrade -y

# Adding convenient utilities
RUN apt-get install vim -y

# Adding python assets
RUN mkdir python
RUN apt-get install python3 python3-pip -y

CMD while : ; do sleep 1000; done

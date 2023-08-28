FROM nginx:latest

MAINTAINER Kamil Nawrotkiewicz <kamil.nawrotkiewicz@innovcode.it>

ADD docker/local/nginx/nginx.conf /etc/nginx/
ADD docker/local/nginx/symfony.conf /etc/nginx/conf.d/

RUN rm /etc/nginx/conf.d/default.conf

CMD ["nginx"]

EXPOSE 80
EXPOSE 443

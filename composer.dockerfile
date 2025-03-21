FROM composer:latest

ENV COMPOSERUSER=resultados
ENV COMPOSERGROUP=resultados

RUN adduser -g ${COMPOSERGROUP} -s /bin/sh -D ${COMPOSERUSER}
FROM php:7-alpine

WORKDIR "/usr/src/app"

COPY [ "./src", "/usr/src/app/" ]

EXPOSE 80
VOLUME [ "/usr/src/app" ]

CMD [ "php", "-S", "0.0.0.0:80" ]

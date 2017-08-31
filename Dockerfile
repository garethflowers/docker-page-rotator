FROM php:7.1.8-alpine

WORKDIR "/usr/src/app"

COPY [ "./src", "/usr/src/app/" ]

EXPOSE 80
VOLUME [ "/usr/src/app/config" ]

HEALTHCHECK CMD wget --spider http://localhost || exit 1

CMD [ "php", "-t", "public", "-S", "0.0.0.0:80", "/usr/src/app/common/router.php" ]

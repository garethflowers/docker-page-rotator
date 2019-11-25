FROM php:7.3.12-alpine

ARG BUILD_DATE
ARG VCS_REF
ARG VERSION

LABEL org.label-schema.build-date=$BUILD_DATE \
	org.label-schema.description="Page Rotator" \
	org.label-schema.docker.cmd="docker run --detach --publish 80:80 --volume $PWD:/usr/src/app/config garethflowers/page-rotator" \
	org.label-schema.name="page-rotator" \
	org.label-schema.schema-version="1.0" \
	org.label-schema.url="https://subversion.apache.org" \
	org.label-schema.vcs-ref=$VCS_REF \
	org.label-schema.vcs-url="https://github.com/garethflowers/docker-page-rotator" \
	org.label-schema.vendor="garethflowers" \
	org.label-schema.version=$VERSION

CMD [ "php", "--docroot", "public", "--server", "0.0.0.0:80", "/usr/src/app/common/router.php" ]
EXPOSE 80
HEALTHCHECK CMD wget --spider http://localhost || exit 1
VOLUME [ "/usr/src/app/config" ]
WORKDIR /usr/src/app

COPY [ "./src", "/usr/src/app/" ]

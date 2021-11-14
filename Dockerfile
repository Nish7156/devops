FROM hshar/webapp
ADD ./devops/var/www/html/devops
FROM node AS nodebaseimg
RUN echo "do some steps that are common between stages"
RUN echo "do some more common steps"


FROM nodebaseimg AS stage-foo
RUN echo "do things for stage-foo"

FROM nodebaseimg AS stage-bar
RUN echo "do things for stage-bar"

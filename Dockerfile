FROM hshar/webapp
ADD <./devops/var/www/html/devops>
WORKDIR /code
RUN pip install -r requirements.txt
EXPPOSE 8080


FROM ubuntu:latest
RUN apt update 
RUN apt install  apache2 -y 
RUN apt install  apache2-utils -y
RUN apt install steghide -y
RUN apt clean 
COPY rabbit-hole.jpeg /var/www/html/
COPY index.html /var/www/html/
EXPOSE 80
ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]




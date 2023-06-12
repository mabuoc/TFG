FROM ubuntu:latest
ARG USER=mabdon
ARG PASS=123456789
RUN apt update
RUN apt install vsftpd -y
COPY vsftpd.conf /root
RUN cp -f /root/vsftpd.conf /etc/
RUN mkdir /anon/
EXPOSE 20-21
RUN useradd -m -s /bin/bash $USER && echo "$USER:$PASS" | chpasswd
COPY flag /home/mabdon
CMD service vsftpd start && tail - f /var/log/vsftpd.log

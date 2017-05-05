# use mysql;
# update user set plugin='' where User='root';
# flush privileges;

mysql -t -u webuser -p1111 < sql01.sql

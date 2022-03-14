service mysql start
echo "CREATE DATABASE IF NOT EXISTS $MYDB_NAME;" | mysql -u root
echo "CREATE USER IF NOT EXISTS '$MYDB_USER'@'%' IDENTIFIED BY '$MYDB_PASS';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO '$MYDB_USER'@'%' IDENTIFIED BY '$MYDB_PASS';" | mysql -u root
echo "UPDATE mysql.user SET plugin='mysql_native_password' WHERE user='root';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
service mysql stop
mysqld_safe
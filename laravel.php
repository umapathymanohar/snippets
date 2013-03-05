>command to create a new encryption key
php artisan key:generate

---------------------------------------

> add to Apache httpd.conf

<VirtualHost *:80>
   ServerName www.instapics.com
   DocumentRoot "D:/Development/htdocs/instapics/public"
   <Directory "D:/Development/htdocs/instapics/public">
   </Directory>
</VirtualHost>

---------------------------------------
> add to system32/../etc/hosts

127.0.0.1 instapics.com

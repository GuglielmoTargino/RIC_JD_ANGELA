RewriteEngine on
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteCond {REQUEST_FILENAME}
RewriteRule ^([a-zA-Z0-9]+)/([a-zA-Z0-9]+)$ $1/$2.php
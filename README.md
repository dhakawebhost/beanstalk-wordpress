# beanstalk-wordpress
Amazon Beanstlak wordpress configuration with load balancing and autosclaling
There will be .htaccess file redirection for Nginx server with load balancer where we need to set X-Forwarded-Proto header:


# BEGIN HTTPS Redirect
<IfModule mod_rewrite.c>
RewriteEngine On

# If HTTPS is off, redirect to HTTPS
RewriteCond %{HTTPS} !=on
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</IfModule>
# END HTTPS Redirect



# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress


**and wp-config.php setting after php tag:**
<?php

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/**



Thank you.

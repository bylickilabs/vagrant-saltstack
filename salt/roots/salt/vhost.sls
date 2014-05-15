/etc/apache2/sites-available/dev-confidence-startup-startup.conf:
  file.symlink:
    - target: /var/www/dev-confidence/startup-startup/config/vhost.conf

/etc/apache2/sites-enabled/dev-confidence-startup-startup.conf:
  file.symlink:
    - target: /etc/apache2/sites-available/dev-confidence-startup-startup.conf
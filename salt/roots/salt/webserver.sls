apache2_ppa:
  pkgrepo.managed:
    - ppa: ondrej/apache2

apache2:
    pkg.latest:
        - refresh: True
        - require:
            - pkgrepo: apache2_ppa

apache2-modrewrite:
    cmd.run:
        - name: |
            a2enmod rewrite
            service apache2 restart


php5_ppa:
  pkgrepo.managed:
    - ppa: ondrej/php5

php5:
    pkg.latest:
        - refresh: True
        - require:
            - pkgrepo: php5_ppa

php5-pkgs:
    pkg.installed:
        - names:
              - php5-mysql
              - php5-curl
              - php5-cli
              - php5-cgi
              - php5-dev
              - php-pear
              - php5-gd
              - php5-intl
              - php5-mysql
              - php5-pgsql

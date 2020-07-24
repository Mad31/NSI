# NSI
Documents pour enseignement NSI

## 1. Installation Apache
### 1. 1 apache2
 `apt install apache2`
 ### 1.2 Espace perso `public HTML`
 En `root` :
 '''
 a2enmod userdir
 systemctl restart apache2
 ```

 UserDir public_html
 `<Directory /home/*/public_html>
AllowOverride FileInfo AuthConfig Limit
Options MultiViews Indexes SymLinksIfOwnerMatch IncludesNoExec
</Directory>`
 ## 2. Installer PHP
 ### 2.1 installer php
 `apt install php php-mbstring`
### 2.2 Autoriser php pour les espaces personnels.
/etc/apache2/mods-enabled/php5.conf
il faut commenter :
`<IfModule mod_userdir.c>
    <Directory /home/*/public_html>
        php_admin_value engine Off
    </Directory>
</IfModule>`

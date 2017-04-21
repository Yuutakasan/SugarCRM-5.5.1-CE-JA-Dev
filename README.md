# 概要
SugarCRMは米SugarCRM社が開発した顧客管理システムです。

やれることは最新版のコミュニティ版のSugarCRM6系と大きな差はありません。
SPAではなくHTMLベースであり、ライセンスがGPLv3(つまりSaasサービスの場合、ソースコード公開義務なし)という事が違いです。
※SugarCRM6系はAPGLv3で、オンライン経由での提供でもGPL感染ありです。

このリポジトリにはSugarCRM-5.5.1-Community-Editionの日本語 開発版を転載しています。
※既に更新が停止しており、どこにも見当たらなかったため、githubに保存用に置いています。

php5.28推奨ですが、5.3系(Amazon Linux)でも動作します。
SugarCRM5.4以上では不具合が発生します。
※HHVMでも一部の機能が動作しない事を確認しています。
　互換レベルが古いHiphopPHPなら動作するかも

弊社では2017年4月21日よりGPL版を利用して開発を進めていますので、
興味のある方はご連絡ください。

takagi.yuusuke@automation.jp

# インストール手順

1.nginxをインストールする 
 こんな感じでVirtualHostを設定する

 ```nginx:virtual.conf
 server {
       listen 80;
       server_name www.example.com example.com;
       root /var/www/www.example.com/web;
       index index.html index.htm index.php;
       
       location / {
        try_files $uri $uri/ /index.php?$args =404;
       }

       location ~ \.php$ {
         try_files $uri =404;
         include fastcgi_params;
         fastcgi_split_path_info  ^(.+\.php)(/.+)$;
         fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
         fastcgi_intercept_errors on;
       }
}
```

2.php、php-fpmをインストールする

```
sudo yum install php php-fpm php-gd php-mbstring php-pecl-apc php-mysql php-mcrypt php-imap
```

/etc/php-fpm.d/www.conf に以下に追記する
```
listen.owner = nginx
listen.group = nginx
user = nginx
group = nginx

php_admin_value[error_log] = /var/log/php-fpm/www-error.log
php_admin_flag[log_errors] = on
php_admin_value[memory_limit] = 128M

php_admin_value[post_max_size] = 20M
php_admin_value[upload_max_filesize] = 20M

php_value[session.save_handler] = files
php_value[session.save_path] = /var/lib/php/session

php_admin_value[max_execution_time] = 0
php_admin_value[error_reporting] =E_WARNING & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT
php_admin_value[short_open_tag]=On

php_admin_value[date.timezone]="Asia/Tokyo""
```

3.公開ディレクトリにこのリポジトリのファイルを展開する

```
cd /var/www/www.example.com/
sudo wget https://github.com/Yuutakasan/SugarCRM-5.5.1-CE-JA-Dev/archive/master.zip
sudo unzip master.zip
rm master.zip
sudo mv master web
```

4.権限を変更する

```
sudo chown nginx:nginx -R /var/lib/php/session
sudo chmod 755 -R /var/www/www.example.com/web
sudo chown nginx:nginx -R /var/www/www.example.com/web
sudo chmod 775 -R /var/www/www.example.com/web/custom
sudo chmod 775 -R /var/www/www.example.com/web/cache
sudo chmod 775 -R /var/www/www.example.com/web/data
```

ドキュメント類は以下を参照してください。
https://sourceforge.net/projects/sugarcrm/files/SugarCRM%20Release%20Archive/SugarCRM%205.5.X/

## Deploy document

1) maak een account op c9 
2) pull uw git repository met laravel project
3) kies php als template
4) doe de composer update command in uw root folder
5) bij setting klik op ‘show hidden files’
 
6) rename de file env.example naar env
7) maak een nieuwe application key aan met deze command: 
	php artisan key:generate
	
8) zet uw public folder als rootfolder bij apache :

cat /etc/apache2/sites-enabled/001-cloud9.conf

zet bij /home/ubuntu/workspace (of andere root directory)  => /public 
 
9) open de database.php file uit de config folder
10) verander settings bij mysql: 
 
host => 127.0.0.1
database => c9
username => root
password => 

11) doe volgende commands : 
mysql-ctl cli  
use c9;
ctrl + c (om eruit te gaan)

12) doe volgende commands :
php artisan migrate
php artisan db:seed


13) activeer cronjob (om de minuut checken of een auction verlopen is): 

crontab -e
maak document leeg en typ : 

* * * * * php /home/ubuntu/workspace/artisan schedule:run

ctrl+o (write out + save)



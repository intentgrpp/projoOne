@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/Bitnami/wordpress-6.0.1-0/apache2\bin\httpd.exe" -k install -n "wordpressApache-2" -f "C:/Bitnami/wordpress-6.0.1-0/apache2\conf\httpd.conf"

net start wordpressApache-2 >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop wordpressApache-2 >NUL
"C:/Bitnami/wordpress-6.0.1-0/apache2\bin\httpd.exe" -k uninstall -n "wordpressApache-2"

:end
exit

Test task showing how to use a reverse proxy for docker-compose projects.
Docker containers:
- proxy - nginx/latest (tcp/8888 passing on backend tcp/80);
- backend - nginx/latest (tcp/80 showing client-ip-address and phpinfo);
- php-fpm - php/fpm (tcp/9000 handling php scripts). 

# beginner_php_cafe
Using this codebase:

- If you have existing lamp/wamp stack in your environment:
  - copy www to /var/www/html or public
  - create a database named "cafe" using utf8 
  - run mysqldump/schema.sql in your mysql server
  - navigate to localhost and browse
  - use admin/demo for /admin
- Elif you want to run using docker:
  -  First install docker-compose for your environment
    - https://docs.docker.com/compose/install/
  - Then run
    - docker-compose up --build
    - navigate to localhost:8080 for phpmyadmin
    - copy mysqldump/schema.sql to run and create necessary tables in cafe db
    - navigate to localhost and browse
    - use admin/demo for /admin


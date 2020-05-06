# it635-project
<h3 align="left">LAW FIRM</h3>
<p align="left"> Searching Files To Make It Easier</p>

## List
- [About](#about)
- [What is Used?](#what_is_used_in_project)
- [Services](#services)
- [Deployment](#deployment)

## About <a name = "about"></a>
My project is about searching older files/cases at a well known Law Firm. The reason why I selected to do a project on searching files is because I always kept wondering which way is easier for Attorney’s to search old files if they need to work or use it for their upcoming cases. That’s how the idea came to me and created a database that stores all the information and a web page to search or find the information according to the details they have for their files/cases.

I used so many different element which comes in Docker as it is helpful and have many sources. The files communicate with each other to search the data.

## What is used in Project? <a name="#what_is_used_in_project"></a>
- [Docker](https://www.docker.com/) which is Server Environment
  - A tool designed to make it easier to create, deploy, and run applications by using containers.
- [MySQL](https://www.mysql.com/) which is a Database
  - Open source relational database management.
- [PHP](https://www.php.net/) which is used for Creating a Website
   - It is a server side scripting that supports so many different kind of databases for example: MySQL..

## Services <a name="#services"></a>
Using of *[docker-compose.yml](https://github.com/akadam95/it635-project/blob/master/docker-compose.yml)*.

**Database** <a name="database"></a><br/>
```yml
db:
            image: mysql
            command: --default-authentication-plugin=mysql_native_password --innodb_use_native_aio=0
            volumes: 
                - ./init-sql:/docker-entrypoint-initdb.d
                # - ./mysql-db:/var/lib/mysql
            environment:
                MYSQL_ROOT_PASSWORD: it635
```
The database uses MySQL database image for relational database storage retrival and management. It is also an SQL file to setup database and use database with existing data.

**PHP** <a name="php"></a><br/>
```yml
php:
            build: php-apache-mysqli
            ports:
                - 8888:80
            volumes:
                - ./html:/var/www/html/
```
To host HTML and PHP pages in web server to have a build in docker file for PHP server. This connects them together and let it host it. 

**Adminer** <a name="adminer"></a><br/>
```yml
adminer:
            image: adminer
            ports: 
                - 8080:8080
```

It is an easy form of database management web tool to handle MySQL management and can be setup easily to use as it already a build in. It can be ready to use once setup and port forwarding is done.

## Deployment <a name="#deployment"></a>
My project environment was used from docker and its scripts which let us implement the other things in the project to run. 

URL Used:
- For Website: <localhost:8888>
- For Adminer: <localhost:8080>

Creating of Docker and starting it
```shell
docker-compose up
```

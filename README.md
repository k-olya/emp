## EMP in Docker (nginx + mariadb + php)

### run your php apps in seconds!
**tl;dr:** set `.env`, copy data to `www/`, run `up.sh`


### 0. get docker
```
curl -fsSL https://get.docker.com/ | sudo bash
```


### 1. clone the repo
```
git clone https://github.com/k-olya/emp.git my-php-app
```


### 2. set .env variables
```
cp .env.example .env
```
edit `.env`:
```
MYSQL_ROOT_PASSWORD=set-secure-password
MYSQL_DATABASE=db
MYSQL_USER=db
MYSQL_PASSWORD=set-secure-password
NGINX_PORT=8080
```
you can use `openssl rand -base64 16` to generate strong passwords


### 3. copy files (e.g. wordpress) to `www/` directory


### 4. run `sudo ./up.sh`
this will run the containers. to stop them run `sudo docker compose down`


### 5. ⚠️ USE `db` as MYSQL HOST in php apps


### 6. (optional) you can access mysql cli via `sudo ./mysql-cli.sh`


### 7. enjoy!

# docker-compose with Airflow, PHP and MySQL for a complete backend

Guide I follow: https://medium.com/@rajat.mca.du.2015/airflow-and-mysql-with-docker-containers-80ed9c2bd340

## Instructions

Docker example with Airflow, MySql 5.7, PhpMyAdmin and Php

I use docker-compose as an orchestrator. To run these containers:

```
docker-compose up -d
```

Open phpmyadmin at [http://localhost:8000](http://localhost:8000)
Open web browser to look at a simple php example at [http://localhost:8001](http://localhost:8001)
Open Airflow console [http://localhost:8080](http://localhost:8001)

## Example

To be sure that the different components chat each other create table called User and insert 1 row. 

Then you can be sure that php server read db go to [http://localhost:8001/return_user.php](http://localhost:8001/return_user.php)

To check Airflow you need to follow this guide to add the connections using Airflow dashboard: https://medium.com/@rajat.mca.du.2015/airflow-and-mysql-with-docker-containers-80ed9c2bd340

After this you can trigger "return_user" dag and check in the log.

## Deply on server

Look this guide to understand how to use docker in remote server: https://www.docker.com/blog/how-to-deploy-on-remote-docker-hosts-with-docker-compose/

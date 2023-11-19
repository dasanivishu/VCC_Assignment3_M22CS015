

# Dockerized Web Application Setup

This repository contains a Dockerized setup for a web application with three containers. Follow the steps below to build and run the containers.

## Prerequisites
- Docker installed on your system. [Install Docker](https://docs.docker.com/get-docker/)

## Build Docker Images

Navigate to the directory containing the Dockerfiles and execute the following commands to build the Docker images:

```bash
docker build -t m22cs015_01 .
docker build -t m22cs015_02 .
docker build -t m22cs015_03 .
```

## Create Docker Network

Create a Docker network named "vishal" for communication between the containers:

```bash
docker network create vishal
```

## Run Docker Containers

### Container 1
Run the first container, exposing port 8080 and connecting to the "vishal" network:

```bash
docker run -p 8080:80 --name CONM22CS015_01 --network vishal -d m22cs015_01
```

### Container 2
Run the second container, connecting to the "vishal" network:

```bash
docker run --name CONM22CS015_02 --network vishal -d m22cs015_02
```

### Container 3
Run the third container interactively, connecting to the "vishal" network:

```bash
docker run -it --name CONM22CS015_03 --network vishal m22cs015_03
```

## Access Containers

Access the third container's shell for further interaction:

```bash
docker exec -it CONM22CS015_03 /bin/bash
```

## View Web Application

install lynx in CONM22CS015_03 and navigate to [http://CONM22CS015_01](http://CONM22CS015_01) to view the web application.
```bash
lynx http://CONM22CS015_01

```
Access Web Application from Host:

To access the web application from your host machine, open a web browser and navigate to the following URL:
```bash
http://172.31.41.252:8080
```
change 172.31.41.252 with IP address of host machine

Make sure that the containers are running without errors, and the necessary ports are mapped correctly.

## Network Configuration

Check the network configuration using the following command:

```bash
docker network inspect vishal
```

The network configuration includes subnet information and container details.

## Cleanup

To stop and remove the containers and network, you can use the following commands:

```bash
docker stop CONM22CS015_01 CONM22CS015_02 CONM22CS015_03
docker rm CONM22CS015_01 CONM22CS015_02 CONM22CS015_03
docker network rm vishal
```





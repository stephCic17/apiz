# API CakePHP for Ciconia

## How to use Docker

- Install docker on your host
- run the mongo docker: ```docker run -p 27017:27017 -d mongo```
- create a Docker with the API : ```docker build . -t testapi```
- launch the docker with API: ```docker run -e MONGODB_SERVER="127.0.0.1:27017" -p 8080:80 -t testapi```
- you can now connect yourself to the API: [http://127.0.0.1:8080]
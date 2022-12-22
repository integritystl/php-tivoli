# Tivoli 

A PHP Development Environment.

## Development Tools

### Run the Unit Tests (with Docker)

```sh
docker-compose run unittest
```

### Run the Standards Check (with Docker)

This will give you the standards check report in your terminal:

```sh
docker-compose run standardscheck
```

This will generate standards check xml report:

```sh
docker-compose run standardscheckreport
```

### Generate the documentation (with Docker)

Generates the static documentation in the /docs/api/ directory

```sh
docker-compose run generatephpdoc
```

### Start the documentation and reports server (with Docker)

This is used to easily view the documentation and reports. When running this it will also generate the documentaion, unit test report, and the code standards report. To update those you can either stop the server and restart, or you may regenerate each report manually.

```sh
docker-compose --profile docs up
```

You can view the reports at <http://localhost:8088>


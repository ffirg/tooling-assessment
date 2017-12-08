# Management Tooling Assessment
Run through a survey on current and future requirements from technology management tooling (using a simple web/php service).
Create a natty diagram, overlay RH products and make suggestions around moving things foward :)

## Installing

Designed to be run inside a [minishift] container service.

### Quick and Dirty
```
$ ./startup.sh
```

### Longer Option!
```
$ minishift start
$ oc login -u developer
$ oc new-project tooling-assessment
$ oc new-app php~https://github.com/ffirg/tooling-assessment
```

## Running an Assessment
Go to the openshift console (can fire this up from the CLI using 'minishift console')
Click on the tooling-assessment project
Click on Overview.
Create a Route (using all the defaults)
Click on the openshift route exposed by the service and fill out the survey. Job done!

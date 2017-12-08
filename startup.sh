#!/usr/bin/env bash

# Start minishift if it isn't running already
if [ "`minishift status | grep "Minishift:" | awk -F: '{print $2}' | sed  's/[ ]*//'`" = "Stopped" ]
then
	minishift start
fi

# create the openshift project and deploy code
oc login -u developer -p anything
oc new-project tooling-assessment
oc new-app php~https://github.com/ffirg/tooling-assessment

# go to the openshift console for the rest
minishift console

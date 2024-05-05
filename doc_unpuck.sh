#!/usr/bin/env bash

unzip ./webHelpBFG-ADMIN-DOCUMENTATION2-all.zip -d ./doc2
mv ./doc/.git ./doc2
rm -rf ./doc
mv ./doc2 ./doc

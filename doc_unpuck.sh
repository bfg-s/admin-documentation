#!/usr/bin/env bash

unzip ./webHelpBFG-ADMIN-DOCUMENTATION2-all.zip -d ./doc2
mv ./doc/.git ./doc2
mv ./doc/writerside-search-1.0.jar ./doc2
mv ./doc/search_start.sh ./doc2
rm -rf ./doc
mv ./doc2 ./doc


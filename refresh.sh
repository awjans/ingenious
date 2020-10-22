#!/bin/bash
cd "${0%/*}"
git pull
chmod ug+x refresh.sh post-refresh.sh
./post-refresh.sh

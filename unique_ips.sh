#!/bin/bash

# Variables
LOGFILE="/home/ikyz/testtask/logs/nginx-access.log"
awk -F\" '{print $1}' $LOGFILE | awk '{print $1}' | sort | uniq | sort -r > unique_ips.list

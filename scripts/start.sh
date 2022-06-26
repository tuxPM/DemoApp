#!/bin/bash
echo starting app `date`
echo starting app `date` >> /tmp/restart.log
if [[ -f "/root/restart.sh" ]]; then
  echo running custom script restart >> /tmp/restart.log
  /root/restart.sh >> /tmp/restart.log
else
  echo no custom found >> /tmp/restart.log
fi
echo done  `date` >> /tmp/restart.log

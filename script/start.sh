#!/bin/bash
echo starting app `date`
echo starting app `date` >> /tmp/restart.log
if [[ -f "../../restart.sh" ]]; then
  echo running custom script restart >> /tmp/restart.log
  ../../restart.sh >> /tmp/restart.log
else
  echo no custom found >> /tmp/restart.log
fi
echo done  `date` >> /tmp/restart.log

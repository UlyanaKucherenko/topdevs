#!/bin/bash

 . .env
cd laravel/database/snapshots
select dump in `ls *.sql`; do
#  sed -i "use $DOCKER_DATABASE;" $dump
  cd ../../../
  docker-compose -f $DOCKER_CONFIG exec -w /dumps db bash -c "mysql -uroot -p $DOCKER_DATABASE < $dump"
  break
done

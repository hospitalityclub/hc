#!/bin/bash

# create init.mysqldump
mysqldump devel members > init.mysqldump

# create beta.mysqldump
> beta.mysqldump
mysqldump devel countries >> beta.mysqldump
mysqldump devel regions >> beta.mysqldump
mysqldump devel cities >> beta.mysqldump

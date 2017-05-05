CODES=~/Documents/codes

cd $CODES/php/sites/s02
cp $CODES/database/setup.sql files/
cp $CODES/database/sql01.sql files/
cp $CODES/database/mysql01.sh files/


git add --all
git commit -am "$(date)"
git push

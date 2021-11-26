#!/bin/bash

echo "iniciando exportacao"
date
mysqldump -h 127.0.0.1 --user=root -p --single-transaction 'maxplural' | sed -e 's/DEFINER[ ]*=[ ]*[^*]*\*/\*/' | gzip > database.sql.gz
date
echo "fim!"


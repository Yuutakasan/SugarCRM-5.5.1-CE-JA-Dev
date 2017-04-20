echo '<?php'
echo '// created: '`date +"%Y-%m-%d %H:%M:%S"`
echo '$md5_string = array('
find . -type f -exec md5sum {} \; | sed 's/\*//g' | egrep -v '.svn|*.md5' | \
    awk '{ printf("  \047%s\047 => \047%s\047,\n", $2, $1) }' | sort
echo ');'
echo '?>'
#!/usr/bin/bash

# docker exec -it wordpress-${NUM}-metricbeat bash
# ~/bin/install.bash               
# exit
# docker stop wordpress-${NUM}-metricbeat
# docker start wordpress-${NUM}-metricbeat

rm -f /usr/share/metricbeat/modules.d/beat-xpack.yml
rm -f /usr/share/metricbeat/modules.d/beat-xpack.yml.disabled
cp /root/bin/beat-xpack.yml /usr/share/metricbeat/modules.d/beat-xpack.yml
rm -f /usr/share/metricbeat/modules.d/nginx.yml
rm -f /usr/share/metricbeat/modules.d/nginx.yml.disabled
cp /root/bin/nginx.yml /usr/share/metricbeat/modules.d/nginx.yml
rm -f /usr/share/metricbeat/modules.d/php_fpm.yml
rm -f /usr/share/metricbeat/modules.d/php_fpm.yml.disabled
cp /root/bin/nginx.yml /usr/share/metricbeat/modules.d/php_fpm.yml
rm -f /usr/share/metricbeat/modules.d/system.yml
rm -f /usr/share/metricbeat/modules.d/system.yml.disabled
cp /root/bin/system.yml /usr/share/metricbeat/modules.d/system.yml
chown root.root /usr/share/metricbeat/modules.d/*

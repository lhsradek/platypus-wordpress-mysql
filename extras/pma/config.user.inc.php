<?php
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

declare(strict_types=1);

# $cfg['blowfish_secret'] = '65145d665b8e660d25ac20bf30912ab3'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * First server
 */
$i++;
/* Authentication type */
/* Server parameters */
# $cfg['Servers'][$i]['ssl'] = false;
$cfg['Servers'][$i]['ssl'] = true;
$cfg['Servers'][$i]['ssl_ca'] = '/etc/phpmyadmin/cacert.pem';
$cfg['Servers'][$i]['ssl_cert'] = '/etc/phpmyadmin/cert.pem';
$cfg['Servers'][$i]['ssl_key'] = '/etc/phpmyadmin/cert-key.pem';
$cfg['Servers'][$i]['ssl_verify'] = true;

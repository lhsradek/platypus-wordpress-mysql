<?php
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

declare(strict_types=1);

/**
 * First server
 */
$i++;
/* Authentication type */
/* Server parameters */
$cfg['Servers'][$i]['ssl'] = true;
$cfg['Servers'][$i]['ssl_verify'] = false;

<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'mymodule` (
    `id_mymodule` int(11) NOT NULL AUTO_INCREMENT,
    `lat` VARCHAR(256) NOT NULL,
    `lng` VARCHAR(256) NOT NULL,
    `center_lat` VARCHAR(256) NOT NULL,
    `center_lng` VARCHAR(256) NOT NULL,
    `zoom` int(11) NOT NULL,
    `icon` longtext NOT NULL,
    PRIMARY KEY  (`id_mymodule`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = "INSERT INTO `"._DB_PREFIX_."mymodule` (`lat`, `lng`, `center_lat`, `center_lng`, `zoom`, `icon`)
 VALUES ('40.40926169999999', '49.86709240000005', '40.100','47.500','7',
 'https://www.google.com/maps/vt/icon/name=icons/spotlight/spotlight-poi.png&scale=1')";
foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}

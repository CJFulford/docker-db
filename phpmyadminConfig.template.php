<?php

$i++;
$cfg['Servers'][$i]['verbose'] = 'Local';
$cfg['Servers'][$i]['host'] = 'db';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';
$cfg['Servers'][$i]['hide_db'] = '^(information_schema|mysql|performance_schema|sys)$';

$cfg['FirstDayOfCalendar'] = 7;
$cfg['RetainQueryBox'] = true;
$cfg['ShowDatabasesNavigationAsTree'] = false;
$cfg['NavigationDisplayLogo'] = false;
$cfg['NumRecentTables'] = 0;
$cfg['NumFavoriteTables'] = 0;
$cfg['MaxNavigationItems'] = 1000;
$cfg['NavigationTreeDefaultTabTable'] = 'sql';
$cfg['ShowCreateDb'] = false;
$cfg['DefaultTabTable'] = 'structure';

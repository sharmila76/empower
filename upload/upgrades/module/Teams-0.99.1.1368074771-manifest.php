<?php
	$manifest = array (
		 'acceptable_sugar_versions' => 
		  array (
			'regex_matches' => array (
			0 => "5\.*\.*",
			1 => "6\.*\.*"
			),
		  ),
		  'acceptable_sugar_flavors' =>
		  array(
		  	'CE'
		  ),
		  'readme'=>'README.txt',
		  'key'=>'team',
		  'author' => 'Marnus van Niekerk',
		  'description' => 'Teams module for SugarCE',
		  'icon' => '',
		  'is_uninstallable' => true,
		  'name' => 'Teams',
		  'published_date' => '2013-05-09 04:46:00',
		  'type' => 'module',
		  'version' => '0.99.1.1368074771',
		  'remove_tables' => 'prompt',
		  );
$installdefs = array (
  'id' => 'Teams',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'team',
      'class' => 'team',
      'path' => 'modules/team/team.php',
      'tab' => false,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/Users.php',
      'to_module' => 'Users',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/team.php',
      'to_module' => 'team',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/team_membershipsMetaData.php',
    ),
  ),
  //'image_dir' => '<basepath>/icons',
  'administration' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/administration/TeamsAdmin.menu.php',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/team',
      'to' => 'modules/team',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/team/metadata/subpanels/CETeams.php',
      'to' => 'modules/Users/metadata/subpanels/CETeams.php',
    ),
    2 =>
    array (
	'from' => '<basepath>/icons/default/images/icon_Teams_32.gif',
	'to' => 'custom/themes/default/images/icon_team.gif',
    ),
    3 =>
    array (
	'from' => '<basepath>/icons/default/images/Teams.gif',
	'to' => 'custom/themes/default/images/team.gif',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Users.php',
      'to_module' => 'Users',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/team.php',
      'to_module' => 'team',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    3 => 
    array (
	'from'=> '<basepath>/language/en_us.TeamsAdmin.php',
	'to_module'=> 'Administration',
	'language'=>'en_us'
	  ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/Users.php',
      'to_module' => 'Users',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/team.php',
      'to_module' => 'team',
    ),
  ),
);

<?php
/***CONFIGURATOR***/
$sugar_config['default_module_favicon'] = false;
$sugar_config['dashlet_auto_refresh_min'] = '30';
$sugar_config['enable_action_menu'] = true;
$sugar_config['stack_trace_errors'] = false;
$sugar_config['developerMode'] = true;
$sugar_config['addAjaxBannedModules'] = false;
$sugar_config['default_theme'] = 'iSales';
$sugar_config['disabled_themes'] = 'SpecINFO_Blue';
$sugar_config['email_xss'] = 'YToxMzp7czo2OiJhcHBsZXQiO3M6NjoiYXBwbGV0IjtzOjQ6ImJhc2UiO3M6NDoiYmFzZSI7czo1OiJlbWJlZCI7czo1OiJlbWJlZCI7czo0OiJmb3JtIjtzOjQ6ImZvcm0iO3M6NToiZnJhbWUiO3M6NToiZnJhbWUiO3M6ODoiZnJhbWVzZXQiO3M6ODoiZnJhbWVzZXQiO3M6NjoiaWZyYW1lIjtzOjY6ImlmcmFtZSI7czo2OiJpbXBvcnQiO3M6ODoiXD9pbXBvcnQiO3M6NToibGF5ZXIiO3M6NToibGF5ZXIiO3M6NDoibGluayI7czo0OiJsaW5rIjtzOjY6Im9iamVjdCI7czo2OiJvYmplY3QiO3M6MzoieG1wIjtzOjM6InhtcCI7czo2OiJzY3JpcHQiO3M6Njoic2NyaXB0Ijt9';
$sugar_config['passwordsetting']['generatepasswordtmpl'] = '74c20035-d711-449b-f22d-52a128d081e4';
$sugar_config['passwordsetting']['lostpasswordtmpl'] = '8a730e81-7b51-39d0-49b7-52a12893d6f7';
$sugar_config['passwordsetting']['systexpirationtype'] = '1';
$sugar_config['SAML_loginurl'] = '';
$sugar_config['SAML_X509Cert'] = '';
$sugar_config['authenticationClass'] = '';

//added sharmila. Written an action in the Email module called sendbulkmail. 
//For the acceptance of sendbulkmail action added below lines. 
$sugar_config['http_referer']['list'][] = 'localhost';
$sugar_config['http_referer']['actions'] =array( 'index', 'ListView', 'DetailView', 'EditView', 'oauth', 'authorize', 'Authenticate', 'Login', 'SupportPortal', 'sendbulkmail' ); 
/***CONFIGURATOR***/
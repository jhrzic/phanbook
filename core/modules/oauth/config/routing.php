<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */

$router->add('/oauth/:controller', [
    'module' => 'oauth',
    'controller' => 1,
]);
$router->add('/oauth/:controller/:int', [
    'module' => 'oauth',
    'controller' => 1,
    'id' => 2,
]);
$router->add('/oauth/:controller/:action/:params', [
    'module' => 'oauth',
    'controller' => 1,
    'action' => 2,
    'params' => 3,
]);



$router->add('/oauth/github/access_token', [
    'module'     => 'oauth',
    'controller' => 'login',
    'action'     => 'tokenGithub'
]);
$router->add('/oauth/google/access_token', [
    'module'     => 'oauth',
    'controller' => 'login',
    'action'     => 'tokenGoogle'
]);
$router->add('/oauth/facebook/access_token', [
    'module'     => 'oauth',
    'controller' => 'login',
    'action'     => 'tokenFacebook'
]);
$router->add('/oauth/resetpassword', [
    'module'     => 'oauth',
    'controller' => 'register',
    'action'     => 'resetpassword'
]);

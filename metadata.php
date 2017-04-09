<?php
/**
 * This piece of software is released under the MIT license. Take a look at the LICENSE file.
 *
 * Feel free to copy and change the code, but never remove the original author! Pull requests are also welcome.
 *
 * @version 1.0.0
 * @author  Stefan Krenz <krenz.stefan@googlemail.com>
 */

$moduleId = 'kyoya-de/simple-clear-temp';
$aModule = [
    'id'          => $moduleId,
    'title'       => 'Simple Clear Temp',
    'description' => 'This is an OXID module to delete all files from OXIDs temp dirextory.',
    'thumbnail'   => 'kyoya-de.github.png',
    'version'     => '1.0.0',
    'author'      => 'Stefan Krenz',
    'url'         => 'https://github.com/kyoya-de/simple-clear-temp',
    'email'       => 'info@kyoya.de',
    'extend' => [
        'navigation' => "{$moduleId}/controller/admin/sctNavigation",
    ],
    'templates' => [
        'sctheader.tpl' => "{$moduleId}/views/admin/tpl/sctHeader.tpl",
    ],
];

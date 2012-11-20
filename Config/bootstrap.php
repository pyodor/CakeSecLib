<?php
    $seclib_path = PATH_SEPARATOR . App::pluginPath('CakeSecLib') . 'Vendor' . DS . 'phpseclib' . DS . 'phpseclib';
    set_include_path(get_include_path() . $seclib_path);
    App::import('Vendor', 'phpseclib/phpseclib/Net/SFTP');
?>

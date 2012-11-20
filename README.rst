=================================================
Welcome to CakeSecLib a CakePHP Plugin
=================================================

``CakeSecLib`` automates loading phpseclib_ in CakePHP.

Installation
--------------

Clone the plugin inside your ``myapp/Plugin`` and activate it with bootstrap enabled::

    CakePlugin::loadAll(array(
        'CakeSecLib' => array('bootstrap'=>true)
    ));

Usage
--------------

Head on to phpseclib_ documentation_ of what available classes you can use.


TODO
----------------

Currently by default only SFTP loaded, will support loading all or cherry-pick. 


License
-------

``CakeSecLib`` is released under the WTFPL_ license.

Support
-----------------

Send me_ a bottle of beer or FORK_ it! :) 

.. _WTFPL: http://sam.zoy.org/wtfpl/
.. _me: dado@neseapl.com
.. _FORK: http://202.172.229.26/rhodecode/CakeSecLib/fork
.. _phpseclib: https://github.com/pyodor/phpseclib
.. _documentation: http://phpseclib.sourceforge.net/


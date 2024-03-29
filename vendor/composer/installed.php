<?php return array(
    'root' => array(
        'name' => 'shsom/shs_post_view_count',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'dealerdirect/phpcodesniffer-composer-installer' => array(
            'pretty_version' => 'v1.0.0',
            'version' => '1.0.0.0',
            'reference' => '4be43904336affa5c2f70744a348312336afd0da',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../dealerdirect/phpcodesniffer-composer-installer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpcsstandards/phpcsextra' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '253d01850056b24a0bc2eeab1b18697a98960bc0',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcsstandards/phpcsextra',
            'aliases' => array(
                0 => '1.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'phpcsstandards/phpcsutils' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => 'f627b49f14be0f9f1283a1d4ed3df60a666a0a50',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcsstandards/phpcsutils',
            'aliases' => array(
                0 => '1.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'shsom/shs_post_view_count' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '726b9b849d56d70772f1e2f5b62f7722897dadad',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'bb792cb331472b82c5d7f28fb9b8ec2d20f68826',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
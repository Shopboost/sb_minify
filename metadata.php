<?php
/**
 *
 *
 * @author      Sergey Fritzler, shopboost GmbH <info@shopboost.de>
 * @copyright   (C) 2015 shopboost GmbH
 * @link        http://www.shopboost.de
 * @created     02.10.2015
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'sb_minify',
    'title'        => 'Shopboost Minify',
    'description'  => '',
    'thumbnail'    => 'picture.png',
    'version'      => '0.1',
    'author'       => 'shopboost GmbH',
    'url'          => 'http://www.shopboost.de',
    'email'        => 'info@shopboost.de',
    'extend'       => array(
        'oxutilsview'          => 'shopboost/sb_minify/core/sb_oxutilsview',
    ),
    'files' => array(
    ),
    'blocks' => array(
    ),
    'settings' => array(
        array(
            'group' => 'minify_html',
            'name'  => 'sb_minify_html',
            'type'  => 'bool',
            'value' => '0')
    ),
    'templates' =>  array(
    )
);
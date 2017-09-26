<?php
/**
 * Q2A Flags extenstion - plugin for Question2Answer
 * @author Eryk Andrzejewski <erykandrzejewski@gmail.com>
 */

/*
    Plugin Name: Flags extenstion
    Plugin URI: https://github.com/qwercik/q2a-flags-extension
    Plugin Description: Extend capabilities of flagging system with displaying author of flag and necessity of giving flag reason 
    Plugin Version: 1.0
    Plugin Date: 2017-09-24
    Plugin Author: Eryk Andrzejewski
    Plugin Author URI: https://github.com/qwercik
    Plugin License: MIT
    Plugin Minimum Question2Answer Version: 1.5
    Plugin Update Check URI: https://raw.githubusercontent.com/qwercik/q2a-flags-extension/master/metadata.json
*/

if (!defined('QA_VERSION')) {
    header('Location: ../../');
    exit;
}

qa_register_plugin_module('event', 'flags-extension-event.php', 'flags_extension_event', 'Flags extension');

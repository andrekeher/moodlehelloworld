<?php 
$capabilities = array(
    'block/helloworld:myaddinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array('user' => CAP_ALLOW),
        'clonepermissionsfrom' => 'moodle/my:manageblocks'),

    'block/helloworld:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array('editingteacher' => CAP_ALLOW, 'manager' => CAP_ALLOW),
        'clonepermissionsfrom' => 'moodle/site:manageblocks'),

    'block/helloworld:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'legacy' => array(
            'guest' => CAP_PREVENT,
            'student' => CAP_PREVENT,
            'teacher' => CAP_PREVENT,
            'editingteacher' => CAP_PREVENT,
            'coursecreator' => CAP_PREVENT,
            'admin' => CAP_ALLOW,
            )),
    );

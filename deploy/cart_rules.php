<?php

/////////////////////////////////////////////////////////////////////////////
// Marketplace Cart Rules
/////////////////////////////////////////////////////////////////////////////

$rules = array(
    'incompatible' => array(
        'app-active-directory' => array(
            'app-google-apps',
            'app-openldap-directory',
            'app-zarafa',
            'app-zarafa-community',
            'app-zarafa-extension',
            'app-account-synchronization',
            'app-password-policies'
        ),
    ),
    'requires' => array(
        'app-remote-backup-5gb' => 'app-remote-backup',
        'app-remote-backup-10gb' => 'app-remote-backup',
        'app-remote-backup-25gb' => 'app-remote-backup',
        'app-remote-backup-50gb' => 'app-remote-backup',
        'app-remote-backup-100gb' => 'app-remote-backup',
        'app-zarafa-professional-5-users' => 'app-zarafa-professional',
        'app-zarafa-professional-10-users' => 'app-zarafa-professional',
        'app-zarafa-professional-25-users' => 'app-zarafa-professional',
        'app-zarafa-professional-50-users' => 'app-zarafa-professional',
        'app-zarafa-professional-100-users' => 'app-zarafa-professional'
    )
);

<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'administrators' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'organisations' => 'c,r,u,d',
            'reports' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'subadministrators' => 'c,r,u,d',
            'drivers' => 'c,r,u,d',
            'mechanics' => 'c,r,u,d',
            'forms' => 'c,r,u,d',
            'faults' => 'c,r,u,d',
            'vehicles' => 'c,r,u,d',
            'reports' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'subadministrator' => [
            'drivers' => 'c,r,u,d',
            'mechanics' => 'c,r,u,d',
            'forms' => 'c,r,u,d',
            'faults' => 'c,r,u,d',
            'vehicles' => 'c,r,u,d',
            'reports' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'driver' => [
            'forms' => 'r,u',
            'faults' => 'r,u',
            'profile' => 'r,u',
        ],
        'mechanic' => [
            'faults' => 'r,u',
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

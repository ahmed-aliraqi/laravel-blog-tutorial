<?php
return [
    'singular' => 'User',
    'plural' => 'Users',
    'empty' => 'No users created',

    'attributes' => [
      'name' => 'username',
      'email' => 'e-mail address',
      'password' => 'password',
      'password_confirmation' => 'password confirmation',
      'new_password' => 'new password',
    ],

    'actions' => [
      'list' => 'All users',
      'create' => 'Create new user',
      'edit' => 'Edit user',
      'delete' => 'Delete user',
    ],

    'flash' => [
      'created' => 'The user has been created successfuly.',
      'updated' => 'The user has been updated successfuly.',
      'deleted' => 'The user has been deleted successfuly.',
      'deleted-plural' => 'The users has been deleted successfuly.',
    ],
];
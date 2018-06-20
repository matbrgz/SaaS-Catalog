<?php

ORM::configure('mysql:host=localhost;dbname=homestead');
ORM::configure('username', 'homestead');
ORM::configure('password', '123456');

$this->crud = new CRUD\CRUD();

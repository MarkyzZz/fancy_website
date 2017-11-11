<?php

require_once 'helpers.php';
require_once 'database/QueryBuilder.php';
require_once 'database/Connection/Connection.php';

$config = require_once 'database/Connection/config.php';

$query = new QueryBuilder(Connection::make($config['database']));

<?php
$query = require "bootstrap.php";

//calling selectAll method in QueryBuilder Class
$tasks = $query->selectAll("todos");

//View Page of index.php
require "index.view.php";
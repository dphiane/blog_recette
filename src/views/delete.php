<?php

use App\Connection;
use App\Table\RecipeTable;
use App\Auth;

Auth::requireAdmin();
$pdo = Connection::getPDO();
$table = new RecipeTable($pdo);
$table->delete($recipe_id);
header('Location: /dashboard?delete=1');
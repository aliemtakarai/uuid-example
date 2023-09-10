<?php
require_once 'vendor/autoload.php';
/**
 * this project using ramsey/UUID 
 * https://uuid.ramsey.dev/en/stable/quickstart.html#install-with-composer
 */
use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

echo $uuid->toString();
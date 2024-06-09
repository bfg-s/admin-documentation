<?php

require 'vendor/autoload.php';

if (class_exists('Admin\\Tests\\TestCase')) {
    echo "Class Admin\\Tests\\TestCase found.\n";
} else {
    echo "Class Admin\\Tests\\TestCase not found.\n";
}

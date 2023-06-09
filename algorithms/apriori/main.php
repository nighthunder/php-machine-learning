<?php

require_once __DIR__ . '/../../vendor/autoload.php';
//it will return an instance of the Composer Autoloader
$samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
$labels  = [];

use Phpml\Association\Apriori;

/*
$support - minimum threshold of support, i.e. the ratio of samples which contain both X and Y for a rule "if X then Y"
$confidence - minimum threshold of confidence, i.e. the ratio of samples containing both X and Y to those containing X
*/

$associator = new Apriori($support = 0.5, $confidence = 0.5);
$associator->train($samples, $labels);

// predict
var_dump($associator->predict(['alpha','theta']));
var_dump($associator->predict([['alpha','epsilon'],['beta','theta']]));

// get the associator rules
//$associator->getRules();
?>
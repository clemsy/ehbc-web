<?php

include('../config/countries.fr.php');

$trads =  array(
    'restaurant'=>'Restaurants',
    'caviste'=>'Cavistes',
    'distributeur'=>'Distributeurs et importateurs',
    'retailerType1' => 'Importateurs',
    'retailerType2' => 'Cavistes',
    'retailerType3' => 'Restaurants',
);

return array_merge($trads, $countries);
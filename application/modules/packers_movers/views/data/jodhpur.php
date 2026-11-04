<?php
//SELECT name as nm,latitude as lat,longitude as lon,state_code as sc FROM `cities` WHERE state_code='PB'

$cities = array(

    array('nm' => 'Jodhpur', 'lat' => '26.23894600', 'lon' => '73.02430900', 'sc' => 'RJ'),
    array('nm' => 'Osian', 'lat' => '26.72147000', 'lon' => '72.89977000', 'sc' => 'RJ'),
    array('nm' => 'Phalodi', 'lat' => '27.13102000', 'lon' => '72.36826000', 'sc' => 'RJ'),
    array('nm' => 'Pipar', 'lat' => '26.38535000', 'lon' => '73.53790000', 'sc' => 'RJ'),

    array('nm' => 'Jodhpur BSF Trg Centre', 'lat' => '26.26450000', 'lon' => '73.00580000', 'sc' => 'RJ'),
    array('nm' => ' Bhagat Ki Kothi', 'lat' => '26.26750000', 'lon' => '73.00500000', 'sc' => 'RJ'),

    array('nm' => ' Jawahar Chowk', 'lat' => '26.29600000', 'lon' => '73.03300000', 'sc' => 'RJ'),
    array('nm' => 'Jodhpur University Campus', 'lat' => '26.27530000', 'lon' => '73.03710000', 'sc' => 'RJ'),

    array('nm' => 'Palli', 'lat' => '25.76700000', 'lon' => '73.33300000', 'sc' => 'RJ'),

    array('nm' => 'Jodhpur Railway Office ', 'lat' => '26.29700000', 'lon' => '73.02100000', 'sc' => 'RJ'),
    array('nm' => 'Patel Nagar ', 'lat' => '26.28750000', 'lon' => '73.03050000', 'sc' => 'RJ'),

    array('nm' => 'Phalodi Sadar Bazar', 'lat' => '27.13300000', 'lon' => '72.37000000', 'sc' => 'RJ'),
    array('nm' => 'Jodhpur Sojati Gate', 'lat' => '26.29350000', 'lon' => '73.02870000', 'sc' => 'RJ'),
    array('nm' => ' Shastri Nagar', 'lat' => '26.28500000', 'lon' => '73.03000000', 'sc' => 'RJ'),

    array('nm' => 'Jodhpur Cloth Market', 'lat' => '26.29550000', 'lon' => '73.02800000', 'sc' => 'RJ'),
    array('nm' => 'Balesar', 'lat' => '26.74103000', 'lon' => '72.52795000', 'sc' => 'RJ'),
    array('nm' => 'Anvana', 'lat' => '26.80000000', 'lon' => '72.50000000', 'sc' => 'RJ'),
    array('nm' => 'Agolai', 'lat' => '26.29190000', 'lon' => '73.13880000', 'sc' => 'RJ'),



    // array('nm' => 'Bilara', 'lat' => '26.18067000', 'lon' => '73.70550000', 'sc' => 'RJ'),
    // array('nm' => 'Bhopalgarh', 'lat' => '26.60000000', 'lon' => '73.75000000', 'sc' => 'RJ'),
    // array('nm' => 'Luni', 'lat' => '26.16390000', 'lon' => '73.01130000', 'sc' => 'RJ'),
    // array('nm' => 'Shergarh', 'lat' => '26.16000000', 'lon' => '72.90000000', 'sc' => 'RJ'),
    // array('nm' => 'Bap', 'lat' => '27.98904000', 'lon' => '72.56707000', 'sc' => 'RJ'),
    // array('nm' => 'Mandore', 'lat' => '26.33500000', 'lon' => '73.06100000', 'sc' => 'RJ'),
    // array('nm' => 'Soorsagar', 'lat' => '26.31500000', 'lon' => '73.07000000', 'sc' => 'RJ'),
    // array('nm' => 'Sardarpura', 'lat' => '26.27000000', 'lon' => '73.01000000', 'sc' => 'RJ'),
    // array('nm' => 'Ratanada', 'lat' => '26.28570000', 'lon' => '73.03720000', 'sc' => 'RJ'),
    // array('nm' => 'Chopasni', 'lat' => '26.26500000', 'lon' => '72.98000000', 'sc' => 'RJ'),
    // array('nm' => 'Banar', 'lat' => '26.36500000', 'lon' => '73.13000000', 'sc' => 'RJ'),
    // array('nm' => 'Balsamand', 'lat' => '26.33000000', 'lon' => '73.02000000', 'sc' => 'RJ'),
    // array('nm' => 'Pal Road', 'lat' => '26.26000000', 'lon' => '73.00000000', 'sc' => 'RJ'),
    // array('nm' => 'Air Force Area', 'lat' => '26.27000000', 'lon' => '73.05000000', 'sc' => 'RJ'),
    // array('nm' => 'Mathania', 'lat' => '26.76340000', 'lon' => '73.33620000', 'sc' => 'RJ'),
    // array('nm' => 'Khichan', 'lat' => '27.15020000', 'lon' => '72.41970000', 'sc' => 'RJ'),
    // array('nm' => 'Lohawat', 'lat' => '26.96700000', 'lon' => '72.63300000', 'sc' => 'RJ'),
    // array('nm' => 'Keru', 'lat' => '26.33170000', 'lon' => '72.96050000', 'sc' => 'RJ'),
    // array('nm' => 'Tinwari', 'lat' => '26.41880000', 'lon' => '72.96430000', 'sc' => 'RJ'),
    // array('nm' => 'Barli', 'lat' => '26.25000000', 'lon' => '73.02000000', 'sc' => 'RJ'),
    // array('nm' => 'Dhundhara', 'lat' => '26.50000000', 'lon' => '72.95000000', 'sc' => 'RJ'),
    // array('nm' => 'Dangiyawas', 'lat' => '26.43460000', 'lon' => '73.10140000', 'sc' => 'RJ'),
    
    // array('nm' => 'Bhavi', 'lat' => '26.70000000', 'lon' => '73.20000000', 'sc' => 'RJ'),


);

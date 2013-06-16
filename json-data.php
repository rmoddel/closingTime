<?php
//$arr = array ('item1'=>"I love jquery4u",'item2'=>"You love jQuery4u",'item3'=>"We love jQuery4u");
//echo json_encode($arr);


class Store
{
  public $name;
    public $title;
    public $img;
}

$starbucks = new Store();
$starbucks->name = 'starbucks';
$starbucks->title = 'Starbucks';
$starbucks->img = 'http://farm8.staticflickr.com/7284/8736593687_d3e84f8aee_m.jpg';

$bmw = new Store();	
$bmw->name = 'bmw';
$bmw->title = 'BMW';
$bmw->img = 'http://farm8.staticflickr.com/7287/8736585773_3cd58bf685_m.jpg';

$target = new Store();	
$target->name = 'target';
$target->title = 'Target';
$target->img = 'http://farm8.staticflickr.com/7281/8737764014_e83a5f771d_m.jpg';

$ups = new Store();	
$ups->name = 'ups';
$ups->title = 'UPS';
$ups->img = 'http://farm8.staticflickr.com/7287/8736585773_3cd58bf685_m.jpg';

$office_depot = new Store();	
$office_depot->name = 'office_depot';
$office_depot->title = 'Office Depot';
$office_depot->img = 'http://farm8.staticflickr.com/7286/8737763776_c74891e015_m.jpg';

$ferrari = new Store();	
$ferrari->name = 'ferrari';
$ferrari->title = 'Ferrari';
$ferrari->img = 'http://farm8.staticflickr.com/7288/8739392800_6ca7cb5c15_m.jpg';

$cadillac = new Store();	
$cadillac->name = 'cadillac';
$cadillac->title = 'Cadillac';
$cadillac->img = 'http://farm8.staticflickr.com/7281/8739392798_fabd322beb_m.jpg';

$pizza_hut = new Store();	
$pizza_hut->name = 'pizza_hut';
$pizza_hut->title = 'Pizza Hut';
$pizza_hut->img = 'http://farm8.staticflickr.com/7287/8736588667_543ff6e016_m.jpg';

$michelin = new Store();	
$michelin->name = 'michelin';
$michelin->title = 'Michelin';
$michelin->img = 'http://farm8.staticflickr.com/7282/8739392808_2126354980_m.jpg';

$british_petroleum = new Store();	
$british_petroleum->name = 'british_petroleum';
$british_petroleum->title = 'British Petroleum';
$british_petroleum->img = 'http://farm8.staticflickr.com/7283/8737706610_df8b49ea77_m.jpg';


$dunkin_donuts = new Store();	
$dunkin_donuts->name = 'dunkin_donuts';
$dunkin_donuts->title = 'Dunkin Donuts';
$dunkin_donuts->img = 'http://farm8.staticflickr.com/7288/8738273511_5946f44287_m.jpg';


$land_rover = new Store();	
$land_rover->name = 'land_rover';
$land_rover->title = 'Land Rover';
$land_rover->img = 'http://farm8.staticflickr.com/7288/8739392818_940df696f4_m.jpg';


$chevrolet = new Store();	
$chevrolet->name = 'chevrolet';
$chevrolet->title = 'Chevrolet';
$chevrolet->img = 'http://farm8.staticflickr.com/7287/8738273523_3a739ce064_m.jpg';

$stores = array($starbucks, $target, $ups, $office_depot, $ferrari, $cadillac, $pizza_hut, $michelin, $british_petroleum, $dunkin_donuts, $land_rover, $chevrolet);

echo json_encode($stores);

?>

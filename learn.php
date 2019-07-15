<?php
/*
 * http://localhost:8000
 */
echo 2222222;
$name       = 'Batata';
$data_array = array(
	1,
	2,
	3,
	'22',
	'Harra'
);

?>

<h1>Hello <?php echo $name; ?></h1>
<?php
//$count = 0;
//foreach ( $data_array as $item ) {
//    if($count < 2){
//	    ?>
<!--        <h2>--><?php //echo $item; ?><!--</h2>-->
    <!--	    --><?php
//    }
//    $count = $count + 1;
//
//}
for ( $index = 0; $index < count( $data_array ); $index ++ ) {
	$item = $data_array[ $index ];
	?>
	<h2><?php echo $item; ?></h2>
	<?php
}
function add( $a, $b ) {
	return $a + $b;
}

echo "Sum of 10 + 10 = " . add( 10, 10 ) . '2';
echo '<br>';
class User {
	public $name = '';
	
	public function __construct( $name ) {
		$this->name = $name;
	}
	
	public function hello() {
		return 'Hello ' . $this->name;
	}
}

$my_user = new User('Gaby');

echo $my_user->hello();

$users = [];
$users[]= new User('Bassel');
$users[] = new User('Raed');

var_dump($data_array[3]);
var_dump($users[1]);
var_dump($my_user);
//
//require_once
//require
//include_once
//include

?>

<h3><?= $name ?></h3>



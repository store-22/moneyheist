<?php
/*
 * Template Name: casino
 * description: >-
  Page template without sidebar
 */
get_header();
echo "fix this";
echo "<br>";
echo "fix this";
echo "<br>";
echo "fix this";
echo "<br>";
echo "fix this";
echo "<br>";
echo "fix this";
echo "<br>";
echo "fix this";
echo "<br>";
echo "fix this";
class A{
    protected $some_var;
    function __construct(){
        $this->some_var = 'the value of A is apple';
    }
    function echo_some_var(){
        echo $this->some_var;
    }
}

class B extends A{
    function __construct(){
        $this->some_var = 'value added in B';
    }
}
$a = new A;
$a->echo_some_var();
$b = new B;
$b->echo_some_var();
add_action('wp_footer', 'karnan');
function karnan(){
    echo "things going good in all stages";
}
echo "<br>";
$color = 'black';
switch($color) {
     case 'red':
    	 echo "the color is red";
	 break;
	 case 'orange': 
	     echo "the color is orange";
     break;
	 default:
	     echo "the color either red or orange";
}

		$pages = get_pages();
		$pages_select = [];
		foreach( $pages as $page ) {
			if( !empty( $page->post_title ) ) {
				$pages_select["$page->ID"] = $page->post_title;
			}
		}


echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

print_r(get_labels());
get_footer();
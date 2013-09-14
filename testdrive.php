<?php
	echo "Hello World";
?>
<br/>
<pre>
<?php
	$test = 5;
	print_r($test);
	$test = "sompop"; 
	print_r($test);
	$test = array(1,2,3,4,5,"kak");
	print_r($test);
?>
</pre>
<br/>
<?php
	$a = 5;
	if($a == 20)
		echo "<b>woo</b>";
	else if($a == 5)
		echo "ahhhh";
	else
		echo "cool";
?>
<br/>
Template
<?php
	$template = "silver";
	if($template == "silver") { ?>
		<h2>Silver Template</h2>
		<p>Some Content</p>
<?php } else { ?>
		<h2> Other Template </h2>
		<p>Some Content</p>
<?php 
	}
?>
<br/>
<?php 
	$names = array("sompop", "sompap", "cool", "kak");
	$names[0] = "ppp";
	for($i = 0; $i < count($names); $i++)
	{
		echo $names[$i]."<br/>";// . = + string
	}
?>
<br/>
<?php
	$k = 20;
	while($k > 0){ ?>
		<b>Count <?php echo $k; ?></b>
<?php
		$k--;
	}
?>
<br/>
<pre>
<?php
	$passwords = array(
		"sompop" => "1234",
		"admin" => "1q2w3e4r"
	);
	print_r($passwords)
?>
</pre>
<br/>
Testing<br/>
<?php
	echo $passwords['admin'];
?>
<br/>
<pre>
<?php
	$peoples = array(
		"sompop" => array(
			"password" => "1234",
			"age" => 25,
			"lastname" => "kulapalanont"
		),
		"admin" => array(
			"password" => "1q2w3e4r",
			"age" => 30,
			"lastname" => "jfk"
		)

	);
?>
</pre>
Testing<br/>
<?php
	$people = $peoples["sompop"];
	echo "{$people['lastname']} age = {$people['age']}";	
?>
<h3>Show Each</h3>
<?php
	foreach ($peoples as $key => $value) {
		# code...
		echo "people <b>'{$key}'</b> got password {$value['password']} <br/>";
	}
?>
<br/>
<pre>
<?php
	$people = new StdClass;
	$people->name = "sompop";
	$people->lastname = "kulapalanont";
	$people->age = 20;
	print_r($people);
?>
</pre>
<h3>Testing</h3>
<?php
	echo $people->name;
?>
<h3> Mix </h3>
<pre>
<?php
	$colors = array();
	$max_color = 5;
	for($i =0 ; $i < $max_color; $i++)
	{
		$gen_color = new StdClass;
		$gen_color->red = floor(rand(0, 255));
		$gen_color->green = floor(rand(0, 255));
		$gen_color->blue = floor(rand(0, 255));
		//$colors[count($colors)] = $gen_color;
		array_push($colors, $gen_color);
	}
	print_r($colors);
?>
</pre>
<h3>Usage</h3>
<?php foreach ($colors as $color) { ?>
	<div style="width:50px;height:50px;background-color:rgb(<?php echo $color->red; ?>,<?php echo $color->green; ?>,<?php echo $color->blue; ?>)">

	</div>
<?php
}
?>
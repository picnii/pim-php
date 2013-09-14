<?php
	$peoples = array();
	$people = new stdClass;
	$people->name = "sompop";
	$people->lastname = "kulapalanont";
	$people->age = 25;
	$people->color = new stdClass;
	$people->color->red = 255;
	$people->color->green = 255;
	$people->color->blue = 255;
	$people->image = "http://t2.gstatic.com/images?q=tbn:ANd9GcRu0Surpg5w0v2fJKs9Qd187Loz4QuzNHkPhRTeL_Z23BYuCidi5g";
	array_push($peoples, $people);

	$people = new stdClass;
	$people->name = "admin";
	$people->lastname = "1235";
	$people->age = 30;
	$people->color = new stdClass;
	$people->color->red = 250;
	$people->color->green = 20;
	$people->color->blue = 60;
	$people->image = "http://f.ptcdn.info/612/009/000/1378963897-2013040401-o.jpg";
	array_push($peoples, $people);

//	print_r($peoples);
?>












<?php foreach($peoples as $people){ ?>
	<div style="background-color:rgb(<?php echo $people->color->red; ?>, <?php echo $people->color->green; ?>, <?php echo $people->color->blue; ?>)">
		<h2><?php echo $people->name; ?> <?php echo $people->lastname; ?> </h2>
		<img src="<?php echo $people->image; ?>" />
		<p>age = <?php echo $people->age; ?></p>
	</div>
<?php } ?>

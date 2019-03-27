<?php
  $error="";
  ?>
  	<?php foreach ($errors as $error) : ?>
	<script>alert("<?php echo $error; ?>")</script>
  	<?php endforeach ?>

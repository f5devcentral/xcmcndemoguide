<?php
$doc = [];

$dir = getcwd() . '/documents/';
$scan = scandir($dir);
$hits =0;
foreach($scan as $file)
{
	
	if ($file != "." && $file != "..")
    {
		array_push ($doc, $file);
		$hits ++;
    }

}

if ($hits == 0)
{
	$class = "incomplete";
	$icon = "os-icon-close";
	$style_1 = "style='border-color:red'";
	$style_2 = "style='color:red'";
}
else
{
	$class = "complete";
	$icon = "os-icon-check";
	$style_1 = "";
	$style_2 = "";	
}

?> 

  <div class="element-wrapper compact" style="padding-bottom:0px">
	<div class="element-box-tp">
	  <div class="todo-list">
		<a class="todo-item profile-tile-box" <?php echo $style_1; ?> data-target="#uploaded_doc" data-toggle="modal" id="my_docs">
		  <div class="ti-info">
			<div class="ti-header">
			  Upload Tax Documents
			</div>
			<div class="ti-sub-header">
			  You uploaded <b><?php echo $hits; ?></b> documents
			</div>
		  </div>
		  <div class="ti-icon">
			<i class="os-icon <?php echo $icon; ?>" <?php echo $style_2; ?>></i>
		  </div>
		</a>
	  </div>
	</div>
  </div>

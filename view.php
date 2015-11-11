<?php
	header('Content-Type: text/html; charset=utf-8');
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header('Cache-Control: post-check=0, pre-check=0', FALSE);
	header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Describable Textures Dataset</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="UTF-8">
    <meta content=
    "Dataset of textures accompanying Describing Textures in the Wild dataset"
    name="description"><!-- Latest compiled and minified CSS -->
    <link href=
    "//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel=
    "stylesheet"><!-- Optional theme -->
    <link href=
    "//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"
    rel="stylesheet">
    <link href="css/site-specific.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://code.jquery.com/jquery.js">
    </script>
    <style type="text/css">
    </style>
    <link href=
    "//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"
    rel="stylesheet">
    <script src=
    "//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=
    "//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
    </script>
    <script src="js/rendering.js">
    </script>
    <script src="js/util.js">
    </script>
</head>
<body>
    <?php
		include("parts/header.php");		
	?>	
    <div class="container" style="height:50px;"></div>
    <div class="container">
        <div class="container">
            <h1 id="crt_categ">Currently viewing:</h1>
            <ul class="pager">
                <li class="previous disabled">
                    <a href="view.php?categ=category" id="prev_link"></a>
                </li>
                <li class="next">
                    <a href="view.php?categ=blotchy" id="next_link"></a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="all_thumbs col-xs-12 col-sm-6 col-md-8 col-lg-9">
                    <div id="thumbs">
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-4 col-lg-3">
                    <div id="sticky-anchor"></div>
                    <div id="sticky">
                        <h3>Preview</h3>
                        <p>Click an image to view it and details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
		include('parts/footer.php');
	?>

    <script type="text/javascript">
      var NUM_PER_ROW = 12;
      var CATEGORY="banded";
      CATEGORY = gup("categ");
      load_category_images(CATEGORY);
    </script>
</body>
</html>
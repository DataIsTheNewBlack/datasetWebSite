<?php
	header('Content-Type: text/html; charset=utf-8');
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
    <div class="container">
        <div class="container" id="title-preview" style="padding-top: 20px;">
            <h1 class="page-header">Describable Textures Dataset (DTD)</h1>
            <p>The <b><i>Describable Textures Dataset (DTD)</i></b> is designed
            as an evolving dataset. We plan to release new versions of the
            data, and annotations periodically.</p>
            <p>The current release is DTD-R1.0.1.</p>
            <h2>DTD R1.0.1 (September 2014)</h2>
            <p>Minor improvement. Updated the splits files to reflect the
            correct image names and follow the 1/3 train, 1/3 validation and
            1/3 test split.</p>
            <p>The images and labels are unchanged.</p>
            <p>Please refer to the <a href="index.html#downloads">Downloads</a>
            section for the current release.</p>
            <h2>DTD R1 (May 2014)</h2>
            <table>
                <tbody>
                    <tr>
                        <td><b>Filename</b></td>
                        <td><b>Description</b></td>
                        <td><b>Size</b></td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href="download/dtd-r1.tar.gz">dtd-r1.tar.gz</a>
                        </td>
                        <td class="tdleft">
                            The package contains:
                            <ul>
                                <li>Dataset images, train, validation and
                                test.</li>
                                <li>Ground truth annotations and splits used
                                for evaluation.</li>
                                <li>imdb.mat file, containing a struct holding
                                file names and ground truth labels.</li>
                            </ul>
                        </td>
                        <td>621M</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "download/dtd-r1-labels.tar.gz">dtd-r1-labels.tar.gz</a>
                        </td>
                        <td class="tdleft">
                            Annotations and splits
                            <ul>
                                <li>Ground truth annotations: key attributes,
                                joint attributes.</li>
                                <li>Splits of the data into train, val and
                                test, as used in our experiments.</li>
                            </ul>
                        </td>
                        <td>177K</td>
                    </tr>
                </tbody>
            </table>
            <div class="container"></div>
        </div>
    </div>
	<?php
		include('parts/footer.php');
	?>
    <script type="text/javascript">
      var NUM_PER_ROW = 12;
      init();
    </script>
</body>
</html>
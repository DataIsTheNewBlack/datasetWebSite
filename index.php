<?php
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Describable Textures Dataset</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="UTF-8">
    <meta content="Dataset of textures accompanying Describing Textures in the Wild dataset" name="description"><!-- Latest compiled and minified CSS -->
	
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"><!-- Optional theme -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/site-specific.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="css/normalize.css" rel="stylesheet">
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src= "//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/rendering.js"></script>
    <script src="js/util.js"></script>
</head>

<body>
	<?php
		include('parts/header.php');
	?>
    <div class="container">
        <div class="container" id="title-preview" style="padding-top: 20px;">
            <h1 class="page-header">Describable Textures Dataset (DTD)</h1>
            <div class="container">
                <div id="thumbnails">
                </div>
            </div>
            <p>
				The <b><i>Describable Textures Dataset (DTD)</i></b> is an evolving collection of textural images in the wild, annotated with a series of human-centric attributes, inspired by the perceptual
				properties of textures. This data is made available to the computer vision community for research purposes.
			</p>
			<a class="btn btn-primary btn-lg" href="download/dtd-r1.0.1.tar.gz"><span class="glyphicon glyphicon-download"></span> Download dataset</a>
            <a class="btn btn-success btn-lg" href="download/desctex.tar.gz"><span class="glyphicon glyphicon-pencil"></span> Download code</a> <a class="btn btn-default btn-lg" href="evaluate.php"><span class="glyphicon glyphicon-ok"></span> Evaluation</a> <a class="btn btn-default btn-lg" href="#citation"><span class="glyphicon glyphicon-book"></span> Citation</a>
        </div>
        <div class="container">
            <a id="overview"></a>
            <h2>Overview</h2>
            <p>
				Our ability of vividly describing the content of images is a
				clear demonstration of the power of human visual system. Not only
				we can recognise objects in images (e.g. a cat, a person, or a
				car), but we can also describe them to the most minute details,
				extracting an impressive amount of information at a glance. But
				visual perception is not limited to the recognition and description
				of objects. Prior to high-level semantic understanding, most
				textural patterns elicit a rich array of visual impressions. We
				could describe a texture as "polka dotted, regular, sparse, with
				blue dots on a white background"; or as "noisy, line-like, and
				irregular".
			</p>
            <p>
				Our aim is to reproduce this capability in machines.
				Scientifically, the aim is to gain further insight in how textural
				information may be processed, analysed, and represented by an
				intelligent system. Compared to classic task of textural analysis
				such as material recognition, such perceptual properties are much
				richer in variety and structure, inviting new technical
				challenges.
			</p>
            <p>
				<b>DTD</b> is a texture database, consisting of 5640 images,
				organized according to a list of 47 terms (categories) inspired
				from human perception. There are 120 images for each category.
				Image sizes range between 300x300 and 640x640, and the images
				contain at least 90% of the surface representing the category
				attribute. The images were collected from <a href="https://images.google.com/">Google</a> and <a href="https://www.flickr.com/">Flickr</a> by entering our proposed
				attributes and related terms as search queries. The images were
				annotated using Amazon Mechanical Turk in several iterations. For
				each image we provide <b>key attribute</b> (main category) and a
				list of <b>joint attributes</b>.
			</p>
            <p>
				The data is split in three equal parts, in train, validation and
				test, 40 images per class, for each split. We provide the ground
				truth annotation for both key and joint attributes, as well as the
				10 splits of the data we used for evaluation.
			</p>
            <p></p>
        </div>
        <div>
            <a id="citation"></a>
            <h2>Related paper</h2>
            <ul>
                <li>M.Cimpoi, S. Maji, I. Kokkinos, S. Mohamed, A. Vedaldi, <b>
                    <i>"Describing Textures in the Wild"</i></b> ( <a href=
                    "http://www.robots.ox.ac.uk/~vgg/publications/2014/Cimpoi14/cimpoi14.pdf">
                    PDF</a> | <a href=
                    "doc/textures-poster-cvpr14.pdf">Poster</a> )
                </li>
            </ul>
            <div class="panel panel-default">
                <pre>
	@InProceedings{cimpoi14describing,
		Author    = {M. Cimpoi and S. Maji and I. Kokkinos and S. Mohamed and and A. Vedaldi},
		Title     = {Describing Textures in the Wild},
		Booktitle = {Proceedings of the {IEEE} Conf. on Computer Vision and Pattern Recognition ({CVPR})},
		Year      = {2014}
	}		
				</pre>
            </div>
        </div>
        <div class="container" id="downloads">
			<a id="downloads"></a>
            <h2>Downloads</h2>
            <table>
                <tbody>
                    <tr>
                        <td><b>Filename</b></td>
                        <td><b>Description</b></td>
                        <td><b>Size</b></td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href="download/README.txt">README.txt</a>
                        </td>
                        <td class="tdleft">
                            README file describing:
                            <ul>
                                <li>Dataset structure.</li>
                                <li>Ground truth annotations: key attributes
                                and joint attributes.</li>
                            </ul>
                        </td>
                        <td>185K</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "download/dtd-r1.0.1.tar.gz">dtd-r1.0.1.tar.gz</a>
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
                        <td>625M</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "download/dtd-r1.0.1-labels.tar.gz">dtd-r1.0.1-labels.tar.gz</a>
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
                        <td>1.4M</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "download/dtd-r1-decaf_feats.tar.gz">dtd-r1-decaf_feats.tar.gz</a>
                        </td>
                        <td class="tdleft">Compressed decaf_feats.mat,
                        containing a 5640x4096 matrix, represented DeCAF
                        features for the images from DTD.<br>
                        Each row represents the 4096 dimensional feature vector
                        for one image, assuming images are sorted by name.</td>
                        <td>82M</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container" id="acknowledge">
            <h2>Acknowledgements</h2>
            <p>
				This research is based on work done at the 2012 CLSP Summer
				Workshop, and was partially supported by NSF Grant #1005411, ODNI
				via the JHU-HLTCOE and Google Research. Mircea Cimpoi was supported
				by the ERC grant VisRec no. 228180 and Iasonas Kokkinos by
				ANR-10-JCJC-0205.
			</p>
            <p>
				The development of the describable textures dataset started in
				June and July 2012 at the Johns Hopkins Centre for Language and
				Speech Processing (CLSP) Summer Workshop. The authors are most
				grateful to Prof. Sanjeev Khudanpur and Prof. Greg Hager.
			</p>
        </div>
    </div>
    <script type="text/javascript">
      var NUM_PER_ROW = 12;
      init();
    </script>
    <div id="window-resizer-tooltip" style="display: none;">
        <a href="#" title="Edit settings"></a><span class="tooltipTitle">Window
        size:</span> <span class="tooltipWidth" id="winWidth">1680</span> x
        <span class="tooltipHeight" id="winHeight">1010</span><br>
        <span class="tooltipTitle">Viewport size:</span> <span class=
        "tooltipWidth" id="vpWidth">1654</span> x <span class="tooltipHeight"
        id="vpHeight">70</span>
    </div>
	<?php
		include('parts/footer.php');
	?>
</body>
</html>
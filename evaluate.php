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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel= "stylesheet"><!-- Optional theme -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/site-specific.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://code.jquery.com/jquery.js"></script>
    <style type="text/css"></style>
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"
    rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/rendering.js"></script>
    <script src="js/util.js"></script>
</head>
<body>
    <?php
		include("parts/header.php");		
	?>
    <div class="container">
        <div class="container">
            <p>The results reported on this page are evaluated on DTD R1
            (May14) release, and may be slightly different from the ones
            reported in the paper.</p>
            <h2>Feature evaluation BRO !</h2>
            <p>In this section we present evaluating a series of local
            descriptors on our dataset.</p>
            <p>SIFT (and its variation, root SIFT) perform best.</p>
            <p>Please refer to the paper for details about the evaluation</p>
            <table>
                <tbody>
                    <tr>
                        <td rowspan="2">Local descriptor</td>
                        <td colspan="4">Kernel</td>
                    </tr>
                    <tr>
                        <td>Linear</td>
                        <td>Hellinger</td>
                        <td>add-chi2</td>
                        <td>exp-chi2</td>
                    </tr>
                    <tr>
                        <td class="tdleft">MR8</td>
                        <td>15.36 +/- 0.58</td>
                        <td>18.93 +/- 0.54</td>
                        <td>22.49 +/- 0.79</td>
                        <td>28.24 +/- 1.06</td>
                    </tr>
                    <tr>
                        <td class="tdleft">LM</td>
                        <td>17.47 +/- 1.33</td>
                        <td>24.23 +/- 1.47</td>
                        <td>29.34 +/- 1.59</td>
                        <td>36.59 +/- 1.76</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Patches 3x3</td>
                        <td>13.56 +/- 0.76</td>
                        <td>20.55 +/- 1.14</td>
                        <td>23.93 +/- 1.08</td>
                        <td>28.02 +/- 1.63</td>
                    </tr>
                    <tr>
                        <td class="tdleft">Patches 7x7</td>
                        <td>16.64 +/- 0.98</td>
                        <td>25.59 +/- 1.23</td>
                        <td>29.62 +/- 1.67</td>
                        <td>34.18 +/- 2.00</td>
                    </tr>
                    <tr>
                        <td class="tdleft">LBPu</td>
                        <td>7.35 +/- 0.64</td>
                        <td>7.68 +/- 0.69</td>
                        <td>11.41 +/- 0.59</td>
                        <td>19.07 +/- 1.64</td>
                    </tr>
                    <tr>
                        <td class="tdleft">LBP-VQ</td>
                        <td>19.14 +/- 1.37</td>
                        <td>21.49 +/- 1.33</td>
                        <td>26.47 +/- 1.64</td>
                        <td>32.11 +/- 2.10</td>
                    </tr>
                    <tr>
                        <td class="tdleft">root-SIFT</td>
                        <td>30.82 +/- 1.65</td>
                        <td>42.03 +/- 1.61</td>
                        <td>46.10 +/- 1.76</td>
                        <td>49.45 +/- 2.00</td>
                    </tr>
                    <tr>
                        <td class="tdleft">SIFT</td>
                        <td>33.05 +/- 1.86</td>
                        <td>42.99 +/- 1.78</td>
                        <td>47.27 +/- 1.93</td>
                        <td>51.08 +/- 2.07</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <h2>Encoding evaluation</h2>
            <p>In this section we present evaluating various encodings (FV,
            BoVW, VLAD, LLC, KCB), for the best performing descriptor (SIFT) on
            the existing texture and material datasets.</p>
            <p>We also compare these results with DeCAF (FC6) and the
            combination of IFV SIFT and DeCAF features, which performs
            best.</p>
            <p>Numbers on DTD (and DTD-J) are slightly different from the
            paper, due to some additional cleanup of the dataset.</p>
            <p>Mean accuracy (mACC) is reported (unless stated otherwise),
            averaged across the standard number of splits, according to
            evaluation protocols. For DTD, the results are averaged over the 10
            splits we provide together with the data.</p>
            <table>
                <tbody>
                    <tr>
                        <td rowspan="2">Dataset</td>
                        <td colspan="5">SIFT</td>
                        <td rowspan="2">DeCAF</td>
                        <td rowspan="2">IFV + DeCAF</td>
                    </tr>
                    <tr>
                        <td>IFV</td>
                        <td>BOVW</td>
                        <td>VLAD</td>
                        <td>LLC</td>
                        <td>KCB</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www1.cs.columbia.edu/CAVE/software/curet/">CUReT</a>
                        </td>
                        <td>99.54 +/- 0.37</td>
                        <td>98.08 +/- 0.88</td>
                        <td>99.05 +/- 0.60</td>
                        <td>97.20 +/- 1.09</td>
                        <td>98.29 +/- 0.86</td>
                        <td>98.93 +/- 0.41</td>
                        <td>99.79 +/- 0.16</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www.cfar.umd.edu/~fer/website-texture/texture.htm">
                            UMD</a>
                        </td>
                        <td>99.18 +/- 0.43</td>
                        <td>98.06 +/- 0.84</td>
                        <td>99.40 +/- 0.36</td>
                        <td>98.36 +/- 0.69</td>
                        <td>98.01 +/- 0.91</td>
                        <td>97.38 +/- 0.72</td>
                        <td>99.52 +/- 0.31</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www-cvr.ai.uiuc.edu/ponce_grp/data/#texture">
                            UIUC</a>
                        </td>
                        <td>97.18 +/- 0.76</td>
                        <td>94.38 +/- 1.25</td>
                        <td>97.27 +/- 0.89</td>
                        <td>93.50 +/- 1.62</td>
                        <td>91.40 +/- 1.45</td>
                        <td>95.46 +/- 0.85</td>
                        <td>98.96 +/- 0.51</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www.nada.kth.se/cvap/databases/kth-tips/">KTH-TIPS</a>
                        </td>
                        <td>99.71 +/- 0.38</td>
                        <td>98.61 +/- 1.01</td>
                        <td>99.18 +/- 0.83</td>
                        <td>98.11 +/- 0.84</td>
                        <td>98.55 +/- 0.83</td>
                        <td>98.39 +/- 0.77</td>
                        <td>99.83 +/- 0.23</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www.nada.kth.se/cvap/databases/kth-tips/">KTH-TIPS2-a</a>
                        </td>
                        <td>82.52 +/- 5.31</td>
                        <td>74.76 +/- 5.41</td>
                        <td>77.60 +/- 4.31</td>
                        <td>75.69 +/- 5.79</td>
                        <td>72.32 +/- 4.51</td>
                        <td>77.70 +/- 1.95</td>
                        <td>84.35 +/- 1.83</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://www.nada.kth.se/cvap/databases/kth-tips/">KTH-TIPS2-b</a>
                        </td>
                        <td>69.26 +/- 0.88</td>
                        <td>58.41 +/- 2.16</td>
                        <td>61.78 +/- 2.29</td>
                        <td>57.56 +/- 2.36</td>
                        <td>58.28 +/- 2.19</td>
                        <td>70.46 +/- 1.80</td>
                        <td>75.95 +/- 2.85</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://aloi.science.uva.nl/public_alot/">ALOT</a>
                        </td>
                        <td>98.44 +/- 1.22</td>
                        <td>93.53 +/- 1.91</td>
                        <td>97.75 +/- 1.42</td>
                        <td>92.75 +/- 1.87</td>
                        <td>93.14 +/- 1.93</td>
                        <td>92.92 +/- 1.52</td>
                        <td>98.99 +/- 0.65</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://people.csail.mit.edu/celiu/CVPR2010/FMD/">FMD</a>
                        </td>
                        <td>58.11 +/- 1.72</td>
                        <td>49.53 +/- 1.87</td>
                        <td>54.84 +/- 1.76</td>
                        <td>50.43 +/- 1.56</td>
                        <td>45.06 +/- 1.92</td>
                        <td>57.56 +/- 1.16</td>
                        <td>65.63 +/- 1.41</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://lucy.robots.ox.ac.uk/data/dtd/index.html#downloads">
                            DTD</a>
                        </td>
                        <td>58.59 +/- 2.04</td>
                        <td>53.55 +/- 1.53</td>
                        <td>57.34 +/- 1.49</td>
                        <td>52.89 +/- 1.52</td>
                        <td>51.08 +/- 1.88</td>
                        <td>52.50 +/- 1.26</td>
                        <td>64.71 +/- 1.66</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://lucy.robots.ox.ac.uk/data/dtd/index.html#downloads">
                            DTD (mAP)</a>
                        </td>
                        <td>60.31 +/- 2.78</td>
                        <td>52.17 +/- 2.17</td>
                        <td>58.47 +/- 2.36</td>
                        <td>52.28 +/- 1.46</td>
                        <td>49.68 +/- 2.49</td>
                        <td>51.34 +/- 1.56</td>
                        <td>66.71 +/- 2.28</td>
                    </tr>
                    <tr>
                        <td class="tdleft">
                            <a href=
                            "http://lucy.robots.ox.ac.uk/data/dtd/index.html#downloads">
                            DTD-J (mAP)</a>
                        </td>
                        <td>60.63 +/- 2.35</td>
                        <td>53.57 +/- 1.89</td>
                        <td>58.93 +/- 1.93</td>
                        <td>53.22 +/- 1.25</td>
                        <td>51.04 +/- 2.12</td>
                        <td>51.73 +/- 1.51</td>
                        <td>66.47 +/- 1.86</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <h2>Describable attributes as representation</h2>
        <p>Besides being able to recognize describable attributes, one could
        use these attributes as texture descriptors. To achieve this, we
        propose using the scores from our 47 texture classifiers as a
        descriptor.</p>
        <p>Given the low dimensionality (47D), it is convenient to use an RBF
        kernel for this descriptor. It is interesting to note that the proposed
        DTD descriptor <b><i>alone</i></b>, trained using IFV and DeCAF
        features, with an RBF kernel is better (+6%, KTH-TIPS2-b) or similar
        (+0.6% FMD) to the previous state od the art.</p>
        <p>Further, we explored feature combinations, obtaining up to 11%
        improvement on both analyzed datasets.</p>
        <p>Please refer to the paper for more details about this set of
        experiments</p>
        <table>
            <tbody>
                <tr>
                    <td><b>Feature</b></td>
                    <td><b>KTH-TIPS2-b</b></td>
                    <td><b>FMD</b></td>
                </tr>
                <tr>
                    <td class="tdleft">IFV</td>
                    <td>69.36 +/- 0.81</td>
                    <td>58.22 +/- 1.46</td>
                </tr>
                <tr>
                    <td class="tdleft">DTD_LIN</td>
                    <td>64.07 +/- 3.07</td>
                    <td>45.70 +/- 1.33</td>
                </tr>
                <tr>
                    <td class="tdleft">DTD_RBF</td>
                    <td>67.68 +/- 2.18</td>
                    <td>50.94 +/- 1.46</td>
                </tr>
                <tr>
                    <td class="tdleft">DTD(FVCAF)_LIN</td>
                    <td>70.31 +/- 0.91</td>
                    <td>53.72 +/- 2.16</td>
                </tr>
                <tr>
                    <td class="tdleft">DTD(FVCAF)_RBF</td>
                    <td>72.45 +/- 2.30</td>
                    <td>57.74 +/- 1.68</td>
                </tr>
                <tr>
                    <td class="tdleft">DeCAF</td>
                    <td>70.11 +/- 1.68</td>
                    <td>57.48 +/- 0.94</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DTD_RBF</td>
                    <td>71.11 +/- 1.99</td>
                    <td>60.50 +/- 1.31</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DTD(FVCAF)_RBF</td>
                    <td>76.17 +/- 1.21</td>
                    <td>65.12 +/- 1.86</td>
                </tr>
                <tr>
                    <td class="tdleft">DeCAF+DTD_RBF</td>
                    <td>74.92 +/- 1.18</td>
                    <td>64.86 +/- 2.24</td>
                </tr>
                <tr>
                    <td class="tdleft">DeCAF+DTD(FVCAF)_RBF</td>
                    <td>73.13 +/- 0.91</td>
                    <td>62.80 +/- 1.02</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DeCAF</td>
                    <td>76.10 +/- 3.14</td>
                    <td>65.90 +/- 1.50</td>
                </tr>
                <tr>
                    <td class="tdleft">DTD_RBF+DTD(FVCAF)_RBF</td>
                    <td>74.64 +/- 1.32</td>
                    <td>61.22 +/- 2.62</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DeCAF+DTD_RBF</td>
                    <td>77.44 +/- 2.16</td>
                    <td>68.28 +/- 1.48</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DeCAF+DTD(FVCAF)_RBF</td>
                    <td>76.27 +/- 2.59</td>
                    <td>66.88 +/- 1.90</td>
                </tr>
                <tr>
                    <td class="tdleft">IFV+DeCAF+DTD_RBF+DTD(FVCAF)_RBF</td>
                    <td>76.94 +/- 2.08</td>
                    <td>67.76 +/- 1.65</td>
                </tr>
            </tbody>
        </table>
        <p></p>
    </div>
	<?php
		include('parts/footer.php');
	?>
</body>
</html>
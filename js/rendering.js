function init()
{
    $(document).ready(function(){
    // load the list and populate dropdown
    // read categories from json
	$.getJSON("inc/categoriesJSON.php", function(data){
	    
	    var category_list = data.categories;
	    var numRows = Math.ceil(category_list.length / NUM_PER_ROW);
	    for (var jj = 0; jj < numRows; ++jj)
	    {
		var thumbId = 'thumb_row_' + (jj + 1).toString();
		$("#thumbnails").append('<div class="row narrow" id="' + thumbId  + '"></div>');
		for (var ii = 0; ii < NUM_PER_ROW; ++ii)
		{
		    var thumbIdx = NUM_PER_ROW * jj + ii;
		    if (thumbIdx >= category_list.length)
		    {
			break;
		    }
		    var categString = category_list[thumbIdx].name;
		    //	  var thumbString = '<div class="col-sm-3 col-md-2 col-lg-1"><div class="thumbnail">' +
		    var thumbString = 
//			'<a href="view?categ=' + categString + '">' +
			'<div class="thumbnail narrow col-xs-3 col-sm-2 col-md-2 col-lg-1" >' +
          		'<img  src="thumbs/' + category_list[thumbIdx].thumbnail + 
			'" alt="' + categString + '" />'
			// ' <a href="view?categ=' + categString + 
			//'" class="" role="button">(View)</a></h4></div>' +
			'</div>'; // + '</a>';
		    $('#' + thumbId).append(thumbString);
		}
	    }
	});
    });
}

function load_category_images(CRT_CATEGORY)
{
    var CRT_NUM_IMAGES = 0;
    $(document).ready(function(){

	function sticky_relocate() 
	{
	    var window_top = $(window).scrollTop();
	    var div_top = $('#sticky-anchor').offset().top;
	    if (window_top > div_top) 
	    {
		$('#sticky').addClass('stick');
	    } else 
	    {
		$('#sticky').removeClass('stick');
	    }
	}
	
	$(function () {
	    $(window).scroll(sticky_relocate);
	    sticky_relocate();
	});

        $.getJSON('inc/categoriesJSON.php', function(data){
            category_list = data.categories;
            crt_categ = $.grep(category_list, function(a){
                return a.name == CRT_CATEGORY;
            });

            crt_categ = crt_categ[0];
	    if (typeof(crt_categ) == undefined ||
		crt_categ == null)
	    {
		CRT_CATEGORY = "banded";
		crt_categ = $.grep(category_list, function(a){
                    return a.name == CRT_CATEGORY;
		});
		crt_categ = crt_categ[0];
	    }
            var crt_index = $.inArray(crt_categ, category_list);

            var prev_link = "category";
	    $(".previous").removeClass('disabled');
            if (crt_index > 0)
            {
                prev_link = category_list[crt_index - 1].name;
            }
	    else
	    {
		$(".previous").addClass('disabled');
	    }

            var next_link = "category;"
	    $('.next').removeClass('disabled');
            if (crt_index < category_list.length - 1)
            {
                next_link = category_list[crt_index + 1].name;
            }
	    else
	    {
		$(".next").addClass('disabled');
	    }

	    $('#prev_link').attr('href', 'view.php?categ=' + prev_link);
	    $('a#prev_link').text("< Previous (" + prev_link + ")");
	    $('#next_link').attr('href', 'view.php?categ=' + next_link);
	    $('a#next_link').text("Next (" + next_link + ') >');
	    
        });
		
        $.getJSON("inc/imagesJSON.php", function(data){
            all_images = data.images;
            all_images = $.grep(all_images, function(a){
                return a.category == CRT_CATEGORY;
            });
            fill_table(all_images);
        });
        
	$('#crt_categ').html("Currently viewing: " + CRT_CATEGORY);

    });
}

function fill_table(image_list)
{
    var numRows = Math.floor((image_list.length + NUM_PER_ROW - 1) / NUM_PER_ROW);
    for (var jj = 0; jj < numRows; ++jj)
    {
        var thumbId = 'thumb_row_' + (jj + 1).toString();
        $("#thumbs").append('<div class="row narrow" id="' + thumbId  + '"></div>');
        for (var ii = 0; ii < NUM_PER_ROW; ++ii)
        {
            var thumbIdx = NUM_PER_ROW * jj + ii;
            if (thumbIdx >= image_list.length)
            {
                break;
            }
            var nameString = image_list[thumbIdx].name;
			var fullName = image_list[thumbIdx].category + '/' + image_list[thumbIdx].name;
			var msTime = Date.now();
            var thumbString =
                '<div class="thumbnail narrow col-xs-2 col-sm-3 col-md-2 col-lg-1 mythumb">' +
		'<img id="img_' + thumbIdx.toString() + '" ' +
		' src="thumbs/' +  fullName + '?'+ msTime + '" ' + 
		' data-bigimg="images/' + fullName + '?'+ msTime +  '" ' + 
                        ' alt="' + nameString + '" title="title"/>' +
                        '</div>';
            $('#' + thumbId).append(thumbString);
	    $('#img_' + thumbIdx).click(function(){
		$big_src = $(this).attr('data-bigimg');
		$('#sticky').empty();
		$('#sticky').append('<img src="'+$big_src + '" alt="large" class="max350" />');
		
	    });

        }
    }
}


/***************** UTILITY ***************/
function zfill(number, size, padchar)
{

    if (typeof(padchar) === 'undefined')
    {
        padchar = "0"
    }
    number = number.toString();
    while (number.length < size)
    {
        number = padchar + number;
    }

    return number;
}


/*** netlobo.com/url_query_string_javascript.html ***/
function gup(name)
{
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if (results == null)
    {	
	return "";
    }
    else
    {
	return results[1];
    }
}

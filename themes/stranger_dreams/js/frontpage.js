function initPage()
{
	var flashvars = {};
	var params = {};
	params.bgcolor = "#000000";
	var attributes = {};
	swfobject.embedSWF("/wp-content/themes/stranger_dreams/TeaserWrap.swf", "game", "760", "512", "10.2.0", "expressInstall.swf", flashvars, params, attributes);
}

if (window.addEventListener)
	window.addEventListener("load", initPage, false);
else if (window.attachEvent)
	window.attachEvent("onload", initPage);
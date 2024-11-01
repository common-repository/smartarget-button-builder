function init_button_builder (hash)
{
	if (!hash)
	{
		return;
	}

	insertJs_button_builder(hash);
}

function insertJs_button_builder (hash)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = `https://smartarget.online/loader.js?ver=${Math.random()}&u=${hash}&source=wordpress_button_builder`;
	document.head.appendChild(script);
}

init_button_builder(smartarget_button_builder_params.hash);

Object.prototype.join = function(glue, separator) { 
	var object = this;
	if (glue == undefined)
		glue = '=';
	if (separator == undefined)
		separator = '&';    
	return Object.keys(object).map(function(key) { return [key, encodeURIComponent(object[key])].join(glue) }).join(separator);
}



function makeRequest(config) {
	var xhr = new XMLHttpRequest(),
		body = typeof config.params === 'object' ? config.params.join() : null,
		url = config.url; 
	xhr.open(config.method || 'GET', url, config.async == undefined ? true : config.async);
	if(config.method == 'POST') {
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	}
	xhr.onreadystatechange = function () {
		if (xhr.readyState != 4 || xhr.status != 200) return; 
		if(config.func && typeof config.func === 'function') {
			config.func(xhr);
		}						
	};
	xhr.send(body);
}
			
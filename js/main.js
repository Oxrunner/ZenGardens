window.onload = function(){
	styleElement = document.getElementsByTagName("link")[0];

	var styleChangeEvent = function(e){
		var srcElement = e.srcElement ? e.srcElement : e.target;
		styleElement.href = srcElement.href.split("#")[1];
		if(e.preventDefault){
			e.preventDefault();
		} else {
			return false;
		}
	};

	var styleChildNodes = document.getElementById('styles').childNodes;
	for(childIndex in styleChildNodes){
		var childEle = styleChildNodes[childIndex];
		if(childEle.tagName == 'LI'){
			var targetHref = childEle.childNodes[0];
			if(targetHref.tagName == 'A'){
				// We have a hyperlink, add event listeners
				if(targetHref.addEventListener){
					targetHref.addEventListener('click', styleChangeEvent, false);
				} else if (targetHref.attachEvent) {
					targetHref.attachEvent('onclick', styleChangeEvent);  
				} else {
					targetHref.onclick = styleChangeEvent;
				}
			}
		}
	}
};
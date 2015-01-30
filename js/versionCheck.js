/* globals */

var SYSCFG;
var version;

$(document).ready(function(){
    //drag and drop listeners.
	var dropZone = document.getElementById('drop_area');
	dropZone.addEventListener('dragover', handleDragOver, false);
	dropZone.addEventListener('dragleave', handleDragLeave, false);
	dropZone.addEventListener('drop', handleFileSelect, false);

	document.getElementById('files').addEventListener('change', handleFileSelect, false);
});

function handleDragOver(evt) {
	evt.stopPropagation();
	evt.preventDefault();
	evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.	

	$('#drop_area').addClass('drag');
}

function handleDragLeave(evt) {
	$('#drop_area').removeClass('drag');
}

function handleFileSelect(evt) {
	evt.stopPropagation();
	evt.preventDefault();

	if (evt.dataTransfer) {
		// console.log("data transfer!!")
		var files = evt.dataTransfer.files; // FileList object.
	}
	else if (evt.target) {
		// console.log("target!!")
		var files = evt.target.files; // FileList object DA BOTTONE INPUT
	}
		
	// files is a FileList of File objects. I'll just take the first file
	var file = files[0];
	var reader = new FileReader();
	
	// If we use onloadend, we need to check the readyState.
	reader.onloadend = function(evt) {
		if (evt.target.readyState == FileReader.DONE) { // DONE == 2
			SYSCFG = evt.target.result;
			getVersion();
			// console.log(SYSCFG);
		}
	};
	reader.readAsText(file);
}

function getVersion() {
	version = SYSCFG.match(/v[^{]+(?=\})/g);
	version = parseInt(version[0].substring(1).replace('.', ''), 10);
	console.log(version);
	redirectToRightVersion()
}

function redirectToRightVersion() {
	var redirectTarget;
	if (version > 200) { redirectTarget = "v2.php" }
	else { redirectTarget = "v1.php" }
		
	$('#hidden_form').html('<form action="' + redirectTarget + '" name="redirect" method="post" style="display:none;"><textarea name="syscfgFromFirstPage">' + SYSCFG + '</textarea></form>');
	// $('#hidden_form').html('<form action="test.php" name="redirect" method="post" style="display:none;"><input type="text" name="syscfgFromFirstPage" value="' + SYSCFG + '" /></form>');
	document.forms['redirect'].submit();
}
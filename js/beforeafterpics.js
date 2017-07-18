tinyMCEPopup.requireLangPack();

var beforeafterpicsDialog = {
	init : function() {
		var form = document.beforeafterpics;

		// Get the selected contents as text and place it in the input
		form.id.value = '1';
	},

	insert : function() {
		// Insert the contents from the input into the document
                var output = "[beforeafterpics id='" + document.beforeafterpics.id.value + 
                             "' image_before='" + document.beforeafterpics.imagebefore.value + 
							 "' image_after='" + document.beforeafterpics.imageafter.value + 
                             "' animateintro='" + document.beforeafterpics.animateintro.value + 
                             "' introdelay='" + document.beforeafterpics.introdelay.value + 
                             "' introduration='" + document.beforeafterpics.introduration.value + 
                             "' showfulllinks='" + document.beforeafterpics.showfulllinks.value + "' /]";

		tinyMCEPopup.editor.execCommand('mceInsertContent', false, output);
		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(beforeafterpicsDialog.init, beforeafterpicsDialog);

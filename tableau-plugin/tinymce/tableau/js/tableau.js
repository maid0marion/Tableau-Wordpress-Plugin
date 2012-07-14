/**
 * $Id: editor_plugin_src.js  2012-06-21 maid0marion $
 *
 * @author maid0marion
 */	
 
jQuery("form").submit(function mceInsertTableau($) {
	var inst = tinyMCEPopup.editor, dom = inst.dom;  (function mceInsertTableau($) {
		    var inst = tinyMCEPopup.editor, dom = inst.dom;
			//get form data
	        var server = $("#server_name").val();
	        var workbook = $("#workbook_name").val();
	        var view = $("#view_name").val();
			if ($("#tabs").attr('checked') == true) {
				var tabs = "yes";
			}
			else {
				var tabs = "no";
			}
			var width = jQuery.trim($("#width").val());
			if (width == "") {
				var w_unit = "";
			}
			else {
				var w_unit = $("#w_unit").val();
			}
	        var height = jQuery.trim($("#height").val());
			if (height == "") {
				var h_unit = "";
			}
			else {
				var h_unit = $("#h_unit").val();
			}
			var linktarget = $("#linktarget").val();
			if ($("#revert").val() == "-Select-") {
				var revert = "";
			}
			else {
				var revert = $("#revert").val();
			}
			if ($("#toolbar").attr('checked') == true) {
				var toolbar = "yes";
			}
			else {
				var toolbar = "no";
			}
			if ($("#refr").attr('checked') == true) {
				var refr = "no";
			}
			else {
				var refr = "yes";
			}

			//create shortcode
	        var code =  '\n[tableau server="'+server+'" workbook="'+workbook+'" view="'+view+'" tabs="'+tabs+'" toolbar="'+toolbar+'" revert="'+revert+'" refresh="'+refr+'" linktarget="'+linktarget+'" width="'+width+''+w_unit+'" height="'+height+''+h_unit+'"][/tableau]\n';    

	 tinyMCEPopup.execCommand('mceInsertContent', false, code);
	 tinyMCEPopup.close();	    
			
			

	}(jQuery));
	

});
function init() {
	tinyMCEPopup.resizeToInnerSize();

};
tinyMCEPopup.onInit.add(init);


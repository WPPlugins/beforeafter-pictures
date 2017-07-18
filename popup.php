<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
	<title>{#beforeafterpics_dlg.title}</title>
	<script type="text/javascript" src="/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script type="text/javascript" src="/wp-content/plugins/beforeafter-pictures/js/beforeafterpics.js"></script>
</head>
<body>

<form name="beforeafterpics"onsubmit="beforeafterpicsDialog.insert();return false;" action="#">
  <table>
    <tr>
      <td>{#beforeafterpics_dlg.id}</td>
      <td><input id="id" name="id" type="text" class="text" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.id_help}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
      <td>{#beforeafterpics_dlg.imagebefore}</td>
      <td><input id="imagebefore" type="text" name="imagebefore" class="text" size="60" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.imagebefore_help}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
      <td>{#beforeafterpics_dlg.imageafter}</td>
      <td><input id="imageafter" type="text" name="imageafter" class="text" size="60" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.imageafter_help}</td>
    </tr>
    <tr><td>{#beforeafterpics_dlg.animatedintro}</td></tr>
    <tr>
      <td></td>
      <td><input id="animateintro" name="animateintro" type="text" class="text" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.animatedintro_help}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
      <td>{#beforeafterpics_dlg.introdelay}</td>
      <td><input id="introdelay" name="introdelay" type="text" class="text" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.introdelay_help}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
      <td>{#beforeafterpics_dlg.introduration}</td>
      <td><input id="introduration" name="introduration" type="text" class="text" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.introduration_help}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
      <td>{#beforeafterpics_dlg.showlinks}</td>
      <td><input id="showfulllinks" name="showfulllinks" type="text" class="text" value="" /></td>
    </tr>
    <tr>
      <td></td>
      <td>{#beforeafterpics_dlg.showlinks_help}</td>
    </tr>
    <tr><td></td></tr>
  </table>
	<div class="mceActionPanel">
		<input type="button" id="insert" name="insert" value="{#insert}" onclick="beforeafterpicsDialog.insert();" />
		<input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
	</div>
</form>

</body>
</html>

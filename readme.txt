=== Before After Pictures ===
Plugin Name: Before/After Pictures
Plugin URI: http://www.ansichten-und-aussichten.de/beforeafter-pictures/
Description: Display before after effects with photos
Author: Holger Stroeder
Author URI: http://www.ansichten-und-aussichten.de/
Contributors: initially based on the before after plugin by instruite 
Donate link: http://www.ansichten-und-aussichten.de/beforeafter-pictures/
Version: 0.2.1
Stable tag: 0.2.1
Tags: photos, before, after, photo effects, images, pictures, photoblog
Requires at least: 2.9
Tested up to: 3.1
 
== Description ==
Before After Pictures plugin integrates [jQuery Before/After Plugin](http://www.catchmyfame.com/2009/06/25/jquery-beforeafter-plugin/ "jQuery Before/After Plugin") in the wordpress. It can be used to show the difference between edited and original photo, before and after photos of changes, etc.

Please check 'Other Notes' for the Usage instructions to see how to use it on your blog

Demosites: http://www.ansichten-und-aussichten.de/beforeafter-pictures/

[Operation with default theme](http://www.ansichten-und-aussichten.de/beforeafter-pictures/ "Operation with Default wp theme")
[Operation with TwentyTen theme](http://www.ansichten-und-aussichten.de/beforeafter-pictures/ "Operation with TwentyTen wp theme")
 
Author info:
Holger Stroeder

== Installation ==

= Requirements =
* WordPress: 2.9 or newer

= Basic Installation =
* Plugin folder in the WordPress plugins folder must be `beforeafter-pictures`
* Upload folder `before-after-pics` to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress
* Check Before/After Pictures Option page
* Check out 'Other Notes' for usage instruction.


== Other Notes ==
= Limitations = 
* Both iomages must have the same size in pixels
* Before/After Pictures works only on single posts and pages

= Usage =
* Set the default options on the admin page of the plugin
* Write the content of your post other than the images
* Upload the before and after images to wordpress or any other webspace and remember the path/url

* Switch to 'Visuell' mode of the post editor area
* Click 'Before/After Pictures' button
* Fill in the information in the popup screen (id, before and after image must be set), empty attributes can be deleted

or

* Switch to 'HTML' mode of the post editor area
* Click 'Before/After Pictures' button
* Fill in the information in the editor area (id, before and after image must be set), empty attributes can be deleted

* Parameters: 
[beforeafterpics id='' image_before='' image_after='' animateintro='' introdelay='' introduration='' showfulllinks='' /]

id:            If you want to place multiple [beforeafter] sections on one page, every shortcode must have an unique id. (required if more than one image in the post)
image_before:  path/url to the image file must be set. (required) 
image_after:   path/url to the image file must be set. (required) 
animateintro:  Whether or not to have the drag bar start completely to the right of the container and gradually move by itself to the midpoint. (optional)
introdelay:    If animateIntro is true, the number of milliseconds to wait before beginning the automatic drag bar move to the center of the image. (optional)
introduration: If animateIntro is true, the number of milliseconds it will take for the drag bar to go from the right side of the image to the middle of the image. (optional)
showfulllinks: Whether or not to display links below the image that a visitor can click on that will automatically show the full before or full after image. (optional)
	
== Frequently Asked Questions ==
* Example delivered: Just copy and paste the following into a new article and check if everything is fine...
[beforeafterpics id='1' image_before='/wp-content/plugins/beforeafter-pictures/images/example-before.jpg' image_after='/wp-content/plugins/beforeafter-pictures/images/example-after.jpg' /]


== Screenshots ==

1. Before/After Pictures button in Visual Editor
2. Before/After Pictures popup screnn
3. Before/After Pictures button in HTML Editor
4. Before/After Pictures shortcodes in editor
5. Before/After Pictures option page
6. Before/After Pictures example


== Changelog ==
= 0.2.1 =
* enabled for usage on single pages


= 0.2 =
* minor changes to fix Wordpress 3.1 issue(s)
* added activation and deactivation functions for options
* default values for option page delivered

= 0.1 =
* initial release
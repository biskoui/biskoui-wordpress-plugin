=== biskoui ===
* Contributors: Chewy Labs Sàrl
* Tags: consent management, cookie management, privacy
* Requires at least: 3.3
* Tested up to: 6.4.2
* Stable tag: 1.0
* License: GPLv3
* License URI: https://www.gnu.org/licenses/gpl.html
* Plugin URL: https://github.com/biskoui/biskoui-wordpress-plugin
* Languages: English, french, german

Easily connects your biskoui consent management platform to your WordPress site

== Description ==

Biskoui is a Software as a Service.

This plugin helps you to easily install biskoui consent management platform on your WordPress site without needing to have advanced WordPress or code editing knowledge. This plugin simply adds our code snippet and personal integration key to you site's Header tag in order for our platform to integrate quickly and easily on your site.

The purpose of biskoui consent management platform is to help companies in the process of making their websites compliant with different data privacy law such as the General Data Protection Regulation (GDPR), EU ePrivacy Directive or the New Federal Act on Data Protection (nFADP). This by to running third party services only upon vistor's consent while allowing them to change their consent settings at anytime in a transparent manner.

Note that once integrated, the biskoui widget will have a credit to our site in the form a link pointing to https://biskoui.ch and according to our terms & conditions (https://biskoui.ch/legal/terms-and-conditions/). This is not handled by the plugin itself but by our service.

= Plugin resources, links and tutorials =

* [Plugin homepage](http://biskoui.ch/en)
* [Knowledge Base - FAQ](https://biskoui.ch/en/faq/)

= Requirements =

Biskoui requires WordPress version **3.3** and your theme **must** (and should) have `wp_head()` and `wp_footer()` functions. In some Microsoft Windows based web servers some plugins might produce an error 500 (depends on server/PHP configuration). To pinpoint the issue [enable debugging](https://codex.wordpress.org/Debugging_in_WordPress) in `wp-config.php` and check `wp-content/debug.log` file for relevant errors.

= GDPR (General Data Protection Regulation) =

The plugin is GDPR compliant. It does not use or store any kind of user information/data on your Wordpess site. It runs a script that will load the biskoui consent management platform and interact directly with our servers.

== Installation ==

= Automatic =

1. Click 'Add New' under 'Plugins' menu in WordPress. 
2. Perform a search for the term 'biskoui' and in search results, click 'Install/Install Now' under plugin name. 
3. When installation is finished, click 'Activate Plugin'. 

You may find our installation guide on 

= Manual =

1. Download and extract the plugin. 
2. Upload the entire `biskoui` folder to `/wp-content/plugins/` directory. 
3. Activate the plugin through the 'Plugins' menu in WordPress. 

= Configuration =

On the left pane menu, click biskoui.

Enter they key integration key provided and click save.

The key may be found in your biskoui admin panel under dashboard, then click "WordPress Plugin"

== Frequently Asked Questions ==

Please visit plugin's [Knowledge Base - FAQ](https://biskoui.ch/en/faq/) for up-to-date info and guides. 

= Is it GDPR compliant? =

Yes.

== Changelog ==

= 1.0 =

First public release

== License ==

GNUGPLv3

For more information <https://www.gnu.org/licenses/gpl.html>.

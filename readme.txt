=== iPushPull for WordPress ===
Contributors: ipushpull, carix
Tags: excel, data, collaboration, cloud, live, spreadsheet, pushpull, tabular, embed
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display live updating data from your desktop Microsoft Excel spreadsheets in your WordPress blog.

== Description ==
The iPushPull WordPress plugin makes it easy to display live updating data from your desktop Excel spreadsheets in your WordPress pages.

= Features =
* Display the latest data from your desktop spreadsheets in your WordPress pages
* You don't to save the source spreadsheet to update the data
* Your content updates automatically - the reader does not need to refresh the browser to get the latest update
* You choose the range of cells that gets displayed
* You control the update frequency - every few seconds, every hour, every day
* Data can be public or password protected

= Examples =
Take a look at [this page on the iPushPull blog](https://www.ipushpull.com/blog/wordpress-plugin/ "iPushPull blog") to see the plugin in action. 

= What is iPushPull? =
[iPushPull](https://www.ipushpull.com "iPushPull") lets you share live content between desktop Excel spreadsheets and publish it on the web. The iPushPull WordPress plugin lets you easily embed the spreadsheet data you're sharing in your WordPress site. You'll need an iPushPull account to use it - if you don't have one yet, [sign up now for a free trial](https://www.ipushpull.com/site/signup.html?package=trial "Sign up!").

For more information please visit the [iPushPull website](https://www.ipushpull.com/ "iPushPull") and the [iPushPull Help and Support Centre](https://ipushpull.zendesk.com/hc/en-us "iPushPull Support Centre"). 

= User Guide =
When you sign up to iPushPull you create a **Folder** containing live data **Pages**. You can then push data to these pages from desktop Excel spreadsheets or any of the other client applications we support.

### iPushPull Embed Shortcode ###
This embeds the live data page you specify in your article (or other places WP shortcodes may be used such as widgets etc.)

`[ipushpull_page parameters]`

#### Parameters ####
* **folder** - *required* Name of iPushPull Folder
* **page** - *required* Name of iPushPull Page
* **width** - Width of embedded element (any css value)
* **height** - Height of embedded element (any css value)

**Notes on parameters:**
* width and height parameters can hold any value that follows css format - *px, *em, *vw, *%, auto, etc.

### Example ###

`[ipushpull_page folder="my_folder_name" page="my_page_name" height="300px"]`

### Identifiers ###
If you want to reference your embedded iPushPull pages in your site code or css, the plugin generates unique identifiers for the html elements containing the embedded pages:

* **id** - ippEmbedPage_folder_page (e.g. ippEmbedPage_MyCompany_PriceList)
* **name** - ipp_page_folder_page (e.g. ipp_page_MyCompany_PriceList)

Where "folder" and "page" are the Folder and Page names you've specified.

### Styling ###
The content of the embedded data replicates the styles you've specified in Excel (or whatever client application you've used to generate the data). You can change the style of the wrapping element itself. Every element containing an iPushPull page has the css class "**ipushpull_page**".

== Installation ==

You can install the iPushPull WordPress plugin using any of these standard methods:

= Install using WordPress administrator panel =
1. In your WordPress admin panel, go to *Plugins -> Add New*
1. Type **ipushpull** in the search box
1. Click on the *Install Now* link below the plugin title
1. After installation is finished, click on the *Activate Plugin* link

= Upload using WordPress administrator panel =
1. Download the plugin ZIP file
1. In the WordPress admin panel navigate to *Plugins -> Add New*
1. Click on the *Upload* link
1. Select the zip file you downloaded and confirm submission
1. After installation is finished, click on the *Activate Plugin* link

= Manual Upload =
1. Download the plugin ZIP file
1. Upload the contents of the ZIP file into 'wp-content/plugins'
1. Open your WordPress administration panel
1. Navigate to *Plugins -> Installed Plugins*
1. Click on *Activate Plugin* link below the plugin title

= After installation =
Now you can embed your live iPushPull Pages throughout your WordPress site, letting you display live data from your desktop Excel spreadsheets. For more information about the tools and how to use them see the plugin Description.
For more information about iPushPull please visit the [iPushPull Support Centre](http://support.ipushpull.com "iPushPull Support").

== Frequently Asked Questions ==

= How do I find out more? =
More documentation can be found at the [iPushPull Support Centre](http://support.ipushpull.com "iPushPull Support").

= Can I see some live examples of Excel data updating in a blog post? =
Sure - [this page](https://www.ipushpull.com/blog/wordpress-plugin/ "iPushPull blog") on the iPushPull WordPress blog includes several examples.

= How do I embed live Excel spreadsheet data in my WordPress site? =
1. [Sign up for a free trial of iPushPull and download and install our Excel add-in](https://ipushpull.zendesk.com/hc/en-us/articles/202719062 "Sign Up to iPushPull and Install our Excel add-in")
1. [Create an iPushPull Page and start pushing data to it from your desktop Excel](https://ipushpull.zendesk.com/hc/en-us/articles/202793621 "Push data to iPushPull")
1. Embed the page in your WordPress site using the following shortcode:
`[ipushpull_page folder="my_folder_name" page="my_page_name" height="300px"]`

== Screenshots ==

1. Live data from an Excel spreadsheet embedded in the iPushPull WordPress blog.
2. Static data from an Excel spreadsheet, showing the range of links you can embed in your pages.

== Changelog ==

= 1.0 =
* iPushPull shortcode is available to embed live pages
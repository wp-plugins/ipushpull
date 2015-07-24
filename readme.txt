=== iPushPull ===
Contributors: ipushpull, carix
Tags: excel, data, collaboration, cloud, live, spreadsheet, pushpull, tabular, embed
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Set of tools to connect iPushPull data to your wordpress site. Embed live updating data to your blog.

== Description ==
[iPushPull](https://www.ipushpull.com "iPushPull") links remote MS Excel spreadsheets and other applications and delivers live data across your devices.

No more emailing spreadsheet data around, now you can simply share and collaborate on your data in simple matter.

Use iPushPull to aggregate data from across your office network and to publish data to your colleagues and clients, wherever they are. And if you need to view or update your data while you’re away from your desk, our web apps give you access to your latest information.

iPushPull is cloud-based, so there’s no complex installation. It’s encrypted end-to-end, so it’s secure. And our access tools let you control exactly who can see the different pages of data you’re publishing.

= iPushPull Features =

* **Simplicity**
Connect existing systems in a matter of minutes. iPushPull lets you effortlessly aggregate data from different sources across your business at the touch of a button.

* **Security**
Choose who can see your data using our access controls. Keep it private or share it with other iPushPull users. Your data is encrypted on our servers, but if it’s extra-sensitive our client applications let you encrypt it before you send it.

* **Speed**
Share live data between spreadsheets, whether they’re in the same office or on opposite sides of the world. When your source sheet updates, all the remote sheets will update automatically, too. No need to save or refresh.

* **Flexibility**
Connect multiple different applications and devices. Quickly and easily combine data from multiple remote users into a single spreadsheet. No emailing or tedious manual cutting and pasting required. You control each user’s view of the data – give them as much or as little access as they need.

* **Reach**
Push your colleague or client specific live data out from your spreadsheets or database to multiple private web pages via our hosted web service. Give them access to view their private pages from anywhere via their desktop browser or mobile devices.

* **Integration**
Easily adjust look and feel to suit your brand. iPushPull pushes data, formatting and styles, letting you create custom web pages directly from your desktop applications. You can link pages, too, to create live updating, personalised mini-websites for you and your contacts. If your data isn’t available in MS Excel, use our APIs to integrate iPushPull with your in-house systems.

= iPushPull For WordPress =

Sharing data is even easier with our embedded pages. You can simply embed any piece of your data into your website and together with our wordpress tools it couldn't be easier.

**iPushPull Embed Shortcode**

Displays required page inline of article (or other places WP shortcodes may be used such as widgets etc.)

`[ipushpull_page parameters]`

**Parameters**

* **folder** - *required* Name of folder
* **page** - *required* Name of page
* **width** - Width of embedded element (any css value)
* **height** - Height of embedded element (any css value)

**Notes on parameters:**

* If you use name or id for domain or page you need to use same format for page and vice versa
* width and height parameters can hold any value that follows css format - *px, *em, *vw, *%, auto - etc.

### Identifiers ###
Every page has its own set of identifiers:

* **id** - ippEmbedPage_folder_page
* **name** - ipp_page_folder_page

Where "folder" and "page" are folder name and page name set by attributes

### Styling ###
Design of the data itself is defined through iPushPull page, but you can change the style of the wrapping element itself. Every element containing ipp page has css class "**ipushpull_page**"

### Examples ###

`[ipushpull_page folder="test" page="test" height="300px"]`

For more examples visit [iPushPull Blog](https://www.ipushpull.com/blog "iPushPull Blog")

== Installation ==

iPushPull WordPress plugin installation can be done by any standard way and doesn't require any special steps.

= From WordPress administrator section =
1. Navigate to Plugins -> Add New
1. In search box write: "ipushpull"
1. Click on "Install Now" link below the plugin title
1. After installation is finished, click on "Activate Plugin" link

= Upload through WordPress administrator section =
1. Download ZIP file of the plugin
1. In WordPress administration panel navigate to Plugins -> Add New
1. Click on link "Upload"
1. Select the zip file you downloaded and confirm submission
1. After installation is finished, click on "Activate Plugin" link

= Manual Upload =
1. Download ZIP file of the plugin
1. Upload the content of ZIP file into 'wp-content/plugins'
1. Open your WordPress administration panel
1. Navigate to Plugins -> Installed Plugins
1. Click on "Activate Plugin" link below plugin title

= After installation =
Now you can use iPushPull tools in throughout your wordpress site. For more information about tools and how to use them see description.
For more information about iPushPull and support visit [iPushPull Support](http://support.ipushpull.com "iPushPull Support").

== Changelog ==

= 1.0 =
* iPushPull shortcode is available to embed live pages
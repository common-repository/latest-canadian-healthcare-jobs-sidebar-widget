=== Latest Canadian Healthcare Jobs sidebar widget ===
Contributors: JAMBA-widgets
Tags: healthcare, medical jobs, job listings, employment, Canada, Canadian map, live data, hospital
Requires at least: 2.8
Tested up to: 3.9
Stable tag: trunk
License: GPL2

Displays a live map of Canada showing the latest jobs posted on the Hospital.ca medical job listing service


== Description ==
<a href="http://www.hospital.ca" title="Canadian medical and health care job postings">Hospital.ca</a> is a job listing service that receives many new Canadian medical and health care job openings every day (doctor/nurse/therapist/etc). By using this widget you and your site/blog visitors will be able to see on a clickable map if any are posted nearby (or in a part of the country that you might be interested in moving to).

**Features**

* You can select a light or a dark color scheme for the widget.


== Installation ==

**Automatic Installation**

1. Login to your blog and go to the Plugins page.
2. Click on the 'Add New' button.
3. Search for 'Latest Canadian Healthcare Jobs'.
4. Click 'Install now'.
5. If prompted, enter your FTP username and password. (If you don't know these, ask your web hosting provider for them.)
6. Click 'Activate plugin'.

**Manual Installation**

1. Download the plugin ZIP file and un-zip it.
2. Upload the *latest-canadian-healthcare-jobs* folder to your *wp-content/plugins/* directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

**Manual Upgrading:**

1. Just re-upload the plugin folder to the wp-content/plugins directory to overwrite the old files.

**Basic Usage:**

1. After activating the plugin, go to the 'Widgets' page under the Appearance menu.
2. Click on the 'Canadian Healthcare Jobs Widget' box and drag it to the 'Main Sidebar' (or any other widget areas your theme provides) in the location you wish it to appear.
3. When the widget is in place, a pull-down menu will let you select either the 'Light' or 'Dark' color scheme. Select and click 'Save'.


== Screenshots ==
1. This is the light color scheme.
2. This is the dark color scheme.


== Frequently Asked Questions ==

= How does it work? =
Glad you asked! The widget creates an iframe that gets its data from the Hospital.ca server (http://www.hospital.ca). The latest jobs and their coordinates are loaded from a CSV file, then a map is generated with the d3.js Javascript library using a simplified Canadian geo-coordinates map file created for this purpose.


== Changelog ==

= 1.0 =
* Initial release

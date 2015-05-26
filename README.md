#Master Builder
[![GitHub version](https://badge.fury.io/gh/oninross%2Fmaster_builder.svg)](http://badge.fury.io/gh/oninross%2Fmaster_builder)
[![License](http://img.shields.io/badge/License-MIT-blue.svg)](http://opensource.org/licenses/MIT)

##Introduction
Master Builder is a simple out of the box front-end templating base used for building new websites created and maintained by Nino Ross Rodriguez.  To get started, jump to [setup](#setup).

##Browser Compatibility
- Chrome (Windows / Mac OS)
- FireFox (Windows / Mac OS)
- Safari (Mac OS)
- Internet Explorer 9+ (Windows)

##Features
- Full responsive framework (number of columns easily manageable)
- Responsive tables
    * Ability to swipe left/right on mobile device for long tables
    * Ability to "print" the entire table into a PDF for users to view the table in their mobile device and very easy to [use](#mobile-responsive-tables)
    * Awesome mobile menu animation
- IE9 Placeholder fallback
- Dynamically add background images meant to have `background: cover` property, without hard coding in CSS
- Uses Grunt to automate compiling into a folder for easy deployment
    * "Watches" your development folder and auto-reloads your browser so you don't have to refresh your window every time
    * Concatenates and uglifies all CSS and JS files
    * Compresses images
- Standard Content to quickly visualize any kind of content
- Lazy loading images (uses [jQuery_lazyload](https://github.com/tuupola/jquery_lazyload) )

##Release History
`v1.2.1` - Updated PDF Table usage

`v1.2.0` - Converted jsPDF table printing into jQuery Plugin.

`v1.1.0` - Added lazy loading feature for images.  Minor CSS fixes for mobile.

`v1.0.0` - Your simple straight-forward base boilerplate for your next project

##Dependencies
###Grunt Javascript Task Runner
If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [`gruntfile.js`](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may use Grunt commands to compile your project.

###SASS
If you haven't used [SASS](http://sass-lang.com/) before, be sure to have a read on how to get SASS on your local machine in their [installation guide](http://sass-lang.com/install) as it will explain how to write your CSS in SASS.  The boilerplate is written in SASS and will be compiled by Grunt

###Local PHP Server
**Note:** You must set the document root in your Local PHP Server to the `dist` folder of the project for you to view it in a browser.  You can do this by editing the `httpd.conf` file. See the example below:
```
DocumentRoot "C:\xampp\htdocs\Master_Builder\dist"
<Directory "C:\xampp\htdocs\Master_Builder\dist">
```

###GreenSock TweenMax and TimeLineMax *(optional)*
For the cool menu animation.  The files already included in the framework.  If you want to read more about TweenMax, you can check it out their [website](http://http://greensock.com/).

###LiveReload *(optional)*
It will make your life a whole lot easier once you enable this in your browser.  No more `CTRL + F5` every time you make a change in your codes.  Download the extension and install it in your preferred browser.

##Setup
Provided that you have [Grunt](http://gruntjs.com/) and [Ruby](https://www.ruby-lang.org/en/) installed in your system, follow the steps to get started with your project.

1. Open `package.json` file and change `Master_Builder` the desired project name.  Do not use white spaces.  Hyphens and underscores are accepted.

2. Open `header.php` and `footer.php`.  Change `Master_Builder` to the project name that you chose in step 1.

3. Open your Command Prompt (Windows) or your Terminal (Mac OSX) and go to the directory of your project.

4. Run the following command: `npm install`.

5. Once that is completed, you're ready to rock and roll.  You can use the following commands during your development.

##Available Grunt Tasks
```
grunt
```
**_Development Task:_** Generates the project dist folder for easy deployment to any server.  This command will not minify nor uglify your CSS and JS.  Recommended on initial start up of a project.

```
grunt watch
```
**_Watch Task:_** Grunt will listen to any changes in your files will reload your page.

```
grunt dist
```
**_Production Task:_** Generates the project dist folder for easy deployment in any server.  This command will clean the `dist` folder, minify, uglify your CSS and JS, and compress your images.  In addition to this, Grunt will sift through the `header.php` and `footer.php` and will change the paths to the minified versions.  This will save you time changing them before going to deployment.  Recommended when your project is ready to go live.

**A word of caution: ** if you ran a `grunt dist` then a `grunt watch`, you must do a `grunt` first before you watch again. The `header.php` and `footer.php` will be pointing at the minified versions of the CSS and JS.

```
grunt validate
```
**Validation Task:_** Will sift through your JS and SASS files to check for any errors.

##What's in the Package?
```
Master_Builder/
	├── _fonts/
	├── _icomoon/
	├── _images/
	│   ├── ie/
	│   │   └── transparent.png
	├── _scripts/
	│   ├── modules/
	│   │   ├── rr.mobileMenu.js
	│   │   └── rr.tableScrollbar.js
	│   ├── plugins/
	│   │   ├── minified/
	│   │   │   ├── ScrollToPlugin.min.js
	│   │   │   ├── TimelineMax.min.js
	│   │   │   └── TweenMax.min.js
	│   │   ├── jRespond.js
	│   │   └── jspdf.cus.js
	│   ├── vendor/
	│   │   ├── jquery-1.11.3.min.js
	│   │   ├── modernizr.js
	│   │   └── selectivizr.js
	│   └── main.js
	├── _scss/
	│   ├── common/
	│   │   ├── _defaults.scss
	│   │   ├── _fonts.scss
	│   │   ├── _mixins.scss
	│   │   └── _vars.scss
	│   ├── components/
	│   │   └── mobileMenu/
	│   │       ├── _default.scss
	│   │       ├── _desktop.scss
	│   │       ├── _mobile.scss
	│   │       └── _tablet.scss
	│   ├── _desktop.scss
	│   ├── _mobile.scss
	│   ├── _tablet.scss
	│   ├── ie.scss
	│   ├── main.scss
	│   └── responsive.scss
	├── styles/
	└── tempates/
	    ├── grid/
	    |	└── index.php
	    ├── images/
	    ├── includes/
	    |	├── footer.php
	    |	├── header.php
	    |	└── primary-nav.php
	    ├── list/
	    |	└── index.php
	    ├── standard/
	    |	└── index.php
	    └── index.php
```
###What Goes Where
`_fonts/` - Downloaded webfonts are placed here.

`_icomoon/` - Downloaded custom font icons are placed here.

`_images/` - Images used across the website are placed here.

`_scripts/plugins/` - Place all plugin files in this folder.

`_scripts/plugins/minified/` - Place all minified files in this folder.

`_scripts/vendor/` -

`_scss/` - All SCSS stylesheets.

`_scss/common/` - Stylesheets that are commonly used through the entire project.

`_scss/components/` - Stylesheets broken down to components for easy modification.

`styles/` - Stylesheets from plugins are placed here.  **Note:** You must update `header.php` and link the CSS file.  CSS in this folder will not be concatincated with the ones you have created.

`templates/` - All created pages for the website goes here.

**Note: ** I placed `_delete` files in empty folders so Git will push the folders to the repo.  You can delete these files onces you have set up the boilerplate.

###What Is Reponsible For What
`_scripts/modules/rr.mobileMenu.js` - Where the cool animation happens for the mobile menu.

`_scripts/modules/rr.tableScrollbar.js` - Where the table printing happens.

`_scripts/plugins/minified/ScrollToPlugin.min.js` - Responsible for scrolling the page while using TweenMax.  Dependent on TweenMax.

`_scripts/plugins/minified/TimelineMax.min.js` - Responsible for animating the menu icon on mobile.  Dependent on TweenMax.

`_scripts/plugins/minified/TweenMax.min.js` - Responsible for all cool JS animation.

`_scripts/plugins/jRespond.js` - Creating breakpoints via JavaScript to enable/disable any plugin needed.

`_scripts/plugins/jspdf.cus.js` - Responsible for exporting the HTML Table to a PDF.  It is based from MrRio's jsPDF with a few lines of tweaks to cater all mobile devices.

`_scss/common/_defaults.scss` - Normalizing your HTML build from `normalize.css` and HTML5 Boilerplate

`_scss/common/_fonts.scss` - Place all CSS webfonts in this file.

`_scss/common/_mixins.scss` - Majority of long coding techniques for cross-browser compatibilty is in this file.  Have a look and it will make your coding life much better.

`_scss/common/_vars.scss` - Common variables that will be used across your SCSS files.  Breakpoints, colors and column numbers can be edited here.

`_scss/_desktop.scss` - Styles for desktop only.

`_scss/_mobile.scss` - Styles for mobile only.

`_scss/_tablet.scss` - Styles for tablet only.

`_scss/main.scss` - Styles from mobile that can cascade to .desktop.

`_scss/ie.scss` - IE8 Specific CSS fixes

##Mobile Responsive Tables
###Problem
Tables with large number of columns and responsive websites don't mix well.  The majority's solution is to wrap the `table` with a div and assign an `overflow-x: scroll` property to allow the users swipe left and right.  But users still can't get a glimpse or an overview of the entire table.

###A Possible Solution
The framework will wrap all tables with the class name `.printableTable` and create a button as a call to action to "print" and the option to save the table in PDF format by utilizing MrRio's [jsPDF](http://mrrio.github.io/jsPDF/) plugin.  Users have now the ability to view the table in their mobile phones regardless of the manufacturer and or operating system. They can pinch to zoom in or out and swipe in any direction. iOS users has the option of opening the printed table in iBooks or their preferred PDF reader while Android users will save the PDF file in their device automatically and open it in their preferred PDF reader.

##Usage of Features
###IE9 Placeholder Fallback
For all `input` tags that you want to use the `placeholder` property, add an `.input-placeholder` class and add a data attribute named `data-placeholder` with the desired placeholder text.  JS will do the rest.

###Image Background Cover
Add `.backstretch` on the `div` that you wish to have the image to have a `background: cover` property.  Then add data attribute named `data-background` with the path of the the image.  JS will do the rest.

###Printable Table
Add `.printableTable` on the `table` element that you want the plugin to wrap on mobile device.  If the table fits in the mobile device, it will not wrap it in a `div` and generate the `button` for the user to click.  Add a data attribute named `data-title` if you want to use the table title as the filename for the PDF.

####HtmlTable to PDF Usage ~~Customize Print Settings~~
```javascript
$(element).pdfTable( 'init', {
    position: 'float', // top, bottom, float
    orientation: 'l',   // landscape (l), portrait (p)
    unit: 'pt',         // pt, mm, cm, in.
    format: 'a4',       // a3, a4, a5, letter, legal
    marginTop: 20,
    marginRight: 20,
    marginBottom: 20,
    marginLeft: 20,
});
```
Use `.pdfTable('init')` to initialize the plugin.  The sample code above are the default options if you do not declare any options.

Position is the location of the print button. The default option for this is `bottom`.

Orientation is the orientation of the PDF.  Options are either `'portrait'` or `'landscape'` (shortcuts `'p'`, `'l'`).

Unit is the measurement unit to be used when coordinates are specified. Options available are `'pt'` (points), `'mm'`, `'cm'`, `'in'`.

Format is the paper size.  Available options are `'a3'`, `'a4'`, `'a5'`, `'letter'`, `'legal'`.

The last 4 options are the margins that will be set when the table is printed on the PDF.

###Lazy Load Images
`<img>` tags must have the class `lazy` attached to it and a data attribute named `data-original` containing the path of the image.  JS will do the rest.

##Issues, Bugs or Feature Requests
If you found any bugs, would like to contribute, have comments or suggestions, head down to the [issues section](https://github.com/oninross/master_builder/issues) and log it in.  I will be more than happy to discuss it.

##Features to Come
- Customizable mobile menu to be a plugin
- Google Material Design components

##Credits
[Ang Ziwei](http://www.bitneko.com/) for creating the gruntfile.

[MrRio](http://twitter.com/MrRio) for his awesome [jsPDF](http://mrrio.github.io/jsPDF/) plugin

[GreenSock](http://greensock.com/) for making animating so much easier.

##License
Copyright 2015 [Infinite Imaginations](http://www.infiniteimaginations.co/#/hello/)

Licensed under the MIT License
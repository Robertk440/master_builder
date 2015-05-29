<?php
    set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
    $primary = 0;
    include('header.php');
?>

<main id="main" role="document">
	<section class="container-fluid">
		<article class="col-12">

<h1 id="master-builder">Master Builder</h1>
<p><a href="http://badge.fury.io/gh/oninross%2Fmaster_builder"><img src="https://badge.fury.io/gh/oninross%2Fmaster_builder.svg" alt="GitHub version"></a>
<a href="http://opensource.org/licenses/MIT"><img src="http://img.shields.io/badge/License-MIT-blue.svg" alt="License"></a></p>
<h2 id="introduction">Introduction</h2>
<p>Master Builder is a simple out of the box front-end templating base used for building new websites created and maintained by Nino Ross Rodriguez.  To get started, jump to <a href="#setup">setup</a>.</p>
<h2 id="browser-compatibility">Browser Compatibility</h2>
<ul>
<li>Chrome (Windows / Mac OS)</li>
<li>FireFox (Windows / Mac OS)</li>
<li>Safari (Mac OS)</li>
<li>Internet Explorer 9+ (Windows)</li>
</ul>
<h2 id="features">Features</h2>
<ul>
<li>Full responsive framework (number of columns easily manageable)</li>
<li>Responsive tables<ul>
<li>Ability to swipe left/right on mobile device for long tables</li>
<li>Ability to &quot;print&quot; the entire table into a PDF for users to view the table in their mobile device and very easy to <a href="#mobile-responsive-tables">use</a></li>
<li>Awesome mobile menu animation</li>
</ul>
</li>
<li>IE9 Placeholder fallback</li>
<li>Dynamically add background images meant to have <code>background: cover</code> property, without hard coding in CSS</li>
<li>Uses Grunt to automate compiling into a folder for easy deployment<ul>
<li>&quot;Watches&quot; your development folder and auto-reloads your browser so you don&#39;t have to refresh your window every time</li>
<li>Concatenates and uglifies all CSS and JS files</li>
<li>Compresses images</li>
</ul>
</li>
<li>Standard Content to quickly visualize any kind of content</li>
<li>Lazy loading images (uses <a href="https://github.com/tuupola/jquery_lazyload">jQuery_lazyload</a> )</li>
</ul>
<h2 id="release-history">Release History</h2>
<p><code>v1.3.0</code> - Converted mobile menu into jQuery Plugin.</p>
<p><code>v1.2.1</code> - Updated PDF Table usage</p>
<p><code>v1.2.0</code> - Converted jsPDF table printing into jQuery Plugin.</p>
<p><code>v1.1.0</code> - Added lazy loading feature for images.  Minor CSS fixes for mobile.</p>
<p><code>v1.0.0</code> - Your simple straight-forward base boilerplate for your next project</p>
<h2 id="dependencies">Dependencies</h2>
<h3 id="grunt-javascript-task-runner">Grunt Javascript Task Runner</h3>
<p>If you haven&#39;t used <a href="http://gruntjs.com/">Grunt</a> before, be sure to check out the <a href="http://gruntjs.com/getting-started">Getting Started</a> guide, as it explains how to create a <a href="http://gruntjs.com/sample-gruntfile"><code>gruntfile.js</code></a> as well as install and use Grunt plugins. Once you&#39;re familiar with that process, you may use Grunt commands to compile your project.</p>
<h3 id="sass">SASS</h3>
<p>If you haven&#39;t used <a href="http://sass-lang.com/">SASS</a> before, be sure to have a read on how to get SASS on your local machine in their <a href="http://sass-lang.com/install">installation guide</a> as it will explain how to write your CSS in SASS.  The boilerplate is written in SASS and will be compiled by Grunt</p>
<h3 id="local-php-server">Local PHP Server</h3>
<p><strong>Note:</strong> You must set the document root in your Local PHP Server to the <code>dist</code> folder of the project for you to view it in a browser.  You can do this by editing the <code>httpd.conf</code> file. See the example below:</p>
<pre><code>DocumentRoot &quot;C:\xampp\htdocs\Master_Builder\dist&quot;
&lt;Directory &quot;C:\xampp\htdocs\Master_Builder\dist&quot;&gt;
</code></pre><h3 id="greensock-tweenmax-and-timelinemax-optional-">GreenSock TweenMax and TimeLineMax <em>(optional)</em></h3>
<p>For the cool menu animation.  The files already included in the framework.  If you want to read more about TweenMax, you can check it out their <a href="http://http://greensock.com/">website</a>.</p>
<h3 id="livereload-optional-">LiveReload <em>(optional)</em></h3>
<p>It will make your life a whole lot easier once you enable this in your browser.  No more <code>CTRL + F5</code> every time you make a change in your codes.  Download the extension and install it in your preferred browser.</p>
<h2 id="setup">Setup</h2>
<p>Provided that you have <a href="http://gruntjs.com/">Grunt</a> and <a href="https://www.ruby-lang.org/en/">Ruby</a> installed in your system, follow the steps to get started with your project.</p>
<ol>
<li><p>Open <code>package.json</code> file and change <code>Master_Builder</code> the desired project name.  Do not use white spaces.  Hyphens and underscores are accepted.</p>
</li>
<li><p>Open <code>header.php</code> and <code>footer.php</code>.  Change <code>Master_Builder</code> to the project name that you chose in step 1.</p>
</li>
<li><p>Open your Command Prompt (Windows) or your Terminal (Mac OSX) and go to the directory of your project.</p>
</li>
<li><p>Run the following command: <code>npm install</code>.</p>
</li>
<li><p>Once that is completed, you&#39;re ready to rock and roll.  You can use the following commands during your development.</p>
</li>
</ol>
<h2 id="available-grunt-tasks">Available Grunt Tasks</h2>
<pre><code>grunt
</code></pre><p><strong><em>Development Task:</em></strong> Generates the project dist folder for easy deployment to any server.  This command will not minify nor uglify your CSS and JS.  Recommended on initial start up of a project.</p>
<pre><code>grunt watch
</code></pre><p><strong><em>Watch Task:</em></strong> Grunt will listen to any changes in your files will reload your page.</p>
<pre><code>grunt dist
</code></pre><p><strong><em>Production Task:</em></strong> Generates the project dist folder for easy deployment in any server.  This command will clean the <code>dist</code> folder, minify, uglify your CSS and JS, and compress your images.  In addition to this, Grunt will sift through the <code>header.php</code> and <code>footer.php</code> and will change the paths to the minified versions.  This will save you time changing them before going to deployment.  Recommended when your project is ready to go live.</p>
<p><strong>A word of caution: </strong> if you ran a <code>grunt dist</code> then a <code>grunt watch</code>, you must do a <code>grunt</code> first before you watch again. The <code>header.php</code> and <code>footer.php</code> will be pointing at the minified versions of the CSS and JS.</p>
<pre><code>grunt validate
</code></pre><p><strong>Validation Task:_</strong> Will sift through your JS and SASS files to check for any errors.</p>
<h2 id="what-s-in-the-package-">What&#39;s in the Package?</h2>
<pre><code>Master_Builder/
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
        |    └── index.php
        ├── images/
        ├── includes/
        |    ├── footer.php
        |    ├── header.php
        |    └── primary-nav.php
        ├── list/
        |    └── index.php
        ├── standard/
        |    └── index.php
        └── index.php
</code></pre><h3 id="what-goes-where">What Goes Where</h3>
<p><code>_fonts/</code> - Downloaded webfonts are placed here.</p>
<p><code>_icomoon/</code> - Downloaded custom font icons are placed here.</p>
<p><code>_images/</code> - Images used across the website are placed here.</p>
<p><code>_scripts/plugins/</code> - Place all plugin files in this folder.</p>
<p><code>_scripts/plugins/minified/</code> - Place all minified files in this folder.</p>
<p><code>_scripts/vendor/</code> -</p>
<p><code>_scss/</code> - All SCSS stylesheets.</p>
<p><code>_scss/common/</code> - Stylesheets that are commonly used through the entire project.</p>
<p><code>_scss/components/</code> - Stylesheets broken down to components for easy modification.</p>
<p><code>styles/</code> - Stylesheets from plugins are placed here.  <strong>Note:</strong> You must update <code>header.php</code> and link the CSS file.  CSS in this folder will not be concatincated with the ones you have created.</p>
<p><code>templates/</code> - All created pages for the website goes here.</p>
<p><strong>Note: </strong> I placed <code>_delete</code> files in empty folders so Git will push the folders to the repo.  You can delete these files onces you have set up the boilerplate.</p>
<h3 id="what-is-reponsible-for-what">What Is Reponsible For What</h3>
<p><code>_scripts/modules/rr.mobileMenu.js</code> - Where the mobile menu is initialized.</p>
<p><code>_scripts/modules/rr.tableScrollbar.js</code> - Where the table printing is initialized.</p>
<p><code>_scripts/plugins/minified/ScrollToPlugin.min.js</code> - Responsible for scrolling the page while using TweenMax.  Dependent on TweenMax.</p>
<p><code>_scripts/plugins/minified/TimelineMax.min.js</code> - Responsible for animating the menu icon on mobile.  Dependent on TweenMax.</p>
<p><code>_scripts/plugins/minified/TweenMax.min.js</code> - Responsible for all cool JS animation.</p>
<p><code>_scripts/plugins/jRespond.js</code> - Creating breakpoints via JavaScript to enable/disable any plugin needed.</p>
<p><code>_scripts/plugins/jspdf.cus.js</code> - Responsible for exporting the HTML Table to a PDF.  It is based from MrRio&#39;s jsPDF with a few lines of tweaks to cater all mobile devices.</p>
<p><code>_scss/common/_defaults.scss</code> - Normalizing your HTML build from <code>normalize.css</code> and HTML5 Boilerplate</p>
<p><code>_scss/common/_fonts.scss</code> - Place all CSS webfonts in this file.</p>
<p><code>_scss/common/_mixins.scss</code> - Majority of long coding techniques for cross-browser compatibilty is in this file.  Have a look and it will make your coding life much better.</p>
<p><code>_scss/common/_vars.scss</code> - Common variables that will be used across your SCSS files.  Breakpoints, colors and column numbers can be edited here.</p>
<p><code>_scss/_desktop.scss</code> - Styles for desktop only.</p>
<p><code>_scss/_mobile.scss</code> - Styles for mobile only.</p>
<p><code>_scss/_tablet.scss</code> - Styles for tablet only.</p>
<p><code>_scss/main.scss</code> - Styles from mobile that can cascade to .desktop.</p>
<p><code>_scss/ie.scss</code> - IE8 Specific CSS fixes</p>
<h2 id="mobile-responsive-tables">Mobile Responsive Tables</h2>
<h3 id="problem">Problem</h3>
<p>Tables with large number of columns and responsive websites don&#39;t mix well.  The majority&#39;s solution is to wrap the <code>table</code> with a div and assign an <code>overflow-x: scroll</code> property to allow the users swipe left and right.  But users still can&#39;t get a glimpse or an overview of the entire table.</p>
<h3 id="a-possible-solution">A Possible Solution</h3>
<p>The framework will wrap all tables with the class name <code>.printableTable</code> and create a button as a call to action to &quot;print&quot; and the option to save the table in PDF format by utilizing MrRio&#39;s <a href="http://mrrio.github.io/jsPDF/">jsPDF</a> plugin.  Users have now the ability to view the table in their mobile phones regardless of the manufacturer and or operating system. They can pinch to zoom in or out and swipe in any direction. iOS users has the option of opening the printed table in iBooks or their preferred PDF reader while Android users will save the PDF file in their device automatically and open it in their preferred PDF reader.</p>
<h2 id="usage-of-features">Usage of Features</h2>
<h4 id="htmltable-to-pdf-usage-jquery-pdftable-">HtmlTable to PDF Usage (jquery.pdfTable)</h4>
<pre><code class="lang-javascript">$(element).pdfTable( <span class="hljs-string">'init'</span>, {
    position: <span class="hljs-string">'float'</span>, <span class="hljs-comment">// top, bottom, float</span>
    orientation: <span class="hljs-string">'l'</span>,   <span class="hljs-comment">// landscape (l), portrait (p)</span>
    unit: <span class="hljs-string">'pt'</span>,         <span class="hljs-comment">// pt, mm, cm, in.</span>
    format: <span class="hljs-string">'a4'</span>,       <span class="hljs-comment">// a3, a4, a5, letter, legal</span>
    marginTop: <span class="hljs-number">20</span>,
    marginRight: <span class="hljs-number">20</span>,
    marginBottom: <span class="hljs-number">20</span>,
    marginLeft: <span class="hljs-number">20</span>,
});
</code></pre>
<p>Use <code>.pdfTable(&#39;init&#39;)</code> to initialize the plugin.  The sample code above are the default options if you do not declare any options.</p>
<p>Position is the location of the print button. The default option for this is <code>bottom</code>.</p>
<p>Orientation is the orientation of the PDF.  Options are either <code>&#39;portrait&#39;</code> or <code>&#39;landscape&#39;</code> (shortcuts <code>&#39;p&#39;</code>, <code>&#39;l&#39;</code>).</p>
<p>Unit is the measurement unit to be used when coordinates are specified. Options available are <code>&#39;pt&#39;</code> (points), <code>&#39;mm&#39;</code>, <code>&#39;cm&#39;</code>, <code>&#39;in&#39;</code>.</p>
<p>Format is the paper size.  Available options are <code>&#39;a3&#39;</code>, <code>&#39;a4&#39;</code>, <code>&#39;a5&#39;</code>, <code>&#39;letter&#39;</code>, <code>&#39;legal&#39;</code>.</p>
<p>The last 4 options are the margins that will be set when the table is printed on the PDF.</p>
<h3 id="mobile-menu-jquery-mobilemenu-">Mobile Menu  (jquery.mobileMenu)</h3>
<pre><code class="lang-html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"primary-nav"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">nav</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"navigation"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"wrap"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-title">h1</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"/"</span>&gt;</span>Master Builder<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-title">h1</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>

        <span class="hljs-tag">&lt;<span class="hljs-title">ul</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"lvl1"</span>&gt;</span>
            <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"no-link"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 1<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
                <span class="hljs-tag">&lt;<span class="hljs-title">ul</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"lvl2"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"/standard/"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Standard Content<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"/grid/"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Grid System<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 2<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-title">ul</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"lvl3"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 3<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 3<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 3<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-title">li</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-title">span</span>&gt;</span>Level 3<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-title">ul</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-title">ul</span>&gt;</span>
            <span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-title">ul</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">nav</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
</code></pre>
<p>You <strong>must</strong> follow the markup in order for the plugin to work that it is designed to be.  If one element or class is missing from the markup, the plugin might not work properly.  This plugin currently supports up to 3 levels only.</p>
<p>Add <code>.no-link</code> to <code>a</code> tags if it will not lead to anywhere.  This way when a user clicks on the link, the dropdown (if available) will open.</p>
<pre><code class="lang-javascript">$(<span class="hljs-string">'#primary-nav'</span>).mobileMenu(<span class="hljs-string">'init'</span>, {
    dropdownPos: <span class="hljs-string">'static'</span>, <span class="hljs-comment">// static, absolute</span>
    menuPos: <span class="hljs-string">'top'</span>, <span class="hljs-comment">// top, bottom</span>
    displayOn: <span class="hljs-string">'all'</span> <span class="hljs-comment">// mobile, tablet, desktop/all</span>
});
</code></pre>
<p>Use <code>$(&#39;#primary-nav&#39;).mobileMenu(&#39;init&#39;);</code> to initialize the plugin.  If you don&#39;t assign any options, it will be set to the defaults <code>static</code>, <code>top</code> and <code>all</code>;</p>
<p><code>displayOn</code> is which devices you want the mobile menu to display on.  The default option for this is <code>all</code>.</p>
<p><code>menuPos</code> is where you want the mobile menu to be positioned.  The default option for this is <code>top</code>.</p>
<p><code>dropdownPos</code> is if you want the page to scroll up to the top of the page when the user taps on the mobile menu icon.  This option is only applicable for <code>menuPos: &#39;top&#39;</code>.</p>
<h3 id="ie9-placeholder-fallback">IE9 Placeholder Fallback</h3>
<p>For all <code>input</code> tags that you want to use the <code>placeholder</code> property, add an <code>.input-placeholder</code> class and add a data attribute named <code>data-placeholder</code> with the desired placeholder text.  JS will do the rest.</p>
<h3 id="image-background-cover">Image Background Cover</h3>
<p>Add <code>.backstretch</code> on the <code>div</code> that you wish to have the image to have a <code>background: cover</code> property.  Then add data attribute named <code>data-background</code> with the path of the the image.  JS will do the rest.</p>
<h3 id="printable-table">Printable Table</h3>
<p>Add <code>.printableTable</code> on the <code>table</code> element that you want the plugin to wrap on mobile device.  If the table fits in the mobile device, it will not wrap it in a <code>div</code> and generate the <code>button</code> for the user to click.  Add a data attribute named <code>data-title</code> if you want to use the table title as the filename for the PDF.</p>
<h3 id="lazy-load-images">Lazy Load Images</h3>
<p><code>&lt;img&gt;</code> tags must have the class <code>lazy</code> attached to it and a data attribute named <code>data-original</code> containing the path of the image.  JS will do the rest.</p>
<h2 id="issues-bugs-or-feature-requests">Issues, Bugs or Feature Requests</h2>
<p>If you found any bugs, would like to contribute, have comments or suggestions, head down to the <a href="https://github.com/oninross/master_builder/issues">issues section</a> and log it in.  I will be more than happy to discuss it.</p>
<h2 id="features-to-come">Features to Come</h2>
<ul>
<li>Google Material Design components</li>
</ul>
<h2 id="credits">Credits</h2>
<p><a href="http://www.bitneko.com/">Ang Ziwei</a> for creating the gruntfile.</p>
<p><a href="http://twitter.com/MrRio">MrRio</a> for his awesome <a href="http://mrrio.github.io/jsPDF/">jsPDF</a> plugin</p>
<p><a href="http://greensock.com/">GreenSock</a> for making animating so much easier.</p>
<h2 id="license">License</h2>
<p>Copyright 2015 <a href="http://www.infiniteimaginations.co/#/hello/">Infinite Imaginations</a></p>
<p>Licensed under the MIT License</p>

		</article>
	</section>
</main>

<?php include('footer.php'); ?>


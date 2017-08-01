# wordpress-gulp-boilerplate

The aim of this boilerplate, is to facilitate the development of templates for Wordpress, automating common tasks frontend development, use an atomic pattern design in HTML components, maintenance of plugins using Bower, dynamic testing changes by BrowserSync, Build tasks, and intelligent management of boilerplate files using Git.

Some of the highlights:
- Granulation of the stylesheet. 
- Compilation SCSS styles, and use of mixins of Bootstrap3 in SASS. 
- Automatic error checking JS scripts. 
- Automatic image compression. 
- Task for development and testing of:
    - Individual components.
    - Page templates already integrated into Wordpress.
- Task to generate the build.



## Technical characteristics

- SCSS style sheets.
- Bootstrap3 Styles.
- Bootstrap3 official SASS (think mixins!).


### Vendors plugins included:

- [Bootstrap-3]: CSS & [JS components].
- [Bootstrap-3-SASS]: Mixins.
- jQuery 1.11.3: a jQuery version compatible with older browsers (_I'm talking to you, IE8_).
- html5shiv: Add HTML5 tags compatibility to IE8+.
- [bootstrap-select]: a jQuery plugin that replace the &lt;select&gt; tag with a bootstrap3 dropdown.
- [Slick-slider]: a responsibe carousel jQuery plugin.


**Note:** To add new vendors resources, use [Bower], and then add the appropriate resources in the *gulp.config.js* file.  
The resources will be automatically added to the files **js\vendors.js** and **css\vendors.css** of the project.


### Extras

**vhost_maker.bat**: This batch script helps to add a domain in Windows HOST file, and create the corresponding virtual host in XAMPP.


---

## Install guide 

### XAMPP and Wordpress

1. Download and install [XAMPP].
2. Donwload and extract the boilerplate files on XAMPP's **\htdocs** folder: ex.: C:\XAMPP\htdocs\myproject\
3. Download and install [Wordpress] in the boilerplate's **\dev** folder: ex.: C:\XAMPP\htdocs\myproject\dev\

**Note**:  See the tutorial "[How to Install Wordpress on XAMPP]" for more detailed instructions.
Just change the wordpress extract folder on step 2 of the tutorial, and use the boilerplate's **\dev** folder instead.

**Tip**: You can use the provided **vhost_maker.bat** script to automaticly add a new custom domain (ex.: dev.myproject.local) in your Windows _host_ file, and matching XAMPP _virtual host_ pointing to your wordpress install path.

### Boilerplate requirements

1. Download and install the [requirements](#requirements). 
2. Open a [command line window] in the project root folder (where this document is located).
3. Run the **node package manager** install command, to install the node modules required for the boilerplate:
```
$	npm install
```
4. Run the **bower** install command, to install all the vendors js and css dependencies.
```
$	bower install
```
6. All done! Run the [development task](#development-task) to start developing.



All the source theme files (styles, images, php, etc) are located on **\src** folder.


---



## Gulp Tasks

### Development Task
This task will compile all files from **\src** folder to **\dev** folder, and start the web server for development.

```
$	gulp
```

### Components Development Task
This task will compile all files from **\src** folder to **\components** folder, and start the web server for component development.

```
$	gulp comp
```

### Build Task
This task will compile all files from **\src** folder to **\dist** folder. Ready for distribution.

```
$	gulp build
```

---

## Folder structure
	+---components
	+---dev
		+---wp-content
			+---themes
				+---wordpress-gulp-boilerplate
	+---dist
		+---wordpress-gulp-boilerplate
	+---src
		+---fonts
		+---images
		+---inc
		+---js
		+---languages
		+---layouts
		+---scss
		¦   +---components
		+---template-parts
		+---vendors

- **\src**: Where all project files are developed.
- **\components**: Where all  individual HTML components are developed.
- **\dev**: Where the compiled project and live develop web server runs.
- **\dist**: Where the static compiled project reside, after a build.
	
---	

## Requirements

- [Git]: to download dependencies and some requirements.
- [Node.js]: to run Gulp.
- [Ruby]: to run Compass.
- [Compass] for [Ruby]: to compile the SCSS styles.
- [Gulp] for [Node.js]: to run the Gulp Tasks.
- [Bower] for [Node.js]: to install dependencies.
- [Xampp]: to run Apache, PHP, and MySQL database, and run Wordpress too.


**Note**: In some networks Node.js or bower fail to access the packages because the _git://_ protocole is blocked. A workaround is to configure **Git** to globally use the protocol _https://_ instead.  
Jus open the comand line console window and run this command:
```
	$ git config --global url."https://".insteadOf git://
```
	
---

### Misc
To view this document more easily, install chrome [Markdown Preview Plus] plugin.  

1. Set the extention .md to always opened in Chrome.  
2. Give the addon permission to access local files on Chrome's extension page.  
3. And setup the addon to display the markdown file using _"GitHub"_ theme.  



[Markdown Preview Plus]: https://chrome.google.com/webstore/detail/markdown-preview-plus/febilkbfcbhebfnokafefeacimjdckgl?utm_source=chrome-app-launcher-info-dialog

[Git]: http://git-scm.com/download/win
[Node.js]: http://nodejs.org/dist/v0.12.4/node-v0.12.4-x86.msi
[Ruby]: http://dl.bintray.com/oneclick/rubyinstaller/rubyinstaller-2.2.2.exe
[Compass]: http://compass-style.org/install/
[Gulp]: https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md
[Bower]: http://bower.io/search/
[How to Install Wordpress on XAMPP]: http://www.wikihow.com/Install-Wordpress-on-XAMPP
[Xampp]: https://www.apachefriends.org/download.html
[Wordpress]: https://wordpress.org/download/


[Bootstrap-3]: http://getbootstrap.com/
[JS components]: http://getbootstrap.com/components/
[Bootstrap-3-SASS]: http://www.cheatography.com/lukas238/cheat-sheets/bootstrap3-sass-mixins/
[Bower]: http://bower.io/#install-bower
[better-input-file]: https://github.com/Lukas238/better-input-file
[bootstrap-select]: http://silviomoreto.github.io/bootstrap-select/
[Slick-slider]: http://kenwheeler.github.io/slick/

[command line window]: https://www.youtube.com/watch?v=X3NtiEbNe-c

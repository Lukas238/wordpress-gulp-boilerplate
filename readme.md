# wordpress-gulp-boilerplate

The aim of this boilerplate, is to facilitate the development of templates for Wordpress, using modern patterns.

### Highlights
- [Underscore] blank based theme with SCSS support. 
- Bootstrap3 SASS oficial version (think mixins!). 
- Automatic error checking for Javascript scripts. 
- Automatic image compression (jpg, png, gif, and svg!). 
- Gulp task for development html/js components.
- Gulp task for compile and build the dist version.


### Included libraries

- jQuery 1.11.3: the last version compatible with older browsers (_I'm talking to you, IE8_).
- [Bootstrap-3]: [CSS] & [JS] components.
- [Bootstrap-3-SASS]: for the mixins.
- html5shiv: Add HTML5 tags compatibility to IE8+.
- [bootstrap-select]: a jQuery plugin that replace the &lt;select&gt; tag with a bootstrap3 dropdown.
- [Slick-slider]: a responsibe carousel jQuery plugin.


**Note:** To add new vendors resources, use [Bower], and then add the appropriate resources in the *gulp.config.js* file.  
The resources will be automatically added to the files **js\vendors.js** and **css\vendors.css** of the project.


## Installation

1. Download and install [XAMPP].
2. Create a proyect folder in XAMPP web root folder.
```
cd C:\XAMPP\htdocs
md wpgboilerplate
```
3. Donwload and extract the boilerplate files on the new **wpgboilerplate** folder.
4. Download the [Wordpress] zip copy and extract it in the **\wpgboilerplate\dev** folder.
5. Run ```vhost_maker.bat``` script to setup a new **dev.wpgbolierplate.local** virtual host in XAMMP and windows.
	
	>**Note**: Run this as administrator, or the script will be unable to write the windows host file.
	
	- Set the **absolute** path to XAMPP installation, or press enter to use the default (_C:\XAMPP\_).
	- Set the **absolute** path to the XAMPP web root folder, or press enter to use the default (_C:\XAMPP\htdocs\_).
	- Set the domain prefix or press enter to use the default (_dev_).
	- Set the domain suffix, or press enter to use the default (_local_).
	- Set the domain name for your project: ```wpgboilerplate```.
	- Set the **relative** path to the project **\dev** folder relative to XAMPP web root: ```wpgboilerplate\dev\```.
	
6. Start XAMPP web server.
7. Start XAMPP mySQL server.
8. In the browser navigate to http://localhost/phpmyadmin and create a new **wpgboilerplate_db** data base ( _utf8_general_ci_ collation). 
	- Set the database name to **wpgboilerplate_db**.
	- Set the database user to **root** (XAMPP default) and leave the password empty (XAMPP default).
	- Complete the rest of the fields as you prefer.
9. Install Node.js dependencies:  ```npm install```.
10. Install Bower dependencies:  ```npm bower```.
11. Use ```var theme_name = 'wbgboilerplate';``` in **gulp.config.js** file to set an unique name for your wordpress theme.  
12. Start the gulp/php developer webserver.
```
gulp
```
13. In the browser navigate to http://dev.wpgbolierplate.local/ to start the Wordpress installation.


## Gulp Tasks

### Development Task (default)
This task will compile all files from **\src** folder to **\dev** folder, and start the web server for development.

```
gulp
```

### Components Development Task
This task will compile all files from **\src** folder to **\components** folder, and start the web server for component development.

```
gulp comp
```

### Build Task
This task will compile all files from **\src** folder to **\dist** folder. Ready for distribution.

```
gulp build
```

---

## Folder structure

```
+---components
+---dev
|	\---wp-content
|		\---themes
|			\---wbgboilerplate
+---dist
|	\---wbgboilerplate
\---src
    +---inc
    +---js
    +---languages
    +---layouts
    \---template-parts
```

|Folder | Description |
|:------|:------------|
| src | Where all project files are developed. |
| components | Where all  individual HTML components are developed. |
| dev | Where the compiled project and live develop web server runs. |
| dist | Where the static compiled project reside, after a build. |
	
---	


## Requirements

- [XAMPP]: to run Apache, PHP, and MySQL database, and run Wordpress too.
- [Node.js]: to run Gulp.
- [Gulp] for [Node.js]: to run the Gulp Tasks.
- [Bower] for [Node.js]: to install dependencies.

### Installation notes


#### Fix _git can't access git://_ urls
In some networks Node.js or bower fails to access a online packages because the _git://_ protocole is blocked.

A workaround is to configure **Git** to globaly use the protocol _https://_ instead.  

```
git config --global url."https://".insteadOf git://
```

#### Fix _'libsass' bindings not found. Try reinstalling 'node-sass'?_

Tho use gulp-sass package you need to propper install Node.js plus Windows Build Tools package.

1. Run this line to automaticlly download and install the Windows Build Tools and Pythons 2.7.
```
npm install --global --production windows-build-tools
``` 
>**NOTE**: Both installations are conflict-free, meaning that they do not mess with existing installations of Visual Studio, C++ Build Tools, or Python.

2. Add the new python install folder to the Windows Path variable.

```
set PATH=%PATH%;%USERPROFILE%\.windows-build-tools\python27
```
3. Install gulp-sass version 2 to make it work on windows.
```
npm install gulp-sass@2
``` 


## Misc
To view this document more easily, install chrome [Markdown Preview Plus] add-on.  







[Markdown Preview Plus]: https://chrome.google.com/webstore/detail/febilkbfcbhebfnokafefeacimjdckgl
[Git]: http://git-scm.com/download/win
[Node.js]: https://nodejs.org/es/download/
[Gulp]: https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md
[Bower]: http://bower.io/#install-bower
[Xampp]: https://www.apachefriends.org/download.html
[Wordpress]: https://wordpress.org/download/
[Bootstrap-3]: http://getbootstrap.com/
[CSS]: http://getbootstrap.com/css/
[JS]: http://getbootstrap.com/components/
[Bootstrap-3-SASS]: http://www.cheatography.com/lukas238/cheat-sheets/bootstrap3-sass-mixins/
[better-input-file]: https://github.com/Lukas238/better-input-file
[bootstrap-select]: http://silviomoreto.github.io/bootstrap-select/
[Slick-slider]: http://kenwheeler.github.io/slick/
[underscore]: https://underscores.me/
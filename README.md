# StrongerTogether

Wordpress Theme developed for Stronger Together Logan. This project was part of a felloship of Code For Australia.

## Getting Started

This Theme has the following feautures:

* Event Page
* Custom Post type designed for location purposes
* Comments with upload Image options
* Custom Post Types to keep a more organized back-end

### Prerequisites

This theme has been tested and developed on wordpress Version 5.5.1

### Plugins

This theme uses the following plugins:

#### Essentials
* ACF Archive version 1.0.6
* Advanced Custom Fields Version 5.9.0
* Advanced Custom Fields PRO Version 5.9.0

* GEO my WP Version 3.6.1
* GMW Add-on - AJAX Forms Version 1.3.2.1

* Search & Filter Pro Version 2.5.1

* The Events Calendar Version 5.1.6 
* The Events Calendar PRO Version 5.1.4
* The Events Calendar: Community Events Version 4.8.0
* The Events Calendar: Filter Bar Version 4.10.2

* wpDiscuz Version 7.0.7
* wpDiscuz - Media Uploader Version 7.0.6

### Optional
* EWWW Image Optimizer Version 5.7.0
* Reveal IDs Version 1.5.4
* Show Current Template Version 0.3.4
* Wordfence Security
* Yoast SEO Version 14.8.1

## Folder Structure

+-- assets                  
|    +--css                     # Compiled files (alternatively `dist`)
|        +-- main.css
|        +-- owl.carousel.css
|        +--owl.theme.default.css
|   +--images
|       +-- icons
|   +-- js
|       +-- main.js
|       +-- owl.carousel.min.js
|        +-- owl.navigation.js               
+-- geo-my-wp              # Custom templates for the Geo My WP Plugin
+-- src 
|    +-- html
|    +-- images
|    +-- js
|        +-- main.js  
|    +-- scss  # here you have all the scss files to edit styles.
|        +-- abstracts
|        +-- base
|        +-- components
|        +-- layout
|        +-- vendors
|        +-- main.scss   
+-- template-parts
+-- tribe
+-- tribe-events


## Using Gulp to compile css and js

### 1.Install and initialize npm

<<<<<<< HEAD
`<npm init>`
=======
`<[npm init]>`
>>>>>>> ebdd51c85f90a49f2bdea4341445a75148fc594b

### 2.Install gulp

`npm install gulp --save-dev`

### 3.Install dependecies

`npm install gulp-newer gulp-imagemin gulp-htmlclean gulp-noop gulp-deporder gulp-concat gulp-strip-debug gulp-terser gulp-sourcemaps gulp-sass gulp-postcss postcss-assets autoprefixer css-mqpacker cssnano --save-dev`

### Once installed type "gulp" in VCode or Atom. Gulp will compile every time there is a change on any js or scss files inside the src folder.

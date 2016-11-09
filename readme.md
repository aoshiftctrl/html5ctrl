# html5ctrl
A minimal webdevelopment framework to kickstart a website

## it's based on
- HTML5
- CSS
- jQuery
- PHP
- Gulp.js
- npm
- and Google Webfonts

## node.js
If you want to use the gulp build process you’ll need to install node.js first. Go to https://nodejs.org and install the JavaScript runtime.

## npm package manager
Install the npm dependencies with
```
npm install —save-dev
```
For more information on npm go to https://www.npmjs.com and read the documentation.

## gulp.js build process
Configure the proxy to support browserSync in the gulpfile.js
```
gulp.task('serve’, function({
 browserSync.init({
  proxy: localhost:{port}/{your directory}
 });
});
```
Start the gulp.js build proccess with
```
gulp serve
```

### version 1.0
WIP

made with <3 by shiftctrl

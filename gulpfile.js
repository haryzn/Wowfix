var gulp = require("gulp");
cleanCSS = require("gulp-clean-css");
uglify = require("gulp-uglify");
rename = require("gulp-rename");
gulpif = require("gulp-if");
merge = require("merge-stream");
concat = require("gulp-concat");
del = require("del");
removeCode = require("gulp-remove-code");
map = require("map-stream");
replace = require("gulp-replace");

gulp.task("copyBlog", function () {
  return gulp
    .src(["./**/*.*", "!./**/*.git*", "!./node_modules/**"])
    .pipe(gulp.dest("WOWFIX"));
});

const cssPath = "WOWFIX/style_temp.css";
const jsPath = "WOWFIX/assets/js/*.js";

// minifying css
gulp.task("minifyCss", function () {
  return gulp
    .src(cssPath)
    .pipe(cleanCSS({ compatibility: "ie10" }))
    .pipe(gulp.dest("WOWFIX/", { overwrite: true }));
});

// minifying js
gulp.task("minifyJs", function () {
  return gulp
    .src(jsPath)
    .pipe(gulpif("!**/*.min.js", uglify({ mangle: false })))
    .pipe(gulp.dest("WOWFIX/assets/js/", { overwrite: true }));
});

// CSS concatination
gulp.task("blogCssJoin", function () {
  return gulp
    .src([
      "WOWFIX/assets/css/variables.css",
      "WOWFIX/assets/css/flickity.css",
      "WOWFIX/assets/css/reset.css",
      "WOWFIX/assets/css/flickity.css",
      "WOWFIX/assets/css/skeleton.css",
      "WOWFIX/assets/css/header.css",
      "WOWFIX/assets/css/home.css",
    ])
    .pipe(concat("style_temp.css"))
    .pipe(gulp.dest("WOWFIX/"));
});

// Creating main style.css by combining existing style.css and style_temp.css
gulp.task("create-theme-css", function () {
  return gulp
    .src(["WOWFIX/style.css", "WOWFIX/style_temp.css"])
    .pipe(concat("style.css"))
    .pipe(gulp.dest("WOWFIX/", { overwrite: true }));
});

// Removes unused style_temp.css
gulp.task("remove-temp-css", function () {
  return del("WOWFIX/style_temp.css", { force: true });
});

// Removes import css file rules once all css are minified and copied into style.css
gulp.task("removeImportCssRulesForProduction", function () {
  return gulp
    .src("WOWFIX/style.css")
    .pipe(
      removeCode({ production: true, commentStart: "/*", commentEnd: "*/" })
    )
    .pipe(gulp.dest("WOWFIX/"));
});

// gulp build task for WOWFIX version of theme
gulp.task(
  "build",
  gulp.series(
    "copyBlog",
    "blogCssJoin",
    "removeImportCssRulesForProduction",
    "minifyCss",
    "minifyJs",
    "create-theme-css",
    "remove-temp-css",
  )
);

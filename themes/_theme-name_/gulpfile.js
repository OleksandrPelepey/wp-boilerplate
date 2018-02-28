var gulp = require('gulp');
var resolveDependencies = require('gulp-resolve-dependencies');
var concat = require('gulp-concat');
var clean = require('gulp-dest-clean');
var babel = require('gulp-babel');

var sass = require('gulp-sass');

var assetsSrcDir = './assets/src';
var assetsDistDir = './assets/dist';
var entryFiles = {
    styles: [
        assetsSrcDir + '/styles/main.scss'
    ],
    scripts: [
        assetsSrcDir + '/js/main.js'
    ]
};
var sassIncludePaths = ['node_modules/materialize-css/sass/'];


gulp.task('default', ['scripts', 'styles']);


gulp.task('scripts', function() {
    return gulp.src(entryFiles.scripts)
        .pipe(resolveDependencies({
            pattern: /\* @requires [\s-]*(.*\.js)/g
        }))
            .on('error', function(err) {
                console.log(err.message);
            })
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('main.js'))
        .pipe(clean(assetsDistDir + '/js/'))
        .pipe(gulp.dest(assetsDistDir + '/js/'));
});

gulp.task('styles', function () {
    return gulp.src(entryFiles.styles)
        .pipe(sass({
            includePaths: sassIncludePaths
        }).on('error', sass.logError))
        .pipe(clean(assetsDistDir + '/styles/'))
        .pipe(gulp.dest(assetsDistDir + '/styles/'));
});

gulp.task('watch',function(){
    gulp.watch(entryFiles.styles, ['styles']);
    gulp.watch(entryFiles.scripts, ['scripts']);
});

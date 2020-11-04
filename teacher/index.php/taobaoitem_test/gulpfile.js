//利用gulp工具进行代码的管理。

const gulp = require('gulp'); //引入gulp模块。 gulp对象

const html = require('gulp-minify-html'); //引入压缩html的包。函数

const css = require('gulp-clean-css'); //引入压缩css的包。函数

const uglifyjs = require('gulp-uglify'); //引入压缩js的包。函数

//gulp对象
//gulp.task(任务名称,callback):创建任务。
//gulp.src(url):操作的文件目录路径，引入文件的目录
//gulp.dest(url):输出文件的目录路径
//pipe():管道,流,串联。
//执行gulp任务  -- gulp 任务名称

//1.新建复制文件的任务 - 不需要安装任何包。
//如果项目中的文件不需要优化，直接复制。
// gulp.task('copy', () => {
//     return gulp.src('src/*.html').pipe(gulp.dest('dist/'));
//     //将src目录下面的所有的html文件复制到dist目录中，如果dist目录不存在，自动创建。
// });

//2.压缩html文件 - gulp-minify-html包进行压缩。
gulp.task('html', () => {
    return gulp.src('src/*.html') //引入文件路径
        .pipe(html()) //执行压缩
        .pipe(gulp.dest('dist/')); //输出
});

//3.压缩css文件 - gulp-clean-css包进行压缩。
gulp.task('css', () => {
    return gulp.src('src/css/*.css') //引入文件路径
        .pipe(css()) //执行压缩
        .pipe(gulp.dest('dist/css/')); //输出
});

//4.压缩js文件 - gulp-uglify 进行压缩。
gulp.task('uglifyjs', () => {
    return gulp.src('src/script/*.js') //引入文件路径
        .pipe(uglifyjs()) //执行压缩
        .pipe(gulp.dest('dist/script/')); //输出
});
const { src, dest, watch, series, parallel } = require("gulp");

// 共通
const rename = require("gulp-rename");

// 読み込み先（common.scssのみ指定）
const srcPath = {
  css: "scss/common.scss", // common.scssのみを対象
  js: "src/js/*.js",
  img: "src/img/**/*",
  html: "src/*.html",
};

// 吐き出し先（なければ生成される）
const destPath = {
  css: "css/", // 吐き出し先を変更
  js: "assets/js/",
  img: "assets/img/",
  html: "*.html",
};

// ブラウザーシンク（リアルタイムでブラウザに反映させる処理）
const browserSync = require("browser-sync");
const connectSSI = require("connect-ssi");
const browserSyncOption = {
  server: {
    baseDir: "./",
    middleware: [
      connectSSI({
        baseDir: "./src/",
        ext: ".html",
      }),
    ],
  },
  startPath: "/",
};
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// Sassファイルのコンパイル処理（DartSass対応）
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const postcss = require("gulp-postcss");
const cssnext = require("postcss-cssnext");
const cleanCSS = require("gulp-clean-css");
const sourcemaps = require("gulp-sourcemaps");
const browsers = [
  "last 2 versions",
  "> 5%",
  "ie = 11",
  "not ie <= 10",
  "ios >= 8",
  "and_chr >= 5",
  "Android >= 5",
];

const cssSass = () => {
  return src(srcPath.css)
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError("Error:<%= error.message %>"),
      }),
    )
    .pipe(sassGlob())
    .pipe(
      sass.sync({
        includePaths: ["src/sass"],
        outputStyle: "expanded",
      }),
    )
    .pipe(postcss([cssnext(browsers)]))
    .pipe(sass({ outputStyle: "expanded", sourceMap: false }))
    .pipe(rename("common.css")) // 出力ファイル名を変更
    .pipe(dest(destPath.css))
    .pipe(
      notify({
        message: "コンパイル出来たよ！", // メッセージ
        onLast: true,
      }),
    );
};

// JSファイルの結合と圧縮
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const jsMin = () => {
  return src(srcPath.js)
    .pipe(concat("script.js"))
    .pipe(dest(destPath.js))
    .pipe(uglify())
    .pipe(rename({ extname: ".min.js" }))
    .pipe(dest(destPath.js));
};

// 画像圧縮
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");
const imgImagemin = () => {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({ quality: 80 }),
          imageminPngquant(),
          imageminSvgo({ plugins: [{ removeViewbox: false }] }),
        ],
        {
          verbose: true,
        },
      ),
    )
    .pipe(dest(destPath.img));
};

// ファイルの変更を検知
const watchFiles = () => {
  watch(srcPath.js, series(jsMin, browserSyncReload));
  watch(srcPath.css, series(cssSass, browserSyncReload)); // common.scss のみ監視
  watch(srcPath.img, series(imgImagemin, browserSyncReload));
  watch(srcPath.html, series(browserSyncReload));
};

// 画像だけ削除
const del = require("del");
const delPath = {
  img: "./assets/img/",
};
const clean = (done) => {
  del(delPath.img, { force: true });
  done();
};

// npx gulpで出力する内容
exports.default = series(
  series(clean, cssSass, jsMin, imgImagemin),
  parallel(watchFiles, browserSyncFunc),
);

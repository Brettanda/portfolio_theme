const path = require('path');

const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const devMode = process.env.NODE_ENV !== 'production';
// const miniCssExtractPlugin = new MiniCssExtractPlugin({
//   moduleFilename: ({ name }) => `${name.replace('/js/', '/css/')}.css`
// });

const WebpackFtpUpload = require('webpack-ftp-upload-plugin');

const TerserJSPlugin = require('terser-webpack-plugin');

const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = {
  entry: {
    // index: './assets/scripts/index.js',
    script: ['./assets/scripts/scripts.js'],
    style: ['./assets/styles/style.scss'],
  },
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'assets/compiled')
  },
  node: {
    fs: 'empty',
    child_process: 'empty'
  },
  optimization: {
    minimizer: [new TerserJSPlugin({}),new OptimizeCssAssetsPlugin({})],
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['babel-preset-env']
          }
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              // you can specify a publicPath here
              // by default it uses publicPath in webpackOptions.output
              publicPath: 'compile',
              hmr: process.env.NODE_ENV === 'development',
              // minimize: true,
              reloadAll: true,
            },
          },
          'css-loader',
          // 'postcss-loader',
          'sass-loader',
          // 'style-loader',
        ],
      },
    ]
  },
  externals: {
    jquery: 'jQuery'
  },
  plugins: [
    // Adding our UglifyJS plugin
    new UglifyJSPlugin(),
    new MiniCssExtractPlugin({
      // Options similar to the same options in webpackOptions.output
      // both options are optional
      // filename: '[name].css',
      // chunkFilename: '[id].css',
      filename: devMode ? '[name].min.css' : '[name].[hash].css',
      chunkFilename: devMode ? '[id].min.css' : '[id].[hash].css',
      // moduleFilename: ({ name }) => `${name.replace('/js/', '/css/')}.css`
    }),
    new OptimizeCssAssetsPlugin({
      assetNameRegExp: /\.optimize\.css$/g,
      cssProcessor: require('cssnano'),
      cssProcessorPluginOptions: {
        preset: ['default', { discardComments: { removeAll: true } }],
      },
      canPrint: true
    }),
    new WebpackFtpUpload({
      host: 'pi.brettanda.ca',
      port: '226',
      username: 'pi',
      password: '499136005',
      local: path.join(__dirname, 'dist'),
      path: '../../var/www/html/portfolio/wp-content/themes/brettanda',
  })
  ],
};
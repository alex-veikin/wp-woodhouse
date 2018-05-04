const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
// const CopyWebpackPlugin = require('copy-webpack-plugin');
const autoprefixer = require('autoprefixer');

let conf = {
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: 'main.js',
        publicPath: 'dist/'
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ['css-hot-loader'].concat(ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        'css-loader',
                        'group-css-media-queries-loader',
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: [
                                    autoprefixer({
                                        browsers:['ie >= 8', 'last 4 version']
                                    })
                                ],
                                sourceMap: true
                            }
                        },
                        'sass-loader'
                    ]
                }))
            },
            {
                test: /\.js$/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {presets: ['env', 'stage-3']}
                    }
                ]
            },
            {
                test: /\.(jpg|png|svg|gif)$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            name: 'img/[name].[ext]'
                        }
                    }
                ]
            },
            // {
            //     test: /\.html$/,
            //     use: [
            //         {
            //             loader: 'html-loader',
            //             options: {
            //                 publicPath: 'dist/',
            //                 outputPath: path.resolve(__dirname, './dist'),
            //                 name: '[name].[ext]'
            //             }
            //         }
            //     ]
            // },
            // {
            //     test: /\.(eot|ttf|woff)$/,
            //     use: [
            //         {
            //             loader: 'file-loader',
            //             options: {
            //                 // publicPath: '',
            //                 outputPath: 'fonts/',
            //                 // name: '[name].[ext]'
            //             }
            //         }
            //     ]
            // }
        ]
    },
    devServer: {
        contentBase: path.resolve(__dirname, './src'),
        // publicPath: '',
        watchContentBase: true,
        watchOptions: {
            poll: true
        },
        overlay: true,
        inline: true,
        hot: true,
        hotOnly: true,
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        }),
        new ExtractTextPlugin({
            filename: 'style.css',
            allChunks: true,
            disable: process.env.NODE_ENV === 'development'
        }),
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NamedModulesPlugin()
    ]
};

module.exports = (env, options) => {
    let productions = options.mode === 'production';

    conf.devtool = productions ? false : 'eval-sourcemap';

    return conf;
};
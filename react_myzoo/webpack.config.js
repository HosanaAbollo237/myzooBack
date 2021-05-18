var path = require('path');

var HtmlWebpackPlugin =  require('html-webpack-plugin');

module.exports = {
    mode: 'development',
    entry : './src/index.js',
    output : {
        path : path.resolve(__dirname , 'dist'),
        filename: 'index_bundle.js',
        publicPath: '/'
    },
    devServer: {
        historyApiFallback: true,
    },
    module : {
        rules : [
            {
             test : /\.(js)$/,
             exclude: /node_modules/,
             use:'babel-loader'
            },
            {
                test: /\.(png|jpg|jpeg|svg|gif)$/i,
                type: 'asset/resource'
            },
            {
                test : /\.css$/, 
                use:['style-loader', 'css-loader']
            }
        ]

    },
    plugins : [
        new HtmlWebpackPlugin ({
            template : './src/index.html'
        })
    ]

}
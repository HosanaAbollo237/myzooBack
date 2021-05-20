var path = require('path');

var HtmlWebpackPlugin =  require('html-webpack-plugin');

module.exports = {
    mode: 'development',
    entry : { index: path.join(__dirname, '/src/index.js') },
    output : {
        path : path.resolve(__dirname , 'dist'),
        filename: 'index_bundle.js',
        publicPath: '/'   /* */
    },
    devtool: 'inline-source-map',
    devServer: {
        publicPath: "http://localhost:8080/dist/",
        contentBase: path.resolve(__dirname, './dist'),
        proxy: {
            "/api": {
                target: 'http://localhost:80/myzoo/front/',
                secure: false,
                changeOrigin: true,
            }
        },
        host: "localhost",
        port: 8080,
        historyApiFallback: true,
        inline: true,
        hot: true,
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
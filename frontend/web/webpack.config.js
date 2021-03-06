module.exports = {
    //页面入口文件配置
    entry: {
        site: './webpack/site.js',
    },
    //入口文件输出配置
    output: {
        path: 'js',
        filename: '[name].js'
    },
    module: {
    	//加载器配置
        loaders: [
            { test: /\.css$/, loader: 'style!css' }
        ]
    }
};

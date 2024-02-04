const { defineConfig } = require('@vue/cli-service')
const CopyWebpackPlugin = require('copy-webpack-plugin');
module.exports = defineConfig({
  transpileDependencies: true,
    outputDir: 'public_html',
  configureWebpack: {
    plugins: [
      new CopyWebpackPlugin({
        patterns: [
          { from: './orion', to: 'orion' },
          { from: './.htaccess', to: '' },
        ],
      }),
    ],
  },
})

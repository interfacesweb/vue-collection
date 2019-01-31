module.exports = {
  publicPath: './',
  devServer: {
    proxy: {
      '^/api': {
        target: 'http://localhost/vue-collection',
      },
      '/': {
        target: 'http://localhost',
      }

    }
  }
}

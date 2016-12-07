module.exports = {
  development: {
    files: {
      "<%= theme %>/dist/styles/app.css": "<%= theme %>/scss/app.scss"
    },
    options: {
      style: "compressed",
      sourcemap: 'auto',
      noCache: true
    }
  }
};

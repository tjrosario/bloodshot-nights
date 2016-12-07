module.exports = {
  options: {
    livereload: true
  },
  css: {
    files: ["<%= theme %>/scss/**/*"],
    tasks: ["scsslint:all", "sass:development"]
  }
};

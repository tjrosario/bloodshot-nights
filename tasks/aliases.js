module.exports = {
  "default": [],
  lint: ['scsslint:all'],
  dev: [
    "lint", 
    "sass:development",
    "notify", 
    "watch"
  ]
};

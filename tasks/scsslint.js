module.exports = {
  all: ["<%= theme %>/scss/**/*.scss"],
  options: {
    config: "config/scss-lint.yml",
    reporterOutput: "reports/scss-lint-report.xml",
    colorizeOutput: true
  }
};

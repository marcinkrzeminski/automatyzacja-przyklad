
var path = require('path');

/**
* WordPress destination paths should be inside WP template
*/
function prepareWpConfig(config) {
  var dest = config.dest;
  dest.base = path.join(dest.wordpress, 'wp-content/themes',
    dest.wordpressTheme, dest.base);
  
  var wordpressTemplatePath = path.join(config.dest.wordpress, 'wp-content/themes', config.dest.wordpressTheme);
  config.src.templatesWatch = [
    path.join(wordpressTemplatePath, config.src.templatesPath, '**/*.twig'),
    path.join(wordpressTemplatePath, '**/*.php')
  ];
  
  return config;
}

function prepareConfig(config) {

  
  config = prepareWpConfig(config);
  
  
  config.src.templatesBuild[0] = path.join(config.src.base, config.src.templatesBuild[0]);
  return config;
}

module.exports = prepareConfig;

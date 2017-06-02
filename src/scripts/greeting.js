'use strict';

var $ = require('jquery');

var greeting = function (name) {
  var element = $('.js-greeting');

  if (element.length > 0) { // eslint-disable-line no-magic-numbers
    element.text(name);
  }
};

module.exports = greeting;

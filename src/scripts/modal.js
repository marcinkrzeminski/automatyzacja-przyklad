'use strict';

const $ = require('jquery');

const modal = {
    modalOpen() {
        $('.js-modal-trigger').on('click', function(e) {
            e.preventDefault();
            $('.js-modal-window').addClass('u-hidden');
            $(this).parents('.js-modal-parent').find('.js-modal-window').removeClass('u-hidden');
        });
    },
    modalClose() {
        $('.js-modal-close').on('click', function(e) {
            e.preventDefault();
           $(this).parents('.js-modal-window').addClass('u-hidden');
        });
    },
    init() {
        this.modalOpen();
        this.modalClose();
    }
}

module.exports = modal;

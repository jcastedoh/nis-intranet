/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.nis = {
    attach: function (context, settings) {
      $('#block-views-block-news-block-1 .views-row').each(function() {
        $(this).find('.news-image').attr('style', 'background-image: url(' + $(this).find('img').attr('src') + ')');
      });

      $('.view-id-staff_directory .views-row').each(function() {
        $(this).find('.staff-image').attr('style', 'background-image: url(' + $(this).find('img').attr('src') + ')');
      });
    }
  };

})(jQuery, Drupal);

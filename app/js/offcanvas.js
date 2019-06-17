$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    $('body').toggleClass('fixed-body')
    $('.top-header').addlass('top-header-deleted')
  })
})
  
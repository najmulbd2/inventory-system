/**
 * Form Layout Vertical
 */
'use strict';

(function () {
  const datepickerList = document.querySelectorAll('.dob-picker');

  // Flat Picker Birth Date
  if (datepickerList) {
    datepickerList.forEach(function (datepicker) {
      datepicker.flatpickr({
        monthSelectorType: 'static'
      });
    });
  }
})();

// select2 (jquery)
$(function () {
  // Form sticky actions
  var topSpacing;
  const stickyEl = $('.sticky-element');

  // Init custom option check
  window.Helpers.initCustomOptionCheck();

  // Set topSpacing if the navbar is fixed
  if (Helpers.isNavbarFixed()) {
    topSpacing = $('.layout-navbar').height() + 7;
  } else {
    topSpacing = 0;
  }

  // sticky element init (Sticky Layout)
  if (stickyEl.length) {
    stickyEl.sticky({
      topSpacing: topSpacing,
      zIndex: 9
    });
  }

  // Select2 Country
  var select2 = $('.select2');
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>').select2({
        placeholder: 'Select value',
        dropdownParent: $this.parent()
      });
    });
  }
});

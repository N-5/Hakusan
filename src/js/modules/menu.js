import $ from 'jquery';

export default () => {
  const sidemenuTarget = '[data-sidemenu-search], [data-btn-search], [data-sidemenu-search-btn-close]';
  const menuTarget = '[data-menu-hamburger], [data-menu-navigation], main, .header';

  $(function () {
    $('[data-menu-hamburger]').on('click', function () {
      $(menuTarget).toggleClass('js-open');
    });

    $('[data-btn-search]').on('click', function () {
      $(sidemenuTarget).toggleClass('js-open');
      return false;
    });

    $('[data-sidemenu-search-btn-close]').on('click', function () {
      $(sidemenuTarget).removeClass('js-open');
      return false;
    });
  });
};

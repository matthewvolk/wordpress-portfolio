$(function () {

  // https://stackoverflow.com/questions/5057191/toggleclass-and-remove-class-from-all-other-elements
  $('.post-sort-container').on('click', '.post-type-link', function(event) {
    event.preventDefault();
    $(this).toggleClass('active-post-type').siblings().removeClass('active-post-type');

    console.log($(this)[0].innerText)
  });

 });

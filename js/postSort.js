$('.post-type-link').on('click', function(event) {
  $(this) // The item clicked

  if $(this) contains '.active-post-type' {
    // Do nothing
  } else {
    // Make it the new active class
    $(this).addClass('.active-post-type')

    // Remove the active class from the other item
    let activeElement = document.querySelectorAll('#post-sort-container a .active-post-type');
    activeElement.removeClass('.active-post-type');

    let ajaxQueryData = $(this).innerHTML;

    $.ajax({
      url: '/custom-api-URL',
      method: 'GET',
      contentType: 'application/json',
      data: JSON.stringify({ ajaxQueryData }),
    })
  }
}

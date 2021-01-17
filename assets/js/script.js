$(document).ready(function () {
  $('.open-btn').click(function () {
    $('#mySidebar').css('width', '280px');
    $('#main').css('margin-left', '280px');
    $(this).css('visibility', 'hidden');
    $('.close-btn').css('visibility', 'visible');
    $('.avatar-img').css('visibility', 'visible');
    $('.side-link').css('padding-left', '16px');
  });
});

$(document).ready(function () {
  $('.close-btn').click(function () {
    $('#mySidebar').css('width', '60px');
    $('#main').css('margin-left', '60px');
    $('.open-btn').css('visibility', 'visible');
    $(this).css('visibility', 'hidden');
    $('.avatar-img').css('visibility', 'hidden');
    $('.side-link').css('padding-left', '7px');
  });
});
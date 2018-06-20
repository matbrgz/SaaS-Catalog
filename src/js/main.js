/* ----------------------------------------------------------- */
/*  Tabs
/* ----------------------------------------------------------- */
$('.tabs li').click(function() {
    id = ($(this).attr('id')).split('-');
    $('.tabs li').removeClass('current');
    $('section').removeClass('current');
    $('#t-' + id[1]).addClass('current');
    $('#s-' + id[1]).addClass('current');
});
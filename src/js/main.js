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


/* ----------------------------------------------------------- */
/*  Modal
/* ----------------------------------------------------------- */

$('#modal-lg').on('show.bs.modal', function (e) {
    var button	 = $(e.relatedTarget);
    var modal		 = $(this);
    var title		 = button.data('title');
    $(this).find('.modal-title').text(title)
    var loadurl = e.relatedTarget.dataset.loadUrl;
    $(this).find('.modal-body').load(loadurl);
});
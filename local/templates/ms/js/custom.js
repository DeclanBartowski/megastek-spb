$(document).on('click', '[data-name]', function (){
    $('#name_review').html($(this).data('name'));
    $('#date_review').html($(this).data('date'));
    $('#contentReview').html($(this).data('text'));
})
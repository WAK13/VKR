$('.accident-item').click(function () {
    let val = $(this).text();
    let id = $(this).attr('data-id');

    $('.accident-val').text(val);
    $('.accident-value').val(id);
})
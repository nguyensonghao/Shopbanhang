$(document).ready(function () {
    $('#form-add-product-category').validate({
        rules: {
            'category-name': {
                required: true
            },
        },
        messages: {
            'category-name': {
                required: 'Không được để trống'
            },
        }
    })

    $('#left-menu li').click(function () {
        $(this).toggleClass('close-menu');
    })
})

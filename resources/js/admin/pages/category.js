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
})
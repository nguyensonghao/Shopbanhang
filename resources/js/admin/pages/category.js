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

    $('#list-category-product-page [name="query-search"]').easyAutocomplete({
        url: function (query) {
            return 'http://localhost/blog/public/index.php/admin/category/search?query=' + query;
        },
        getValue: 'name',
        requestDelay: 300,
        ajaxSettings: {
            method: 'GET'
        }
    })

    $('.btn-group-action .btn-delete-list').click(function () {
        console.log('test');
    })
})

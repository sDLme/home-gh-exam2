/**
 * Created by Marina on 20.12.2016.
 */

    $(function () {
        var $grid = $('#grid').isotope({
            itemSelector: '#grid .item',
            layoutMode: 'fitRows'
        });
        $('#list li').on('click', function () {
            $grid.isotope({filter: $(this).attr('data-filter-by')});
        });
    });


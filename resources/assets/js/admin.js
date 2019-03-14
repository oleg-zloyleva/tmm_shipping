$(document).ready(function () {



    $('.btn-control-admin').on('click', function () {
        let $this = $(this);

        if (!$this.hasClass('active')) {
            $('.btn-control-admin').removeClass('active');
            $this.addClass('active');
        }

        if ($this.attr('data-trans') === 'ground') {
            $('.table-ocean').hide();
            $('.table-ground').show();
        } else {
            $('.table-ground').hide();
            $('.table-ocean').show();
        }
    });

    $('.add-row-ground').on('click', function () {
        let auction = $('[name="auction-ground"]').val();
        let location = $('[name="location-ground"]').val();
        let port = $('[name="port-ground"]').val();
        let price = $('[name="price-ground"]').val();

        let addRow =
            '<div class="table__row">' +
            '    <div class="table__col">' + auction + '</div>' +
            '    <div class="table__col">' + location + '</div>' +
            '    <div class="table__col">' + port +'</div>' +
            '    <div class="table__col">' + price +'</div>' +
            '    <div class="table__col">' +
            '        <button class="delete-row">Delete</button>' +
            '    </div>' +
            '</div>';

        if (auction !== '' && location !== '' && port !== '' && price !== '') {
            $('.table-body-ground').prepend(addRow);

            $('[name="auction-ground"]').val('');
            $('[name="location-ground"]').val('');
            $('[name="port-ground"]').val('');
            $('[name="price-ground"]').val('');
        }

    });

    $('.add-row-ocean').on('click', function () {
        let port = $('[name="port-ocean"]').val();
        let destination = $('[name="destination-ocean"]').val();
        let price = $('[name="price-ocean"]').val();

        let addRow =
            '<div class="table__row">' +
            '    <div class="table__col">' + port + '</div>' +
            '    <div class="table__col">' + destination + '</div>' +
            '    <div class="table__col">' + price +'</div>' +
            '    <div class="table__col">' +
            '        <button class="delete-row">Delete</button>' +
            '    </div>' +
            '</div>';

        if (port !== '' && destination !== '' && price !== '') {
            $('.table-body-ocean').prepend(addRow);

            $('[name="port-ocean"]').val('');
            $('[name="destination-ocean"]').val('');
            $('[name="price-ocean"]').val('');
        }

    });

    $('body').on('click', '.delete-row', function() {
        $(this).closest('.table__row').remove();
    });

});
$(document).ready(function() {
    var tableElement = $('#datatables-products');
    if (tableElement.length) {
        var productsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: productsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'image', name: 'image'},
                { data: 'name', name: 'name'},
                { data: 'description', name: 'description'},
                { data: 'status', name: 'status'},
                { data: 'action', name: 'action'},
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-products tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event


    } else {
        console.error("Table with ID 'datatables-stocks' not found.");
    }

});

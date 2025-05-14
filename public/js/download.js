$(document).ready(function() {
    var tableElement = $('#datatables-downloads');
    if (tableElement.length) {
        var productsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 10,
            lengthChange: true,
            processing: true,
            serverSide: true,
            ajax: productsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { data: 'category', name: 'category' },
                { data: 'name', name: 'name' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-downloads tbody tr:first').trigger('click');
                }, 500);
            }
        });
    } else {
        console.error("Table with ID 'datatables-downloads' not found.");
    }
});

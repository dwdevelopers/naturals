$(document).ready(function() {
    var tableElement = $('#datatables-services');
    if (tableElement.length) {
        var servicesDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: servicesDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title', name: 'title' },
                { data: 'short_description', name: 'short_description' },

                { data: 'description', name: 'description' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-services tbody tr:first').trigger('click');
                }, 500);
            }
        });

        $('#datatables-services tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            console.log('Clicked row data:', data);
        });

    } else {
        console.error("Table with ID 'datatables-services' not found.");
    }
});

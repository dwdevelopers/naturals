$(document).ready(function() {
    var tableElement = $('#datatables-subscriptions');
    if (tableElement.length) {
        var subscriptionsDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: subscriptionsDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-subscriptions tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event (if needed)
        $('#datatables-subscriptions tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            console.log('Clicked row data:', data);
        });

    } else {
        console.error("Table with ID 'datatables-subscriptions' not found.");
    }
});

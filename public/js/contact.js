$(document).ready(function() {
    var tableElement = $('#datatables-contactus');
    if (tableElement.length) {
        var activitiesDataUrl = tableElement.data('url');
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: activitiesDataUrl,
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'subject', name: 'subject' },
                { data: 'message', name: 'message' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-contactus tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event (if needed)
        $('#datatables-contactus tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            console.log('Clicked row data:', data);
        });

    } else {
        console.error("Table with ID 'datatables-contactus' not found.");
    }
});

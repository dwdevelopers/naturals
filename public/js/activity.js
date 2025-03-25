$(document).ready(function() {
    var tableElement = $('#datatables-project-activity');
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
                { data: 'activity_name', name: 'activity_name' },  
                { data: 'description', name: 'description' },  
                { data: 'project_name', name: 'project_name' }, 
                { data: 'status', name: 'status' }, 
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-project-activity tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event (if needed)
        $('#datatables-project-activity tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            console.log('Clicked row data:', data);
        });

    } else {
        console.error("Table with ID 'datatables-project-activity' not found.");
    }
});
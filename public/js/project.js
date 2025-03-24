$(document).ready(function() {
    var tableElement = $('#datatables-projects');
    if (tableElement.length) {
        var projectsDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            scrollX: true,
            processing: true, 
            serverSide: true, 
            ajax: projectsDataUrl, 
            columns: [
                { data: 'id', name: 'id' },               
                { data: 'name', name: 'name' },  // Updated from 'name' to 'project_name'
                { data: 'description', name: 'description' },  // Updated from 'details' to 'description'
                { data: 'additional_info', name: 'additional_info' }, // Added 'additional_info' column
                { data: 'status', name: 'status' }, // Added 'additional_info' column
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-projects tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event (if needed)
        $('#datatables-projects tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            console.log('Clicked row data:', data);
        });

    } else {
        console.error("Table with ID 'datatables-projects' not found.");
    }
});

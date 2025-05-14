$(document).ready(function () {
    $('#datatables-gallery').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#datatables-gallery').data('url'),
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'image_path', name: 'image_path'},
            { data: 'category', name: 'category' },
            { data: 'title', name: 'title' },
            { data: 'status', name: 'status'},
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});

// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTableTour').DataTable({
    "columnDefs": [
    { "width": "10%", "targets": 4 }
  ]
  });
});

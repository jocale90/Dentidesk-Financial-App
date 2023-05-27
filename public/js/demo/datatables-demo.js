$(document).ready(function () {
  $('#dataTable').DataTable({
      "aaSorting": [],    
      language: {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
        'excel'

      ]
  });
});
$(document).ready(function(){
    $('table.table-striped tbody tr').on('click', function () {
        $(this).find('td').toggleClass('bg');
    });
});
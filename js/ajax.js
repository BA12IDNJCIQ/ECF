$('#btn-filtre').click(function() {
    const marque = $('#marque').val();
    const prixMax = $('#prixMax').val();

    $.ajax({
        url: 'filtrer.php',
        type: 'GET',
        data: { marque: marque, prixMax: prixMax },
        success: function(response) {
            $('#resultats').html(response);
        }
    });
});
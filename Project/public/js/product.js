$("#checkAll").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
});

$('#btn-apply').click(()=>{
    processDelete();
});

function processDelete(){
    var arrayId = [];
    $('.check-item:checked').each(function(index, item) {
        //arrayId.push(item.closest('.row').id.replace('row-item-', ''));
        arrayId.push(item.id.replace('check-', ''));
    });
    
    if(arrayId.length == 0){
        alert('Please choose at least 1 item.');
        return;
    }

    console.log(arrayId);
    if (confirm('Are you sure want to delete these accounts?')) {
        $.ajax({
            method: 'DELETE',
            url: '/admin/destroy-many/product',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'ids': arrayId
            },
            success: function (resp) {
                alert(arrayId);
                $('#messageSuccess').text('Action success!');
                $('#messageSuccess').removeClass('d-none');
                for (var i = 0; i < arrayId.length; i++) {
                    $('#row-' + arrayId[i]).remove();
                }
                if($('.check-item').length == 0){
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 3*1000);
                }
            },
            error: function () {
                $('#messageError').removeClass('d-none');
                $('#messageError').text('Action fails! Please try again later!');
            }
        });
    }
}


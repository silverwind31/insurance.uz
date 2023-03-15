$(document).ready(function () {
    $('#position').on('input',function (e) {
        let menuPosition = $(this).val();
        $.ajax({
            url: '?p=menu_by_position',
            data: {position: menuPosition},
            type: 'post',
            success: function (data) {
                $('#parent').removeAttr('disabled');
                $('#parent').html(data);
            }
        })
    })
    $('.remove').on('click',function (e) {
        let answer = confirm("Siz haqiqatda ham ushbu elementni o'chirmoqchimisiz");
        if(!answer){
            e.preventDefault();
            return false;
        }
    })
    let previewImage = document.querySelector('.preview');
    previewImage.onchange = function (e) {
        const [file] = previewImage.files
        if (file) {
            this.parentNode.querySelector('img').src = URL.createObjectURL(file)
        }
    }

})
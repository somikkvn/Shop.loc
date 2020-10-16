$(document).ready (function() {
    $('button.button_basket').click(function (){
    let id = $(this).attr('id');
    console.log(id);
    axios({
        method: 'post',
        url: '/delbasket',
        data: {
            id: id,
        }
    })
        .then(res => {
        window.location.href = '/basket';
        console.log(res); // Результат ответа от сервера
        });
    })

    $('button.button_basket2').click(function (){
        let id = $(this).attr('id');
        console.log(id);
        axios({
            method: 'post',
            url: '/delbasketall',
            data: {
                user_id: id,
            }
        })
            .then(res => {
                window.location.href = '/basket2';
                console.log(res); // Результат ответа от сервера
        });
    })
});

// $("del").click(function() {
//     let index = $(this).data("id")
//     $.ajax({
//         url: '/delbasket',
//     })
//     $(this).remove()
// })
// function getAjax(url, success) {
//     var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
//     xhr.open('GET', url);
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState>3 && xhr.status==200) {success(xhr.responseText);}
//         if (xhr.status==500) { console.log(xhr.responseText); }
//     }
//     xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
//     xhr.send();
//     return xhr;
// }


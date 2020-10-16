$(document).ready (function() {
    $('button.button_basket').click(function (){
    let id = $(this).attr('id');
    console.log(id);
    axios({
        method: 'post',
        url: '/delbasket',
        data: {
            user_id: id,
        }
    })
        .then(res => {
        console.log(res); // Результат ответа от сервера
        });
})
});


// $(document).ready (function() {
//     document.getElementById('del').onclick = function() {
//             axios({
//                 method: 'get',
//                 url: '/delbasket',
//                 data: {
//                     user_id: id,
//                     name: name,
//                     count: count,
//                     price: price,
//                 }
//             })
//                 .then(res => {
//                     console.log(res);
//                 })
//     }
// })


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


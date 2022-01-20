function queryPostRequest(url, parameters, successFunction, failFunction) {
    $(document).ready(function () {
        $.ajax({
            url: url,
            method: "POST",
            data: {'data': JSON.stringify(parameters)},
            dataType: "html",
            statusCode:{
                200:(data)=>successFunction(data),
                201:(data)=>failFunction(data),
            }
        })
    });
}
window.onload = function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}
/*function deleteResponse(id,name)
{
    let confirm1 = confirm(`Вы действительно хотите удалить отклик соискателя: "${name}"?`);
    if (confirm1)
        $.ajax({
            url: "/deleteResponse",
            type: "POST",
            data: ({_token: $('#csrf-token')[0].content, 'responseId': id}),
            dataType: "text",
            success:(data)=>{
                $(`#${id}`).remove();
            }

        });
}*/
var request = new XMLHttpRequest();
request.onload = function() {
    console.log('sss')
};

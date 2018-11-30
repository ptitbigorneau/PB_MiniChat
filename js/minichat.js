var id = JSON.parse(localStorage.getItem('id'));

function emoticoneClick(elt)
{
    var messageElt = document.getElementById("message");
    messageElt.value = messageElt.value + ":" + elt.title + ":";
}

function checkNewPost(){
    id = JSON.parse(localStorage.getItem('id'));
    $.ajax({
        url : 'minichat_newpost.php',
        type : 'GET',
        dataType : 'html',
        success : function(code_html, statut){
            if (id !== code_html) {
                localStorage.setItem('id', JSON.stringify(code_html));
                location.reload();
            }
        }
    });

    setTimeout(checkNewPost,2000);

}

checkNewPost();
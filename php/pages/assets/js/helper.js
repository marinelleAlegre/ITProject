function setUncheckedId(input){

    // var input = document.getElementById("replyToMessage").value;
    var res = input.split(":::::");
    document.getElementById("userFeedbackMessageId").setAttribute("value", '');
    document.getElementById("userFeedbackMessageId").setAttribute("value", res[0]);

    document.getElementById("userFeedbackMessageText").innerHTML='';
    document.getElementById("userFeedbackMessageText").appendChild(document.createTextNode(res[1]));
}
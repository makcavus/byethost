    $(function() {
    $("#masktest").mask("99.99.9999");
    $("#masktest1").mask("99.99.9999");
    // Contents of textboxes will be selected when receiving focus.
    $("input[type=text]")
    .focus(function() {
    $(this).select();
});
});

    var highlightcolor="yellow"
    var ns6=document.getElementById&&!document.all
    var previous=''
    var eventobj
    //Regular expression to highlight only form elements
    var intended=/INPUT|TEXTAREA|SELECT|OPTION/
    //Function to check whether element clicked is form element
    function checkel(which){
    if (which.style&&intended.test(which.tagName)){
    if (ns6&&eventobj.nodeType==3)
    eventobj=eventobj.parentNode.parentNode
    return true
}
    else
    return false
}
    //Function to highlight form element
    function highlight(e){
    eventobj=ns6? e.target : event.srcElement
    if (previous!=''){
    if (checkel(previous))
    previous.style.backgroundColor=''
    previous=eventobj
    if (checkel(eventobj))
    eventobj.style.backgroundColor=highlightcolor
}
    else{
    if (checkel(eventobj))
    eventobj.style.backgroundColor=highlightcolor
    previous=eventobj
}
}

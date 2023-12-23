// import "../assets/js/custom.js"


function formResponse (form_type) {
   
    console.log('form_type: ', form_type)
    // const get_form_type = document.querySelector('.' + form_type)

    const spanNode = document.createElement("DIALOG")
    const dialogAttr = document.createAttribute("open")
    dialogAttr.value = "True"
    spanNode.setAttributeNode(dialogAttr);
    const spanTextNode = document.createTextNode("Sent");
    spanNode.appendChild(spanTextNode);
    const form = document.createElement("FORM");
    const form_attr = document.createAttribute("method");
    form_attr.value = "dialog";
    const form_text = document.createTextNode("Ok")
    const form_button = document.createElement("BUTTON");
    form.setAttributeNode(form_attr);
    form_button.appendChild(form_text);
    const spanNodeStyle = document.createAttribute("style")
    spanNodeStyle.value = "z-index: 999; top: 50%; background-color: #fff; position: fixed; text-align: center; color: #000; display: block";
    spanNode.setAttributeNode(spanNodeStyle)
    form.appendChild(form_button);
    spanNode.appendChild(form);

    // create overlay
    const overlay = document.createElement('DIV')
    const overlayStyle = document.createAttribute('style')
    overlayStyle.value = 'width: 100%; height: 100%; position: fixed; left: 0; right: 0; top: 0; bottom: 0;margin: 0 auto; padding: 0; display: block; background: rgba(0,0,0,0.8);'
    overlay.setAttributeNode(overlayStyle)

    document.body.appendChild(overlay)
    document.body.appendChild(spanNode)
    //alert(spanNode);
    console.log("this:", form_type, spanNode)
    
    
    
}
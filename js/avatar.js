function fasterPreview(uploader, idImage) {
    if (uploader.files && uploader.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(idImage).attr("style", 'background-image: url(' + e.target.result + '); background-position: center center; background-size: cover; ');
            //$(idImage).attr("title", e.target.result);
        }
        reader.readAsDataURL(uploader.files[0]);
    }
}

function clearFileInput(idBtnImageUpload) {
    var oldInput = document.getElementById($(idBtnImageUpload).attr('id'));
    var newInput = document.createElement("input");

    if (oldInput) {
        newInput.type = "file";
        newInput.id = oldInput.id;
        newInput.name = oldInput.name;
        newInput.className = oldInput.className;
        newInput.style.cssText = oldInput.style.cssText;
        // TODO: copy any other relevant attributes 
        oldInput.parentNode.replaceChild(newInput, oldInput);
    }

}

function loadProfileClicks(idBtnImage, idBtnImageUpload) {

    var oldInput = document.getElementById($(idBtnImageUpload).attr('id'));
    if (oldInput) {
        if (!oldInput.getAttribute("onchange")) {
            oldInput.setAttribute("onchange", "fasterPreview(this, '" + idBtnImage + "')");
        }
    }

    $(idBtnImageUpload).click();
}
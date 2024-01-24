function pageInnerData(res) {
    switch (res) {
        case 'home':
            location.href = '/adminHome';
            break;
    
        case 'shmuact':
            location.href = '/aboutAct';
            break;
        
        case 'notice':
            location.href = '/notice';
            break;

        default:
            document.writeln("No Page found");
            break;
    }
}

// Function to handle file input change
function loadFile(input) {
    let parent = $(input.parentElement).attr('id');
    let file = input.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(`#${parent} #heroimg`).attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
    }
}

function editSection(res) {
    let editEna = res.querySelector("#editEnable");
    let editDis = res.querySelector("#editDisable");
    let editDiv = res.parentElement.parentElement;
    let sectionbody = editDiv.nextElementSibling;
    let submit = sectionbody.querySelector(".sectionSubmit");
    let inpItem = sectionbody.querySelectorAll('.inpbox');
    let inpBox = sectionbody.querySelectorAll('.input-item');
    inpItem.forEach((res)=> {
        let styleitem = res.style;
        styleitem.display = (styleitem.display == "block") ? "none" : "block";
    })
    inpBox.forEach((res)=> {
        let attrCheck = res.hasAttribute('disabled');
        (!attrCheck)? res.setAttribute('disabled') : res.removeAttribute('disabled');
    })
    submit.style.display = (submit.style.display == "block") ? "none" : "block";
    editEna.style.display = (editEna.style.display == "none")? "block" : "none";
    editDis.style.display = (editDis.style.display == "block")? "none" : "block";
}

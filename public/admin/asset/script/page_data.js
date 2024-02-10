function pageInnerData(res) {
    switch (res) {
        case 'home':
            location.href = '/adminHome';
            break;
        //about submanus
        case 'shmuact':
            location.href = '/shmu/Act';
            break;
        
        case 'inscode':
            location.href = '/institute/code';
            break;

        case 'campusdetails':
            location.href = '/campusdetails';
            break;
        
        case 'mission':
            location.href = '/mission/vision';
            break;
            
        case 'news&event':
            location.href = '/events';
            break;

        //administration submenus
        case 'chancellor':
            location.href = '/admin/chancellor';
            break;

        case 'vc':
            location.href = '/Vice-Chancellor';
            break;
            
        case 'syndicate':
            location.href = '/univercity/syndicate';
            break;
            
        case 'academiccouncil':
            location.href = '/academiccouncil';
            break;

        case 'admincouncil':
            location.href = '/admincouncil';
            break;
            
        case 'facultymedicine':
            location.href = '/facultyOfMedicine';
            break;

        case 'facultybspcs':
            location.href = '/facultybspcs';
            break;

        case 'facultynursing':
            location.href = '/facultynursing';
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
    console.log(sectionbody);
    let submit = sectionbody.querySelector(".sectionSubmit");
    let inpItem = sectionbody.querySelectorAll('.inpbox');
    let inpBox = sectionbody.querySelectorAll('.input-item');
    inpItem.forEach((res) => {
        let styleitem = res.style;
        styleitem.display = (styleitem.display == "block") ? "none" : "block";
    })
    inpBox.forEach((res) => {
        let attrCheck = res.hasAttribute('disabled');

        (!attrCheck) ? (res.setAttribute('disabled', 'true'), res.setAttribute('enabled', 'true')) : (res.setAttribute('enabled', 'true'), res.removeAttribute('disabled'));

    })
    submit.style.display = (submit.style.display == "block") ? "none" : "block";
    editEna.style.display = (editEna.style.display == "none") ? "block" : "none";
    editDis.style.display = (editDis.style.display == "block") ? "none" : "block";
}

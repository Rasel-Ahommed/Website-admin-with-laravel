function popUpModal(val) {
    let modal = document.getElementById("myModal").style; 
    let modalImg = document.getElementById("img01");
    if (modal.display == 'block') {
        modal.display = "none";
        modalImg.removeAttribute("src");
    } else {
        let Imgsrc = val.querySelector("img").getAttribute("src");
        let ImgCaption = val.querySelector(".gallary-img-title").innerText;
        let modalCaption = document.getElementById("caption");
        modal.display = "block";
        modalImg.setAttribute("src", Imgsrc);
        modalCaption.innerText = ImgCaption;
    }
    console.log(Imgsrc);
}
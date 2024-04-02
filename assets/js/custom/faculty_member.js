function getMemberList(btnID) {
    var allBtn = document.querySelectorAll(".btn-custom");
    allBtn.forEach((v, i) => {
        allBtn[i].classList.remove("selected-btn");
    })
    document.getElementById(btnID).classList.add("selected-btn");
    if (btnID == "btn_member_mbbs") {
        $(".faculty-mbbs-member").show("slow");
        $(".faculty-nursing-member").hide("slow");
    } else if (btnID == "btn_member_nursing") {
        $(".faculty-nursing-member").show("slow");
        $(".faculty-mbbs-member").hide("slow");
    } else {
        $(".faculty-mbbs-member").show("slow");
        $(".faculty-nursing-member").show("slow");
    }
}
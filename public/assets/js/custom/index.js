// Function to add ellipsis to the last line if it exceeds a certain limit
let text_content = document.querySelectorAll(".limited");
let screen_width = window.screen.width;
text_content.forEach((v, i) => {
  let text = text_content[i];
  (screen_width < 2150)
    ? (text_content[i].innerText = text.innerText
        .substring(0, 80)
        .concat("..."))
    : (screen_width < 2400)
    ? (text_content[i].innerText = text.innerText
        .substring(0, 120)
        .concat("..."))
    : (text_content[i].innerText = text.innerText
        .substring(0, 160)
        .concat("..."));
});

window.addEventListener('load', ()=>{
    $(".administrative").hide();
})

function noticeBtnToggle(btnID) {
    let allBtn = document.querySelectorAll(".notice-toggle-btn");
    let clickBtn = document.getElementById(btnID);
    let noticeBox = document.querySelector(".notice-box");
  
    // Selecting the ::before pseudo-element in CSS
    let notice_bg = window.getComputedStyle(noticeBox, ':before');
  
    // Set the height using setProperty
      noticeBox.style.setProperty('--before-height', '0');
      noticeBox.style.setProperty('--before-width', '0');
      noticeBox.style.setProperty('--before-tran', '0.5s all ease');
    setTimeout(() => {
      noticeBox.style.setProperty('--before-height', 'calc(100% + 11px)');
      noticeBox.style.setProperty('--before-width', '100%');
      noticeBox.style.setProperty('--before-tran', '0.5s all ease');
    }, 500);
  
    allBtn.forEach(e => {
      e.classList.remove("btn-success");
    })
  
    clickBtn.classList.add("btn-success");
    if (btnID == "notice-btn2") {
      $(".administrative").show("slow");
      $(".academic").hide("slow");
    } else {
      $(".academic").show("slow");
      $(".administrative").hide("slow");
    }
  }
  
  function fullNoticeBtnToggle(btnId) {
    let clickBtn = document.getElementById(btnId);
    let allBtn = document.querySelectorAll(".all-notice-list .notice-toggle-btn");
    allBtn.forEach(e=>{
      e.classList.remove("btn-success");
    })
    clickBtn.classList.add("btn-success");
    if (btnId == "notice-btn2") {
      $(".administrative").show("slow");
      $(".academic").hide("slow");
    } else {
      $(".academic").show("slow");
      $(".administrative").hide("slow");
    }
  }
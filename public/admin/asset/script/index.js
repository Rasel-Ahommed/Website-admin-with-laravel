// create dropdown element
let dropdownIcon = ()=> {
    $(".dropdown-menu-list").hide();
    let select = document.querySelectorAll(".hasDropdown");
    select.forEach((res)=>{
        let span = document.createElement('span');
        span.innerText = ">";
        span.classList.add("roterclick");
        res.appendChild(span);
        res.setAttribute('onclick','dropdown(this)');
    })
}

// toggle menubar
function dropdown(res){
    let dropele = $(res).next('.dropdown-menu-list');
    let rotele = $(res).attr('class');
    $(dropele).toggle("slow");
    $('.'+rotele+ ' .roterclick').toggleClass('rotate-2');
}

// navbar width resizer 
function navresize() {
    $(".shmu-nav").toggle("slow");
    let shmuHeader = document.querySelector(".shmu-header");
    let shmumain = document.querySelector("main");
    let currentWidth = parseInt(shmuHeader.style.width) || 0;
    let toggleWidth = (currentWidth === 100) ? 75 : 100;
    shmuHeader.style.width = toggleWidth + "vw";
    (toggleWidth == 100)? (shmumain.style.paddingLeft = 0) : (shmumain.style.paddingLeft = "25vw")
}

dropdownIcon();

// bar chart 
function chartjs() {
    const bar = document.getElementById('myChart');

  new Chart(bar, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{
        label: 'Visitor Chart',
        data: [12, 19, 3, 15, 2],
        borderWidth: 1,
      }]
    },
    options: {
        indexAxis: 'y',
      }
  });

//   line chart
const line = document.getElementById('myLineChart');

  new Chart(line, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{
        label: 'Subscriber Chart',
        data: [12, 19, 23, 35, 42],
        borderWidth: 1,
      }]
    },
    options: {
        indexAxis: 'x',
      }
  });
}

chartjs();
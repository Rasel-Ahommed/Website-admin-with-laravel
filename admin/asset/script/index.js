// create dropdown element
let dropdownIcon = () => {
  $(".dropdown-menu-list").hide();
  let select = document.querySelectorAll(".hasDropdown");
  select.forEach((res) => {
    let span = document.createElement('span');
    span.innerText = ">";
    span.classList.add("roterclick");
    res.appendChild(span);
    res.setAttribute('onclick', 'dropdown(this)');
  })
}

// toggle menubar
function dropdown(res) {
  let dropele = $(res).next('.dropdown-menu-list');
  let rotele = $(res).attr('class');
  $(dropele).toggle("slow");
  $('.' + rotele + ' .roterclick').toggleClass('rotate-2');
}

// navbar width resizer 
function navresize() {
  $(".shmu-nav").toggle("slow");
  let shmuHeader = document.querySelector(".shmu-header");
  let shmumain = document.querySelector("main");
  let currentWidth = parseInt(shmuHeader.style.width) || 0;
  let toggleWidth = (currentWidth === 100) ? 75 : 100;
  shmuHeader.style.width = toggleWidth + "vw";
  (toggleWidth == 100) ? (shmumain.style.paddingLeft = 0) : (shmumain.style.paddingLeft = "25vw")
}

dropdownIcon();

const get_months_and_count = async () => {
  try {
    let months = [];
    let activityCount = [];

    const response = await fetch("/get_chart_data");
    const data = await response.json();

    data.forEach(d => {
      months.push(d.month);
      activityCount.push(d.count);
    });
    return { months, activityCount };
  } catch (error) {
    throw error;
  }
  
};

// subscribe
const get_sub_months_and_count = async () => {
  try {
    let submonths = [];
    let subCount = [];

    const response = await fetch("/get_sub_data");
    const data = await response.json();

    data.forEach(d => {
      submonths.push(d.month);
      subCount.push(d.count);
    });
    return { submonths, subCount };
  } catch (error) {
    throw error;
  }
  
};




// bar chart 
async function chartjs  () {
  const bar = document.getElementById('myChart');
  let { months, activityCount} =  await get_months_and_count()

  new Chart(bar, {
    type: 'bar',
    data: {
      labels: months,
      datasets: [{
        label: 'Activites Chart',
        data: activityCount,
      }]
    },
    options: {
      indexAxis: 'y',
      responsive: true,
      maintainAspectRatio: false
    }
  });


  const line = document.getElementById('myLineChart');
  let { submonths, subCount} =  await get_sub_months_and_count()

  new Chart(line, {
    type: 'line',
    data: {
      labels: submonths,
      datasets: [{
        label: 'Subscriber Chart',
        data: subCount,
        borderWidth: 1,
      }]
    },
    options: {
      indexAxis: 'x',
    }
  });


}

chartjs();
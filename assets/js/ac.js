if (document.getElementById("loadaircraft")) {
  window.addEventListener("load", loadaircraft());
}
if (document.getElementById("loadstation")) {
  window.addEventListener("load", loadstation());
}
if (document.getElementById("schstarttime")) {
  let routeFromDropdown = document.getElementById('schstarttime'),
    routeToDropdown = document.getElementById('schendtime');
  populateTimeDropdown(routeFromDropdown);
  populateTimeDropdown(routeToDropdown);
  loadroutes();
  loadflightdets();
}
if (document.getElementById("chargetype")) {
  loadchargetype();
  loadchargebody();
  loadavachargetype();
}


//#region aircraft
function createaircraft() {
  let xhr = new XMLHttpRequest();
  let acname = document.getElementById("acname");
  actype = document.getElementById("actype"),
    acregno = document.getElementById("acregno"),
    accapacity = document.getElementById("accapacity"),
    acversion = document.getElementById("acversion");
  //let dataString =""
  if (acname.value === "" || actype.value === "" || acregno.value === "" || accapacity.value === "" || acversion.value === "") {
    alert("Please fill all necessary information");
  } else {
    dataString = "acname=" + acname.value + "&actype=" + actype.value + "&acregno=" + acregno.value + "&accapacity=" + accapacity.value + "&acversion=" + acversion.value;

    xhr.open("POST", 'parameter/parametersetup.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (this.status == 200) {
        let vars = this.responseText.trim();
        if (vars == "1") {
          alert("Station already exsit")
          this.loadstation()
        } else {
          document.getElementById("acname").value = "";
          document.getElementById("actype").value = "";
          document.getElementById("acregno").value = "";
          document.getElementById("accapacity").value = "";
          document.getElementById("acversion").value = "";
          document.getElementById("loadaircraft").innerHTML = vars;
        }
      }
    }
  };
  xhr.send(dataString);
}
function editaircraft(button) {
  var row = button.closest("tr"); // Find the parent row of the clicked button
  var cells = row.cells;
  // Access cell data by index
  document.getElementById('acname').value = cells[1].textContent;
  document.getElementById('actype').value = cells[2].textContent;
  document.getElementById('acregno').value = cells[3].textContent;
  document.getElementById('accapacity').value = cells[5].textContent;
  document.getElementById('acversion').value = cells[4].textContent;
  let xhr = new XMLHttpRequest();
  //window.open("../admin/vendorprofile?email=" + emailAddress +"&regtype=" +registrationType , "_self");
}
function enabledisableaircraft(acregno) {
  let xhr = new XMLHttpRequest(),
    sacregno = acregno,
    sacstatus = document.getElementById(acregno);
  if (sacstatus.checked == true) {
    acstatus = 'Active'
  } else {
    acstatus = 'In-active'
  }
  dataString = "sacstatus=" + acstatus + "&sacregno=" + acregno;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      if (sacstatus.checked == true) {
        alert('Aircraft activated.')
        loadaircraft()
      } else {
        alert('Aircraft deactivated.')
        loadaircraft()
      }
    }
  }
  xhr.send(dataString);
};
function nextacrecord() {
  if (document.querySelector('table tr:last-child td:first-child') === null) {

  } else {
    document.querySelector('table tr:last-child td:first-child').innerHTML = "";
  }

  loadaircraft()
}
function preacrecord() {
  document.querySelector('table tr:last-child td:first-child').innerText = document.querySelector('table tr:first-child td:first-child').innerHTML - 51;

  loadaircraft()
}
function loadaircraft() {
  let xhr = new XMLHttpRequest();
  let acname = document.getElementById('acname'),
    actype = document.getElementById('actype'),
    //acstatus = document.getElementById('acstatus'),
    nextxx = document.querySelector('table tr:last-child td:first-child');

  // if((acname.value != "" || actype.value !="Type" || acstatus.value !="Status")){
  //   nextxx = document.querySelector('table tr:last-child td:first-child');
  //     nextxx = ""
  // }
  if (nextxx === null) {
    nextxx = ""
  } else {
    nextxx = document.querySelector('table tr:last-child td:first-child').innerHTML;
    // if((searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor") && (nextxx !== null)){
    //   if((nextxx >= 50) && (searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor"))
    //   nextxx = "";
    //   }else{
    //     nextxx = nextxx;
    // }
  }

  dataString = "facname=" + acname.value + "&factype=" + actype.value + "&nextxx=" + nextxx;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      document.getElementById("loadaircraft").innerHTML = vars;
      if (typeof $('table tr:first-child td:first-child').html() == 'undefined') {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      }
      else if ($('table tr:first-child td:first-child').html() == 1 && document.getElementById("aircrafttbl").rows.length < 50) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      } else if ($('table tr:first-child td:first-child').html() > 1 && (document.getElementById("aircrafttbl").rows.length < 50)) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = true;

      } else if (document.getElementById("aircrafttbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() != 1) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = false;

      }
      else if (document.getElementById("aircrafttbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() == 1) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = false;

      }
    }
    $("#aircrafttbl").DataTable();
  }


  xhr.send(dataString);

};
//#endregion

//#region station
function createstation() {
  let xhr = new XMLHttpRequest();
  let stationname = document.getElementById("stationname"),
    stationcode = document.getElementById("stationcode"),
    stationtype = document.getElementById("stationtype"),
    operationtype = document.getElementById("operationtype");
  if (stationname.value == "" || stationcode.value == "") {
    alert("Please fill all necessary information");
  } else {
    let dataString = "stationname=" + stationname.value + "&stationcode=" + stationcode.value + "&stationtyp=" + stationtype.value + "&operationtype=" + operationtype.value;
    xhr.open("POST", 'parameter/parametersetup.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (this.status == 200) {
        let vars = this.responseText.trim();
        if (vars == "1") {
          alert("Station already exsit")
          this.loadstation()
        } else {
          document.getElementById("stationname").value = "";
          document.getElementById("stationcode").value = "";
          document.getElementById("stationtype").value = "";
          document.getElementById("operationtype").value = "";
          document.getElementById("loadstation").innerHTML = vars;
        }
      }
    };
    xhr.send(dataString);
  }
}
function loadroutes() {
  let xhr = new XMLHttpRequest();
  let routes = "";
  let dataString = "routes=" + routes;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText.trim();
      document.getElementById('routefrom').innerHTML = vars;
      document.getElementById('routeto').innerHTML = vars;
    }
  };
  xhr.send(dataString);
}
function editstation(button) {
  var row = button.closest("tr"); // Find the parent row of the clicked button
  var cells = row.cells;
  // Access cell data by index
  document.getElementById('stationname').value = cells[1].textContent;
  document.getElementById('stationcode').value = cells[2].textContent;
  document.getElementById('stationtype').value = cells[3].textContent;
  document.getElementById('operationtype').value = cells[4].textContent;
  let xhr = new XMLHttpRequest();
  //window.open("../admin/vendorprofile?email=" + emailAddress +"&regtype=" +registrationType , "_self");
}
function removestation(button) {
  var row = button.closest("tr"); // Find the parent row of the clicked button
  var cells = row.cells;
  // Access cell data by index
  document.getElementById('stationname').value = cells[1].textContent;
  document.getElementById('stationcode').value = cells[2].textContent;
  document.getElementById('stationtype').innerText = cells[3].textContent;
  let xhr = new XMLHttpRequest();
  //window.open("../admin/vendorprofile?email=" + emailAddress +"&regtype=" +registrationType , "_self");
}
function enabledisablestations(station) {
  let xhr = new XMLHttpRequest(),
    sstation = station,
    sstatus = document.getElementById(station);
  if (sstatus.checked == true) {
    stationstatus = 'Active'
  } else {
    stationstatus = 'In-active'
  }
  dataString = "sstatus=" + stationstatus + "&sstation=" + sstation;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      if (sstatus.checked == true) {
        alert('Station activated.')
        loadstation()
      } else {
        alert('Station deactivated.')
        loadstation()
      }
    }
  }
  xhr.send(dataString);
};
function nextstationrecord() {
  if (document.querySelector('table tr:last-child td:first-child') === null) {

  } else {
    document.querySelector('table tr:last-child td:first-child').innerHTML = "";
  }

  loadstation()
}
function prestationrecord() {
  document.querySelector('table tr:last-child td:first-child').innerText = document.querySelector('table tr:first-child td:first-child').innerHTML - 51;

  loadstation()
}
function loadstation() {

  let xhr = new XMLHttpRequest();
  let stationtype = document.getElementById('stationtype'),
    nextxx = document.querySelector('table tr:last-child td:first-child');

  // if((acname.value != "" || actype.value !="Type" || acstatus.value !="Status")){
  //   nextxx = document.querySelector('table tr:last-child td:first-child');
  //     nextxx = ""
  // }
  if (nextxx === null) {
    nextxx = ""
  } else {
    nextxx = document.querySelector('table tr:last-child td:first-child').innerHTML;
    // if((searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor") && (nextxx !== null)){
    //   if((nextxx >= 50) && (searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor"))
    //   nextxx = "";
    //   }else{
    //     nextxx = nextxx;
    // }
  }
  if (stationtype.value == 'All') {
    stationtype.value = "";
  }
  dataString = "stationtype=" + stationtype.value + "&nextxx=" + nextxx;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      document.getElementById("loadstation").innerHTML = vars;
      if (typeof $('table tr:first-child td:first-child').html() == 'undefined') {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      }
      else if ($('table tr:first-child td:first-child').html() == 1 && document.getElementById("stationtbl").rows.length < 50) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      } else if ($('table tr:first-child td:first-child').html() > 1 && (document.getElementById("stationtbl").rows.length < 50)) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = true;

      } else if (document.getElementById("stationtbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() != 1) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = false;

      }
      else if (document.getElementById("stationtbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() == 1) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = false;

      }
    }
    //$("#stationtbl").DataTable();
  }


  xhr.send(dataString);

};
//#endregion station

//#region  Avaition Charges
function createaviachargetype() {
  let xhr = new XMLHttpRequest();
  let name = document.getElementById("chargename");
  //let checkseason = document.getElementById("checkseason");
  let checkaircraft = document.getElementById("checkaircraft");
  let chargetype = document.getElementById("chargetype");
  let body = document.getElementById("chargebody");

  if (name.value === "" || chargetype.value === "" || body.value === "") {
    alert("Please fill all necessary information");
    return;
  }

  if (checkaircraft.checked) {
    aircraft = "Yes";
  } else {
    aircraft = "No";
  }

  let dataString = "chargename=" + name.value +
    "&isaircraft=" + aircraft +
    "&chargetype=" + chargetype.value +
    "&chargebody=" + body.value;

  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status === 200) {
      let vars = this.responseText;
      document.getElementById('loadaviationchargestype').innerHTML = vars
    }
  };
  xhr.send(dataString);
}
function loadchargetype() {
  let xhr = new XMLHttpRequest();
  let gchargetype = "";
  let dataString = "gchargetype=" + gchargetype;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText.trim();
      document.getElementById('chargetype').innerHTML = vars;
    }
  };
  xhr.send(dataString);
}
function loadchargebody() {
  let xhr = new XMLHttpRequest();
  let gchargebody = "";
  let dataString = "gchargebody=" + gchargebody;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText.trim();
      document.getElementById('chargebody').innerHTML = vars;
    }
  };
  xhr.send(dataString);
}
function nextavachargestyperecord() {
  if (document.querySelector('table tr:last-child td:first-child') === null) {

  } else {
    document.querySelector('table tr:last-child td:first-child').innerHTML = "";
  }

  loadavachargetype()
}
function preavachargestyperecord() {
  document.querySelector('table tr:last-child td:first-child').innerText = document.querySelector('table tr:first-child td:first-child').innerHTML - 51;
  loadavachargetype()
}

function loadavachargetype() {
  let xhr = new XMLHttpRequest();
  let lchargetype = '',
    nextxx = document.querySelector('table tr:last-child td:first-child');

  // if((acname.value != "" || actype.value !="Type" || acstatus.value !="Status")){
  //   nextxx = document.querySelector('table tr:last-child td:first-child');
  //     nextxx = ""
  // }
  if (nextxx === null) {
    nextxx = ""
  } else {
    nextxx = document.querySelector('table tr:last-child td:first-child').innerHTML;
    // if((searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor") && (nextxx !== null)){
    //   if((nextxx >= 50) && (searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor"))
    //   nextxx = "";
    //   }else{
    //     nextxx = nextxx;
    // }
  }

  dataString = "lchargetype=" + lchargetype + "&nextxx=" + nextxx;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      document.getElementById("loadaviationchargestype").innerHTML = vars;
      if (typeof $('table tr:first-child td:first-child').html() == 'undefined') {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      }
      else if ($('table tr:first-child td:first-child').html() == 1 && document.getElementById("avachargestypetbl").rows.length < 50) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      } else if ($('table tr:first-child td:first-child').html() > 1 && (document.getElementById("avachargestypetbl").rows.length < 50)) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = true;

      } else if (document.getElementById("avachargestypetbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() != 1) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = false;

      }
      else if (document.getElementById("avachargestypetbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() == 1) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = false;

      }
    }
    $("#avachargestbl").DataTable();
  }


  xhr.send(dataString);

}



function nextavachargesrecord() {
  if (document.querySelector('table tr:last-child td:first-child') === null) {

  } else {
    document.querySelector('table tr:last-child td:first-child').innerHTML = "";
  }

  loadavacharges()
}
function preavachargesrecord() {
  document.querySelector('table tr:last-child td:first-child').innerText = document.querySelector('table tr:first-child td:first-child').innerHTML - 51;
  loadavacharges()
}
function loadavacharges() {

  let xhr = new XMLHttpRequest();
  let chargesname = document.getElementById('chargesname'),
    aircrafttype = document.getElementById('aircrafttype'),
    season = document.getElementById('season'),
    station = document.getElementById('station'),
    chargesvaluetype = document.getElementById('chargesvaluetype'),
    chargesstatus = document.getElementById('chargesstatus');
  nextxx = document.querySelector('table tr:last-child td:first-child');

  // if((acname.value != "" || actype.value !="Type" || acstatus.value !="Status")){
  //   nextxx = document.querySelector('table tr:last-child td:first-child');
  //     nextxx = ""
  // }
  if (nextxx === null) {
    nextxx = ""
  } else {
    nextxx = document.querySelector('table tr:last-child td:first-child').innerHTML;
    // if((searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor") && (nextxx !== null)){
    //   if((nextxx >= 50) && (searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor"))
    //   nextxx = "";
    //   }else{
    //     nextxx = nextxx;
    // }
  }

  dataString = "chargesname=" + chargesname.value + "&aircrafttype=" + aircrafttype.value + "&season" + season.value + "station=" + station.value + "&chargesvaluetype=" + chargesvaluetype.value + "chargesstatus" + chargesstatus.value + "&nextxx=" + nextxx;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      document.getElementById("loadavacharges").innerHTML = vars;
      if (typeof $('table tr:first-child td:first-child').html() == 'undefined') {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      }
      else if ($('table tr:first-child td:first-child').html() == 1 && document.getElementById("avachargestbl").rows.length < 50) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      } else if ($('table tr:first-child td:first-child').html() > 1 && (document.getElementById("avachargestbl").rows.length < 50)) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = true;

      } else if (document.getElementById("avachargestbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() != 1) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = false;

      }
      else if (document.getElementById("avachargestbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() == 1) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = false;

      }
    }
    $("#avachargestbl").DataTable();
  }


  xhr.send(dataString);

}

//#endregion Aviation
//#endregion Aviation
//#region Flight detials
function createflightdetails() {
  let xhr = new XMLHttpRequest();
  let flightno = document.getElementById("flightno");
  let schstarttime = document.getElementById("schstarttime");
  let schendtime = document.getElementById("schendtime");
  let routefrom = document.getElementById("routefrom");
  let routeto = document.getElementById("routeto");
  let crewreporttime = document.getElementById("crewreporttime");
  let dataString = ""
  if (flightno.value === "" || schstarttime.value === "" || schendtime.value === "" || routefrom.value === "" || routeto.value === "" || crewreporttime.value === "") {
    alert("Please fill all necessary information");
  } else {
    dataString = "flightno=" + flightno.value + "&schstarttime=" + schstarttime.value + "&schendtime=" + schendtime.value + "&routefrom=" + routefrom.value + "&routeto=" + routeto.value + "&crewreporttime=" + crewreporttime.value;

    xhr.open("POST", 'parameter/parametersetup.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (this.status == 200) {
        let vars = this.responseText.trim();
        if (vars == "1") {
          alert("Station already exsit")
          this.loadstation()
        } else {
          document.getElementById("flightno").value = "";
          document.getElementById("schstarttime").value = "";
          document.getElementById("schendtime").value = "";
          document.getElementById("routefrom").value = "";
          document.getElementById("routeto").value = "";
          document.getElementById("crewreporttime").value = "";
          document.getElementById("loadflightdetails").innerHTML = vars;
        }
      }
    }
  };
  xhr.send(dataString);
}
function editafightdetails(button) {
  var row = button.closest("tr"); // Find the parent row of the clicked button
  var cells = row.cells;
  // Access cell data by index
  document.getElementById('flightno').value = cells[1].textContent;
  document.getElementById('schstarttime').value = cells[2].textContent;
  document.getElementById('schendtime').value = cells[3].textContent;
  document.getElementById('routefrom').value = cells[4].textContent;
  document.getElementById('routeto').value = cells[5].textContent;
  document.getElementById('crewreporttime').value = cells[6].textContent;
  let xhr = new XMLHttpRequest();
  //window.open("../admin/vendorprofile?email=" + emailAddress +"&regtype=" +registrationType , "_self");
}
function enabledisablefightdetails(flightno) {
  let xhr = new XMLHttpRequest(),
    fltno = flightno,
    flstatus = document.getElementById(fltno);
  if (flstatus.checked == true) {
    flstatus = 'Active'
  } else {
    flstatus = 'In-active'
  }
  dataString = "fltstatus=" + flstatus + "&flightno=" + fltno;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      if (flstatus.checked == true) {
        alert('Aircraft activated.')
        loadaircraft()
      } else {
        alert('Aircraft deactivated.')
        loadaircraft()
      }
    }
  }
  xhr.send(dataString);
};
function nextflightdetrecord() {
  if (document.querySelector('table tr:last-child td:first-child') === null) {

  } else {
    document.querySelector('table tr:last-child td:first-child').innerHTML = "";
  }

  loadavacharges()
}
function preflightdetrecord() {
  document.querySelector('table tr:last-child td:first-child').innerText = document.querySelector('table tr:first-child td:first-child').innerHTML - 51;
  loadavacharges()
}
function loadflightdets() {

  let xhr = new XMLHttpRequest();
  let loadfltno = document.getElementById('flightno'),
    nextxx = document.querySelector('table tr:last-child td:first-child');

  // if((acname.value != "" || actype.value !="Type" || acstatus.value !="Status")){
  //   nextxx = document.querySelector('table tr:last-child td:first-child');
  //     nextxx = ""
  // }
  if (nextxx === null) {
    nextxx = ""
  } else {
    nextxx = document.querySelector('table tr:last-child td:first-child').innerHTML;
    // if((searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor") && (nextxx !== null)){
    //   if((nextxx >= 50) && (searchs.value !="" || prodstatus.value !="Status" || prodtype.value !="Product Type" || svendor.value !="Select Vendor"))
    //   nextxx = "";
    //   }else{
    //     nextxx = nextxx;
    // }
  }

  dataString = "fltno=" + loadfltno.value + "&nextxx=" + nextxx;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      document.getElementById("loadflightdetails").innerHTML = vars;
      if (typeof $('table tr:first-child td:first-child').html() == 'undefined') {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      }
      else if ($('table tr:first-child td:first-child').html() == 1 && document.getElementById("flightdettbl").rows.length < 50) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = true;
      } else if ($('table tr:first-child td:first-child').html() > 1 && (document.getElementById("flightdettbl").rows.length < 50)) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = true;

      } else if (document.getElementById("flightdettbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() != 1) {
        document.getElementById("pre").disabled = false;
        document.getElementById("next").disabled = false;

      }
      else if (document.getElementById("flightdettbl").rows.length >= 50 && $('table tr:first-child td:first-child').html() == 1) {
        document.getElementById("pre").disabled = true;
        document.getElementById("next").disabled = false;

      }
    }
    $("#flightdettbl").DataTable();
  }


  xhr.send(dataString);

}
function populateTimeDropdown(dropdown) {
  for (let h = 0; h < 24; h++) {
    for (let m = 0; m < 60; m += 1) {
      const hour = h.toString().padStart(2, '0');
      const minute = m.toString().padStart(2, '0');
      const time = `${hour}:${minute}`;
      const option = document.createElement('option');
      option.value = time;
      option.textContent = time;
      dropdown.appendChild(option);
    }
  }
}
//#endregion

//#region Vendor Details
function createvendor() {
  let xhr = new XMLHttpRequest();
  let companyname = document.getElementById("companyname");
  let purpose = document.getElementById("purpose");

  if (companyname.value == "" || purpose.value == "") {
    alert("Please fill all necessary information");
  } else {
    let dataString = "companyname=" + companyname.value + "&purpose=" + purpose.value;
    xhr.open("POST", 'parameter/parametersetup.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (this.status == 200) {
        let vars = this.responseText;
        if (vars == "Approved") {
          alert("OKAY.");
          location.reload();
        } else if (vars == "Disapproved") {
          alert("Not Okay.");
          location.reload();
        }
      }
    };
    xhr.send(dataString);
  }
}


//region biodata 
function createbiodata() {
  let xhr = new XMLHttpRequest();
      staffid = document.getElementById('staffid').value;
      btitle = document.getElementById('btitle').value;
      bsurname = document.getElementById('bsurname').value;
      bfirstname = document.getElementById('bfirstname').value;
      bmiddlename = document.getElementById('bmiddlename').value;
      bmaidenname = document.getElementById('bmaidenname').value;
      breligion = document.getElementById('breligion'). value;
      bemailaddress = document.getElementById('bemailaddress').value;
      bphonenumber = document.getElementById('bphonenumber').value;
      bdob = document.getElementById('bdob').value;
      bgender = document.getElementById('bgender').value;
      bmstatus = document.getElementById('bmstatus').value;
      blanguage = document.getElementById('blanguage').value;
      bnationality = document.getElementById('bnationality').value;
      bstateoforigin = document.getElementById('bstateoforigin').value;
      blga = document.getElementById('blga').value;
      braddress = document.getElementById('braddress').value;
      bstateofres = document.getElementById('bstateofres').value;
      bcountryofres = document.getElementById('bcountryofres').value;
 
  if (staffid === "" || btitle === "" || bsurname === "" || bfirstname === "" || bmiddlename === "" || bmaidenname === "" || 
    breligion === "" || bemailaddress === "" || bphonenumber === "" ||  bdob === "" || bgender === "" || bmstatus === "" 
    || blanguage === "" || bnationality === "" || bstateoforigin === "" || blga === "" || braddress === "" || bstateofres === "" || bcountryofres === "" ) {
      alert('Please fill all necessary information');
      return;
  }
  // Validate phone number
  if (bphonenumber.length !== 11 || isNaN(bphonenumber)) {
      alert('Invalid phone number.');
      return;
  }
  // Validate bemailaddress
  const bemailaddressRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!bemailaddressRegex.test(bemailaddress)) {
      alert("Please enter a valid email address.");
      return;
  }
  let dataString =
      "staffid=" + staffid.value +
      "&btitle=" + btitle.value +
      "&bsurname=" + bsurname.value +
      "&bfirstname=" + bfirstname.value +
      "&bmiddlename=" + bmiddlename.value +
      "&bmaidenname=" + bmaidenname.value +
      "&breligion=" + breligion.value +
      "&bemailaddress=" + bemailaddress.value +
      "&bphonenumber=" + bphonenumber.value +
      "&bdob=" + bdob.value +
      "&bgender=" + bgender.value +
      "&bmstatus=" + bmstatus.value +
      "&blanguage=" + blanguage.value +
      "&bnationality=" + bnationality.value +
      "&bstateoforigin=" + bstateoforigin.value+
      "&blga=" + blga.value +
      "&braddress=" + braddress.value +
      "&bstateofres=" + bstateofres.value +
      "&bcountryofres=" + bcountryofres.value ;
      
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      if (vars == "Approved") {
        alert("OKAY.");
        sessionStorage.setItem("staffid", staffid);
        console.log("Server response:", response);
        location.reload();
      } else if (vars == "Disapproved") {
        alert("Not Okay.");
        location.reload();
      }
    }
  };
  xhr.send(dataString);

  if (bmstatus === "Single") {
    document.getElementById('biodata').style.display = 'none';
    document.getElementById('nokdata').style.display = 'block';  
  } else {
    document.getElementById('biodata').style.display = 'none';
    document.getElementById('familydata').style.display = 'block';
  }
  return false;
}

function loadstate() {
  let xhr = new XMLHttpRequest();
  let state = document.getElementById('bnationality').value;
  let dataString = "state=" + state;
  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText.trim();
      document.getElementById('chargebody').innerHTML = vars;
    }
  };
  xhr.send(dataString);
}

  function loadlga() {
    let xhr = new XMLHttpRequest();
    let lga = document.getElementById('bstateoforigin').value;
    let dataString = "lga=" + lga;
    xhr.open("POST", 'parameter/parametersetup.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (this.status == 200) {
        let vars = this.responseText.trim();
        document.getElementById('chargebody').innerHTML = vars;
      }
    };
    xhr.send(dataString);
}
// #end region biodata


// region family data
function createfamilydata(){
  let xhr = new XMLHttpRequest();
  let fname = document.getElementById('fname').value; 
      frelationship = document.getElementById('frelationship').value; 
      fdob = document.getElementById('fdob').value; 
      foccupation = document.getElementById('foccupation').value; 
      fphonenumber = document.getElementById('fphonenumber').value; 

  if(fname === "" ||  frelationship === "" || fdob === "" || foccupation === "" || fphonenumber === ""){
    alert('Please fill all necessary information');
    return;
  }
   // Validate phone number
  if (fphonenumber.length !== 11 || isNaN(fphonenumber)) {
    alert('Invalid phone number.');
    return;
}
let dataString =
  "fname=" + fname.value +
  "&frelationship=" + frelationship.value +
  "&fdob=" + fdob.value +
  "&foccupation=" + foccupation.value +
  "&fphonenumber=" + fphonenumber.value ;

  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.status == 200) {
      let vars = this.responseText;
      if (vars == "Approved") {
        alert("OKAY.");
        location.reload();
      } else if (vars == "Disapproved") {
        alert("Not Okay.");
        location.reload();
      }
    }
  };
  xhr.send(dataString);
  document.getElementById('familydata').style.display = 'none';
  document.getElementById('nokdata').style.display = 'block';
  return false;
}
// end region familydata

// region save
function savechange() {
  if (validateForm()) {
      console.log("Changes saved!");
  }
}

// region next of kin
function createnok() {
  let xhr = new XMLHttpRequest();
  let nname = document.getElementById('nname').value;
      nrelationship = document.getElementById('nrelationship').value;
      nraddress = document.getElementById('nraddress').value;
      nphonenumber = document.getElementById('nphonenumber').value;
 
  if (nname === "" || nrelationship === "" || nraddress === "" || nphonenumber === "") {
      alert('Please fill all necessary information');
      return;
  }
// Validate phone number
  if (nphonenumber.length !== 11 || isNaN(nphonenumber)) {
      alert('Invalid phone number. Please enter a valid phone number.');
      return;
  }
  // Build the data string
  let dataString =
      "nname=" + nname.value +
      "&nrelationship=" + nrelationship.value +
      "&nraddress=" + nraddress.value +
      "&nphonenumber=" + nphonenumber.value ;

      xhr.open("POST", 'parameter/parametersetup.php', true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
      xhr.onload = function () {
        if (this.status == 200) {
          let vars = this.responseText;
          if (vars == "Approved") {
            alert("OKAY.");
            location.reload();
          } else if (vars == "Disapproved") {
            alert("Not Okay.");
            location.reload();
          }
        }
      };
      xhr.send(dataString);
      document.getElementById('nokdata').style.display = 'none';
      document.getElementById('beneficiarydata').style.display = 'block';
      return false;
    }
//#endregion


// region beneficiary
function createbeneficiary() {
  let xhr = new XMLHttpRequest();
  let benname = document.getElementById('benname').value;
      benrelationship = document.getElementById('benrelationship').value;
      benaddress = document.getElementById('benaddress').value;
      benphonenumber = document.getElementById('benphonenumber').value;
 
  if (benname === "" || benrelationship === "" || benaddress === "" || benphonenumber === "") {
      alert('Please fill all necessary information');
      return;
  }
// Validate phone number
  if (benphonenumber.length !== 11 || isNaN(benphonenumber)) {
      alert('Invalid phone number. Please enter a valid phone number.');
      return;
  }
  let dataString =
      "benname=" + benname.value +
      "&benrelationship=" + benrelationship.value +
      "&benaddress=" + benaddress.value +
      "&benphonenumber=" + benphonenumber.value ;

      xhr.open("POST", 'parameter/parametersetup.php', true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
      xhr.onload = function () {
        if (this.status == 200) {
          let vars = this.responseText;
          if (vars == "Approved") {
            alert("OKAY.");
            location.reload();
          } else if (vars == "Disapproved") {
            alert("Not Okay.");
            location.reload();
          }
        }
      };
      xhr.send(dataString);
      document.getElementById('beneficiarydata').style.display = 'none';
      document.getElementById('pensiondata').style.display = 'block';
      return false;
    }
    //#endregion


//region pension
function createpension() {
  let xhr = new XMLHttpRequest();
  let porganisation = document.getElementById('porganisation').value;
      pid = document.getElementById('pid').value;
      tid  = document.getElementById('tid').value;


  if ( porganisation === "" || pid === ""  || tid === "") {
    alert('Please fill all necessary information');
    return;
}
 let dataString =
      "porganisation=" + porganisation.value +
      "&pid =" + pid .value +
      "&tid=" + tid.value ;

      xhr.open("POST", 'parameter/parametersetup.php', true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
      xhr.onload = function () {
        if (this.status == 200) {
          let vars = this.responseText;
          if (vars == "Approved") {
            alert("OKAY.");
            location.reload();
          } else if (vars == "Disapproved") {
            alert("Not Okay.");
            location.reload();
          }
        }
      };
      xhr.send(dataString);
      document.getElementById('pensiondata').style.display = 'none';
      document.getElementById('employmentdata').style.display = 'block';
      return false;
    }
    //#endregion


//employment
function createmp() {
  let xhr = new XMLHttpRequest();
  let emname = document.getElementById('emname').value;
  let emaddress = document.getElementById('emaddress').value;
  let emfdate = document.getElementById('emfdate').value;
  let emtdate = document.getElementById('emtdate').value;
  let emdesignation = document.getElementById('emdesignation').value;

  if (emname === "" || emaddress === "" || emfdate === "" || emtdate === "" || emdesignation === "") {
      alert('Please fill all necessary information');
      return;
  }

  let dataString = "emname=" + emname.value +
      "&emaddress=" + emaddress.value +
      "&emfdate=" + emfdate.value +
      "&emtdate=" + emtdate.value +
      "&emdesignation=" + emdesignation.value;

  xhr.open("POST", 'parameter/parametersetup.php', true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
      if (this.status == 200) {
          let response = this.responseText;
          if (response == "Approved") {
              alert("OKAY.");
              location.reload();
          } else if (response == "Disapproved") {
              alert("Not Okay.");
              location.reload();
          }
      }
  };
  xhr.send(dataString);

  document.getElementById('employmentdata').style.display = 'none';
  document.getElementById('educationdetail').style.display = 'block';  
  return false;
}

    // region education
      function createducation(){
        let xhr = new XMLHttpRequest();
        let edtype = document.getElementById('edtype').value; 
            edinstitution = document.getElementById('edinstitution').value; 
            edfdate = document.getElementById('edfdate').value; 
            edtdate = document.getElementById('edtdate').value; 
            eddegree = document.getElementById('eddegree').value; 
            edgrade = document.getElementById('edgrade').value
      
        if(edtype === "" ||  edinstitution === "" || edfdate === "" || edtdate === "" || eddegree === "" || edgrade === ""){
          alert('Please fill all necessary information');
          return;
        }
      let dataString =
        "edtype=" + edtype.value +
        "&edinstitution=" + edinstitution.value +
        "&edfdate=" + edfdate.value +
        "&edtdate=" + edtdate.value +
        "&eddegree=" + eddegree.value ;
        "&edgrade=" + edgrade.value ;
      
        xhr.open("POST", 'parameter/parametersetup.php', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
        xhr.onload = function () {
          if (this.status == 200) {
            let vars = this.responseText;
            if (vars == "Approved") {
              alert("OKAY.");
              location.reload();
            } else if (vars == "Disapproved") {
              alert("Not Okay.");
              location.reload();
            }
          }
        };
        xhr.send(dataString);
        document.getElementById('educationdetail').style.display = 'none';
        document.getElementById('certificatondetail').style.display = 'block';
        return false;
      }

      // region certificate
      function createcertificate(){
        let xhr = new XMLHttpRequest();
        let cerinstitution = document.getElementById('cerinstitution').value; 
            cercourse = document.getElementById('cercourse').value; 
            cerdate = document.getElementById('cerdate').value; 
            cerexpiry = document.getElementById('cerexpiry').value; 
            cerupload = document.getElementById('cerupload').value; 
      
        if(cerinstitution === "" ||  cercourse === "" || cerdate === "" || cerexpiry === "" || cerupload === "" ){
          alert('Please fill all necessary information');
          return;
        }
      let dataString =
        "cerinstitution=" + cerinstitution.value +
        "&cercourse=" + cercourse.value +
        "&cerdate=" + cerdate.value +
        "&cerexpiry=" + cerexpiry.value +
        "&cerupload=" + cerupload.value ;
      
        xhr.open("POST", 'parameter/parametersetup.php', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      
        xhr.onload = function () {
          if (this.status == 200) {
            let vars = this.responseText;
            if (vars == "Approved") {
              alert("OKAY.");
              location.reload();
            } else if (vars == "Disapproved") {
              alert("Not Okay.");
              location.reload();
            }
          }
        };
        xhr.send(dataString);
        document.getElementById('certificatondetail').style.display = 'none';
        document.getElementById('trainingdetail').style.display = 'block';
        return false;
      } 

    // region training
    function createtraining(){
      let xhr = new XMLHttpRequest();
      let traname = document.getElementById('traname').value; 
          tracourse = document.getElementById('tracourse').value; 
          tradate = document.getElementById('tradate').value; 
          traupload = document.getElementById('traupload').value; 
    
      if(traname === "" ||  tracourse === "" || tradate === "" || traupload === ""){
        alert('Please fill all necessary information');
        return;
      }
    let dataString =
      "traname=" + traname.value +
      "&tracourse=" + tracourse.value +
      "&tradate=" + tradate.value +
      "&traupload=" + traupload.value ;
    
      xhr.open("POST", 'parameter/parametersetup.php', true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
      xhr.onload = function () {
        if (this.status == 200) {
          let vars = this.responseText;
          if (vars == "Approved") {
            alert("OKAY.");
            location.reload();
          } else if (vars == "Disapproved") {
            alert("Not Okay.");
            location.reload();
          }
        }
      };
      xhr.send(dataString);
      document.getElementById('trainingdetail').style.display = 'none';
      document.getElementById('crewdetail').style.display = 'block';
      return false;
    } 

    // region crew
    function createcrew(){
      let xhr = new XMLHttpRequest();
      let cactype = document.getElementById('cactype').value; 
          cposition = document.getElementById('cposition').value; 
          chrs = document.getElementById('chrs').value;  
    
      if(cactype === "" ||  cposition === "" || chrs === ""){
        alert('Please fill all necessary information');
        return;
      }
    let dataString =
      "cactype=" + cactype.value +
      "&cposition=" + cposition.value +
      "&chrs=" + chrs.value ;
    
      xhr.open("POST", 'parameter/parametersetup.php', true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
      xhr.onload = function () {
        if (this.status == 200) {
          let vars = this.responseText;
          if (vars == "Approved") {
            alert("OKAY.");
            location.reload();
          } else if (vars == "Disapproved") {
            alert("Not Okay.");
            location.reload();
          }
        }
      };
      xhr.send(dataString);
    } 


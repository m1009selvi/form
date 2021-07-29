<html>
<head>

<h1><center>Candidate Details</center></h1></head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<body>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age </th>
      <th scope="col">Gender </th>
      <th scope="col">Email</th>
	  <th scope="col">Address </th>
      <th scope="col">Phone</th>
      <th scope="col">Applied for </th>
      <th scope="col">Experience </th>
      <th scope="col">Ready to Relocate </th>
	</tr>
	    <tr>
      <th scope="col"> <?php echo $_POST["name"]; ?></th>
      <th scope="col"> <?php echo $_POST["Age"]; ?></th>
      <th scope="col"> <?php echo $_POST["gender"]; ?></th>
      <th scope="col"> <?php echo $_POST["email"]; ?></th>
	  <th scope="col"> <?php echo $_POST["Address"]; ?></th>
      <th scope="col"> <?php echo $_POST["Phone"]; ?></th>
      <th scope="col"> <?php echo $_POST["roleCheckbox"]; ?></th>
      <th scope="col"> <?php echo $_POST["experience"]; ?></th>
      <th scope="col"> <?php echo $_POST["relocate"]; ?></th>
	</tr>
  </thead>
  </table>
  <script>

var list1 = [];
var list2 = [];
var list3 = [];
var list4 = [];
var list5 = [];
var list6 = [];
var list7 = [];
var list8 = [];

var n = 1;
var x = 0;
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('roleCheckbox')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
function onlyOneExperience(checkbox) {
    var experiences = document.getElementsByName('experience')
    experiences.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
function AddRow(){
    if(document.getElementById('radioChecked').checked == true) {   
        list7[x] = 'yes';
} else if(document.getElementById('radioUnchecked').checked == true){  
    list7[x] = 'no';  
}  
    if(document.getElementById('maleGender').checked == true) {   
        list8[x] = 'Male';
} else if(document.getElementById('femaleGender').checked == true){  
    list8[x] = 'Female';  
} 
if(document.getElementById('uiDesigner').checked == true) {   
        list5[x] = 'UI/UX designer';
} else if(document.getElementById('java').checked == true){  
    list5[x] = 'java developer';  
}  else if(document.getElementById('python').checked == true){  
    list5[x] = 'python developer';  
} else if(document.getElementById('NET').checked == true){  
    list5[x] = '.NET developer';  
} 
if(document.getElementById('fresher').checked == true) {   
        list6[x] = 'Fresher';
} else if(document.getElementById('oneToTwo').checked == true){  
    list6[x] = '1-2 years';  
}  else if(document.getElementById('morethanTwo').checked == true){  
    list6[x] = 'more than 2 years';  
} else if(document.getElementById('morethanFive').checked == true){  
    list6[x] = 'more than 5 years';  
} 
var AddRown = document.getElementById('show');
var NewRow = AddRown.insertRow(n);

list1[x] = document.getElementById("name").value;
list2[x] = document.getElementById("age").value;
list3[x] = document.getElementById("email").value;
list4[x] = document.getElementById("address").value;

var cel1 = NewRow.insertCell(0);
var cel2 = NewRow.insertCell(1);
var cel3 = NewRow.insertCell(2);
var cel4 = NewRow.insertCell(3);
var cel5 = NewRow.insertCell(4);
var cel6 = NewRow.insertCell(5);
var cel7 = NewRow.insertCell(6);
var cel8 = NewRow.insertCell(7);


cel1.innerHTML = list1[x];
cel2.innerHTML = list2[x];
cel3.innerHTML = list3[x];
cel4.innerHTML = list4[x];
cel5.innerHTML = list5[x];
cel6.innerHTML = list6[x];
cel7.innerHTML = list7[x];
cel8.innerHTML = list8[x];


n++;
x++;
}

</script>
</body>

</html>



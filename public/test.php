<table border="1" style="width:100%" id="ex-table">
  <tr id="tr">
    <th>Client ID</th>
    <th>Company Name</th>
    <th>Contact Person</th>
    <th>Email</th>
    <th>Address</th>
    <th>region</th>
    <th>Due Dtae</th>
  </tr>
</table>

<script src="module"> 
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
// import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js";
import { getFirestore, collection, getDocs, addDoc } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-firestore.js";

const firebaseConfig = {
    apiKey: "AIzaSyCExQsyksPdb5hIDNvbcSyE3ZjO6QZGvjY",
    authDomain: "cms1-8d8e2.firebaseapp.com",
    databaseURL: "https://cms1-8d8e2-default-rtdb.firebaseio.com",
    projectId: "cms1-8d8e2",
    storageBucket: "cms1-8d8e2.appspot.com",
    messagingSenderId: "968650526599",
    appId: "1:968650526599:web:29b17ceba8b91f80300d22"
};

const db = getDatabase();
const starCountRef = ref(db, 'clients/');
onValue(starCountRef, (snapshot) => {
  snapshot.forEach(function (data) {
    var val = data.val();
    var content = '';
    content += '<tr>';
    content += '<td>' + val.client_no + '</td>'; //column1
    content += '<td>' + val.company_name + '</td>';//column2
    content += '<td>' + val.full_name + '</td>';//column2
    content += '<td>' + val.email + '</td>'; //column1
    content += '<td>' + val.address + '</td>';//column2
    content += '<td>' + val.region + '</td>';//column2
    content += '<td>' + val.due_date + '</td>';//column2
    content += '</tr>';
    $('#ex-table').append(content);
  });
});

</script>

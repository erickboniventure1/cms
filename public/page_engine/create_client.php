<div class="content-i" style="padding: 1.5rem;">
<div class="content-box">
    <div class="element-wrapper compact pt-4">
        <div class="element-actions"><a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add</span></a><a class="btn btn-success btn-sm" href="?page=client_list"><i class="os-icon os-icon-grid-10"></i><span>Cancel</span></a></div>
        <h6 class="element-header">Add Client</h6>
        <div class="element-box-tp">
            <!-- Main content -->
                  <section class="invoice">
                    <span id="order_status"></span>
                    <form method="POST" action="?dashboard" id="client_form">
                    <div class="row invoice-info">
                      <!-- <input type="hidden" value="Not Paid" name="order_status"/> -->
                      <div class="col-sm-6 invoice-col">

                      <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Company Name</label>
				  <div class="col-sm-9">
					<input type="text" id="company_name" name="company_name" class="form-control">
				  </div>
			  </div>


                        <div class="form-group row">
                          <label for="basic-input" class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-8">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                          <span class="sr-only">Company Category</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#addmodal" data-toggle="modal" data-target="#addmodal"><i class="os-icon os-icon-users"></i> Add Category</a>
                                        </div>
                                  </div>
                                  <select class="custom-select" name="category" id="category">
                                      <option value="selected">Select Category</option>
                                      <?php
                                                $sql = mysqli_query($con, "SELECT category FROM categories");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                                                }
                                                ?>
                                   </select>
                                </div>
                          </div>
                          
                          <!-- <div id="supplier_info"class="col-sm-12 invoice-col"> 
                               
                          </div> /.col -->
                        </div>

                        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Contact Person</label>
				  <div class="col-sm-9">
					<input type="text" id="full_name" name="full_name" class="form-control">
				  </div>
			  </div>

        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Email</label>
				  <div class="col-sm-9">
					<input type="text" id="email" name="email" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Phone</label>
				  <div class="col-sm-9">
					<input type="text" id="phone" name="phone" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Position</label>
				  <div class="col-sm-9">
					<input type="text" id="position" name="position" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Amount Paid</label>
				  <div class="col-sm-9">
					<input type="text" id="amount" name="amount" class="form-control">
				  </div>
			  </div>
                      </div><!-- /.col -->
                      
                      <div class="col-sm-6 invoice-col">
                          <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Client ID #</label>
          <script>
          // db.collection('clients').get().then(clients => {
          //       console.log(clients)
          //     });



              </script>
                                  <?php 
                                      $statement_id = "SELECT id FROM clients ORDER BY id DESC";
                                      $order_no_sql = mysqli_query($con, $statement_id) or die(mysqli_error($con));
                                      $get_order_no = mysqli_fetch_array($order_no_sql);
                                      $new_no = $get_order_no['id'] + 1;
                                      if($new_no >= 0 && $new_no < 10){
                                      $No = "SRS-". str_pad($new_no, 5, "0", STR_PAD_LEFT);
                                      }elseif ($new_no >= 10 && $new_no < 100) {
                                      $No = "SRS-". str_pad($new_no, 4, "0", STR_PAD_LEFT);  
                                      }elseif ($new_no >= 100 && $new_no < 1000) {
                                      $No = "SRS-". str_pad($new_no, 3, "0", STR_PAD_LEFT);  
                                      }elseif ($new_no >= 1000 && $new_no < 10000) {
                                      $No = "SRS-". str_pad($new_no, 2, "0", STR_PAD_LEFT);  
                                      }
                                  ?>
				  <div class="col-sm-9">
					<input type="text" id="client_no" name="client_no" value="<?php echo $No; ?>" class="form-control">
				  </div>
			  </div>
                          <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Address</label>
				  <div class="col-sm-9">
					<input type="text" id="address" name="address" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Location</label>
				  <div class="col-sm-9">
					<input type="text" id="location" name="location" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Region</label>
				  <div class="col-sm-9">
					<input type="text" id="region" name="region" class="form-control">
				  </div>
			  </div>
        <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Country</label>
				  <div class="col-sm-9">
					<input type="text" name="country" id="country" class="form-control">
				  </div>
			  </div>
          <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Date</label>
				  <div class="col-sm-9 input-group">
					<input type="date" name="reg_date" id="reg_date" class="form-control">
              <!-- <div class="input-group-append">
                <span class="input-group-text"><i class="os-icon os-icon-calendar"></i></span>
              </div> -->
				  </div>
			  </div>
          <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Due Date</label>
				  <div class="col-sm-9 input-group">
					<input type="date" name="due_date" id="due_date" class="form-control">
            <!-- <div class="input-group-append">
              <span class="input-group-text"><i class="os-icon os-icon-calendar"></i></span>
            </div> -->
				  </div>
			  </div>

                      </div><!-- /.col -->
                    </div><!-- /.row -->


                    <button type="submit" id = "insert"  class="btn floated-chat-btn"><span>Create</span></button>
                  </form>
                  </section><!-- /.content -->
        </div>
    </div>
</div>
</div>
<script type="module">
 
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
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



document.getElementById('insert').addEventListener('click',function (e) {
        e.preventDefault();
        
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);
  let client_noV = document.querySelector('#client_no').value;
  let company_nameV = document.querySelector('#company_name').value;
  let full_nameV = document.querySelector('#full_name').value;
  let emailV = document.querySelector('#email').value; 
  let categoryV = document.querySelector('#category').value;
  let positionV = document.querySelector('#position').value;
  let phoneV = document.querySelector('#phone').value; 
  let locationV = document.querySelector('#location').value;
  let addressV = document.querySelector('#address').value; 
  let regionV = document.querySelector('#region').value;
  let countryV = document.querySelector('#country').value; 
  let reg_dateV = document.querySelector('#reg_date').value;
  let due_dateV = document.querySelector('#due_date').value;
  let amountV = document.querySelector('#amount').value;

  console.log(client_noV+'---'+emailV);
    addDoc(collection(db, "clients"), {
        client_no: client_noV,
        email: emailV,
        full_name: full_nameV,
        company_name: company_nameV,
        category: categoryV,
        position: positionV,
        phone: phoneV,
        location: locationV,
        address: addressV,
        region: regionV,
        country: countryV,
        reg_date: reg_dateV,
        due_date: due_dateV,
        amount: amountV
    });
    alert('User Aded');
    });
  </script>
<!-- <script src="src/firebase_config.js"></script> -->

<script type="text/javascript"> 




//  function submitForm() {
//                 let db = new Firestore('db');
//                 let form= $('#client_form').serializeArray();
//                 console.log(objectifyForm(form));
                
//                 if(!navigator.onLine){

//                     db.collection('user_list ').add(objectifyForm(form))
//                 }
//             }
//             function objectifyForm(formArray) { //serialize data function
//                  var returnArray = {}; 
//                  for (var i = 0; i < formArray.length; i++){ 
//                      returnArray[formArray[i]['name']] = formArray[i]['value']; } return returnArray; }



</script>


<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="addmodal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Categoty</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
            </div>
            <div class="modal-body">
                <form id="category_form" method="POST">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input class="form-control" name="category1" placeholder="Enter Category" type="text">
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Password</label>
                                <input class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                <button class="btn btn-primary" type="button" id="button2" onclick="category()"> Save changes</button>
            </div>
        </div>
    </div>

<script>
      // function category(){
      //              let category_form= $('#category_form').serializeArray();
      //               $.ajax({
      //               url: "http://localhost/ssr/add_category.php",
      //               type: "POST",
      //               data: category_form,
      //               success:function(response) {
                    
                        
      //               }

      //           })
      //         }
    </script>
    <script src="src/firebase_config.js"></script>


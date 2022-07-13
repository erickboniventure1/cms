<div class="content-i" style="padding: 1.5rem;">
<div class="content-box">
    <div class="element-wrapper compact pt-4">
        <div class="element-actions"><a class="btn btn-primary btn-sm" href="?page=create_client"><i class="os-icon os-icon-ui-22"></i><span>Add Client</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a></div>
        <h6 class="element-header">Client</h6>
        <div class="element-box-tp">
        <div class="table-responsive">
            <table id="data-table"  class="table table-dark table-hover table-v2 table-striped ">
            <thead>
              <tr>
                <th>Client ID No.</th>
                <th>Company Name</th>
                <th>Category</th>
                <th>Contact Person</th>
                <th>Position</th>
                <th>Email</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Dated</th>
                <th>Due Date</th>
                <th>Last Paid</th>
                 <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php 
            $query_item = "SELECT * FROM clients";
            $sql_item = mysqli_query($con,$query_item);
            while($row = mysqli_fetch_array($sql_item)){
            
            
            ?>
            <tr style='background-color:".$color."'>
                <td><?php echo $row['client_no']; ?></td>
                 <td><?php echo $row['company_name']; ?></td>
                 <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['c_position']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['location']; ?></td>
               
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['reg_date']; ?></td>
                <td><?php echo $row['due_date']; ?></td>
                <td> 
                  <?php 
                 
                  $future = strtotime($row['due_date']);
                  $now = time();
                  $timeleft = $future-$now;
                  $daysleft = round((($timeleft/24)/60)/60);
                  echo  $daysleft ." Days";
                ?>
                </td>
                <td><?php echo $row['amount']; ?></td>
                <?php
                     if ($daysleft >0 & $daysleft <=30 ) {
                      echo '<td class="status-pill yellow" data-title="Renew"></td>';
                     }elseif($daysleft<=0){
                      echo '<td class="status-pill red" data-title="Overdue" data-toggle="tooltip" ></td>';
                     }
                     else{
                      echo '<td class="status-pill green" data-title="Active" data-toggle="tooltip" title="Active" ></td>';
                     }
                ?>
        

                 <td>
                    <!-- <a href="" data-placement="top" data-toggle="tooltip" title="Edit"><i class="os-icon os-icon-collection"></i></a> -->
                    <a href="" data-placement="top" data-toggle="tooltip" title="View"><i class="os-icon os-icon-grid-10"></i></a>
                    <!-- <a class="danger delete" id="" href="#" data-placement="top" data-toggle="tooltip" title="Delete"><i class="os-icon os-icon-ui-15"></i></a> -->
                </td>
                
            </tr>
            <?php

            }
            ?>

            <tfoot>
                <tr>
                <th colspan="12" style="text-align:right">TOTAL</th>
                <th></th>
                <th></th>
                <!-- <th></th> -->
                <!-- <th></th> -->
              </tr>
            </tfoot>
          </div>
          </table>
        </div>
    </div>
</div>
</div>

<script>
    $(function() {

        $(".table-striped").find("tr").each(function () {
            $("td").filter(function() {
                return $(this).text() === "30 Days";
            }).parent().addClass("failed");
        });
    });
</script>
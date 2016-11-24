<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Admin | Product</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
  <link href="../css/admin/user.css" rel="stylesheet">
  <link href="../css/admin/layout.css" rel="stylesheet">
</head>
<body>
  <!-- <div id="sidebar-wrapper">
    <ul class="sidebar-nav">                
      <li class="active-nav">
        <button>User</button>                   
      </li>
      <li>
        <button>Product</button>                   
      </li>
      <li>
        <button>Rating</button>                   
      </li>
      <li>
        <button>Cart</button>                   
      </li>
    </ul>
  </div>
  <div class="body-admin-member">
    <h1>Member</h1>
      <div class="container table-admin-member">    
        <table class="table table-condensed">
          <thead>
            <tr>
              <th class="th">Name</th>          
              <th class="th">Email</th>
              <th class="th">Full Name</th>
              <th class="th">Birthday</th>
              <th class="th">Address</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div> -->
  <div class="row">
    <div class="col-md-2">
      <div class="left-menu" id="left-menu">
        <ul class="list-group">                
          <li class="list-group-item center-text">
            <a href="../admin/user.php">User</a> 
          </li>
          <li class="list-group-item center-text">
            <a href="../admin/product.php">Product</a>
          </li>
          <li class="list-group-item center-text">
            <a href="../admin/rating.php">Rating</a>
          </li>
          <li class="list-group-item center-text">
            <a href="../admin/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-10">
      <button type="button" class="btn btn-success" data-toggle="modal" href='#modal-add-product' style="margin: 40px 15px">Add</button>
      <div class="modal fade" id="modal-add-product">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Product</h4>
            </div>
            <div class="modal-body">
              <form method="POST" role="form">                       
                <!-- <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" id="car_id" placeholder="ID">
                </div> -->
                <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" id="product_id" placeholder="ID">
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" id="product_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="text" class="form-control" id="product_price" placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="">Type</label>
                  <input type="text" class="form-control" id="product_type" placeholder="Type">
                </div>
                <div class="form-group">
                  <label for="">Class</label>
                  <input type="text" class="form-control" id="product_class" placeholder="Class">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" class="form-control" id="product_description" placeholder="Description">
                </div>
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addProduct()">Add Product</button>
              </div>
          </div>
        </div>
      </div>
        <!-- /modal-add-new-car -->


      <div class="modal fade" id="modal-edit-car">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Edit User</h4>
                  </div>
                  <div class="modal-body">
                      <form method="POST" role="form">                       
                          <div class="form-group">
                              <label for="">ID</label>
                              <input type="text" class="form-control" id="edit_user_id" placeholder="ID">
                          </div>
                          <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" id="edit_user_name" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" class="form-control" id="edit_user_email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <label for="">FullName</label>
                              <input type="text" class="form-control" id="edit_user_fullname" placeholder="FullName">
                          </div>
                          <div class="form-group">
                              <label for="">Address</label>
                              <input type="text" class="form-control" id="edit_user_address" placeholder="Addres">
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="saveEditUser()">Save changes</button>
                      <input type="hidden" id="user_id_to_edit">
                  </div>
              </div>
          </div>
      </div>
      <div id="productTable">
            
      </div>
    </div>
  </div>
  
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script_product.js"></script>
</body>
</html>
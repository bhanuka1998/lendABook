
<html >
  <head>
    <?php error_reporting(0); ?>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lend A Book </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
   
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            
          <a class="navbar-brand brand-logo-mini" href="index.html">
             </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            
            
          </ul>
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="viewBook.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Books</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="viewVideos.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Videos</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="addRequest.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Requests</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="viewBookReserve.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Book Reservations</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="viewVideoReserve.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Video Reservations</span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
 session_start();

 $db = mysqli_connect('localhost', 'root', '', 'lims');
 $results = mysqli_query($db, " SELECT * FROM `book`"); 



 ?>


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Id</th>
<th> Name</th>
<th>ISBN</th>
<th>Author</th>
<th>Copies</th>
<th>Publisher</th>
<th>Reserve</th>
<th>Add to Favoorite</th>
<th>Add Comment</th>
<th>View Comments</th>
</tr>
</thead>
<tbody>
<?php while ($row = mysqli_fetch_array($results)) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['isbn']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['copies']; ?></td>
<td><?php echo $row['publisher']; ?></td>


<td> 
<script type="text/javascript">
function getBookReservation() {
document.location.href = "BKReserve.php?id=<?php echo $row["id"]; ?>";
}
</script>
<a href="#" onClick="getBookReservation()">Reserve Book</a>
</td>



<td>
<script type="text/javascript">
function addbkfavorites() {
document.location.href = "php/addBkFav.php?id=<?php echo $row["id"]; ?>";
}
</script>
<a href="#" onClick="addbkfavorites()">Favorite</a>
</td>



<td>
<script type="text/javascript">
function addComments() {
document.location.href = "Comments.php?id=<?php echo $row["id"]; ?>";
}
</script>
<a href="#" onClick="addComments()">Comments</a>
</td>


<td>
<script type="text/javascript">
function viewComments() {
document.location.href = "viewComments.php?id=<?php echo $row["id"]; ?>";
}
</script>
<a href="#" onClick="viewComments()">ViewComments</a>
</td>


</tr>
<?php } ?>
</tbody>
</div>
          <!-- content-wrapper ends -->


          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>

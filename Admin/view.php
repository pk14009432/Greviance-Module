<?php
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
include('config/admin.php');

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Complains</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Review</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $query="select * from scomplain";
            $query_run=mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
              foreach ($query_run as $row) {
                ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sub']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td>
                </td>
                </tr>
                <?php
              }
            }
            else
            {

            }

            ?>
        </tbody>
        </table>
        </div>
        </div>

        </div>
    </div>
    </div>

<?php
include('include/footer.php');

?>
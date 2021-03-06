<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Book Now! Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- code start-->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile no.</th>
                      <th>Gender</th>
                      <th>Qualification</th>
                      <th>Package</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    include "dbcon.php";
                    $r= "SELECT * FROM booknow";
                    $q=mysqli_query($con,$r);
                    while($result=mysqli_fetch_array($q))
                    {
                      ?>
                    <tr>
                      <td><?php echo $result['id']?></td>
                      <td><?php echo $result['name']?></td>
                      <td><?php echo $result['email']?></td>
                      <td><?php echo $result['mobile']?></td>
                      <td><?php echo $result['gender']?></td>
                      <td><?php echo $result['qual']?></td>
                      <td><?php echo $result['package']?></td>  
                      <td>
                        <a href="delform.php?id=<?php echo $result['id']?>">Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
            <!-- /.card -->
    <!-- code end-->
    <!-- /.content-wrapper -->
</div>




























<?php include "footer.php"; ?>



<?php 
    include('include/conn.php');
    include('include/header.php');
    // include('include/navbar-top.php');
?>  

<?php
    if($insert){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your employee has been inserted succesfully!.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
  ?>
  <?php
    if($update){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your employee has been updated succesfully!.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
  ?>
  <?php
    if($delete){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your employee has been deleted succesfully!.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
  ?>
  <?php
    include('include/modal.php');
  ?>
    
  <!-- Table -->
  <button class="add btn btn-primary">Add Employee</button>
  <div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <!-- <th scope="col">PanCard No</th> -->
          <th scope="col">Name</th>
          <th scope="col">Role</th>
          <th scope="col">Email</th>
          <th scope="col">Contact No</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php 
            $sql = "SELECT * FROM `employee`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while($row = mysqli_fetch_assoc($result)){
              $sno=$sno+1;
              $status="Active";
              if($row['resigning']!=null) $status="Resigned";
              echo "<tr>
              <th scope='row'>". $sno ."</th>
              <td>". $row['name'] ."</td>
              <td>". $row['role'] ."</td>
              <td>". $row['mail'] ."</td>
              <td>". $row['mobile'] ."</td>
              <td>".   $status    ."</td>
              <td> <button class='edit btn btn-sm btn-primary' id=". $row['pan'] .">Edit</button> <button class='delete btn btn-sm btn-primary' id=d". $row['pan'] .">Delete</button> </td>
              </tr>";
            }
        ?>
      </tbody>
    </table>
  </div>
  <hr>
  <?php 
    include('include/scripts.php');
    // include('js/script.js');
    include('include/footer.php');
?>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
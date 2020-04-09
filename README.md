# php2
<?php include_once('lib/header.php'); ?>
    <p><strong>Welcome, Please Register</strong></p>
    <p>All fields are required</p>

    <form class="" action="processregister.php" method="post">
      <p>
        <label for="">First Name</label><br>
        <input type="text" name="first_name" placeholder="First name">
        <?php
            if (isset($_SESSION['first_name'])){
              echo "value=" . $_SESSION['frst_name'];
            }
         ?>
      </p>
      <p>
        <label for="">Last Name</label><br>
        <input type="text" name="last_name" placeholder="Last name">
        <?php
            if (isset($_SESSION['last_name'])){
              echo "value=" . $_SESSION['last_name'];
            }
         ?>
      </p>
      <p>
        <label for="">Email</label><br>
        <input type="text" name="email" placeholder="Email">
        <?php
            if (isset($_SESSION['email'])){
              echo "value=" . $_SESSION['email'];
            }
         ?>
      </p>
      <p>
        <label for="">password</label><br>
        <input type="password" name="password" placeholder="Password">
      </p>
      <p>
        <label for="">Gender</label>
        <select class="" name="gender">
          <option value="">Male</option>
          <option value="">Female</option>
        </select>
      </p>
    <p>
      <label for="">Role</label>
      <?php
          if (isset($_SESSION['Role'])){
            echo "value=" . $_SESSION['Role'];
          }
       ?>
      <select class="" name="role">
        <option value="">Seller</option>
        <option value="">Buyer</option>
      </select>
    </p>
    <p>
      <button type="submit" name="button">Register</button>
    </p>
    </form>

<?php include_once('lib/footer.php'); ?>

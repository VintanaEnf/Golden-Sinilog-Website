<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-brand">
        <div>
          <img src="../Gred.png" height="50" width="50" />
        </div>

        <div style="margin-top: 8px">
          <img src="../logo_nomargin.png" height="40" />
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>


          <li>

            <a href="../admin/Profile.php"
              ><span class="material-symbols-outlined">list</span>
              <span>Profile</span></a
            >

          </li>


          <li>

            <a href="../admin/Transactions.php"
              ><span class="material-symbols-outlined">list</span>
              <span>Transactions</span></a
            >

          </li>

          <?php 

          if($userlist[1]['IsAdmin'] == 1){
            echo'<li>

              <a href="../admin/products.php"
                ><span class="material-symbols-outlined">list</span>
                <span>Admin Page</span></a
              >

            </li>
            ';
          };
          ?>

          <li>

            <a href="../../index.php"
              ><span class="material-symbols-outlined">list</span>
              <span>home</span></a
            >

          </li>

        </ul>
        <hr color="grey" />
        <ul>
          <li>
            <a href="../../logout.php"
              ><span class="material-symbols-outlined">logout</span>
              <span span>Logout</span></a
            >
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>

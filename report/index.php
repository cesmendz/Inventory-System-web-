<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Web-Based Invetory System </title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

      <!-- Bootstrap -->
      <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous"
      />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>

  <body>


    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left"></div>

        <nav>
          <div class="icon" onclick="toggleNotifi()">
            <img src="bell.png" alt=""> <span>4</span>
          </div>

          <div class="notifi-box" id="box">
            <h2>Notifications <span>4</span></h2>

            <div class="notifi-item">
              <img src="p1.png" alt="img">
              <div class="text">
                 <h4>Table Napkin</h4>
                 <p>5pcs</p>
                </div> 
            </div>
      
            <div class="notifi-item">
              <img src="P2.png" alt="img">
              <div class="text">
                 <h4>Bathroom Tissue</h4>
                 <p>4pcs</p>
                </div> 
            </div>
      
            <div class="notifi-item">
              <img src="a1.png" alt="img">
              <div class="text">
                 <h4>Paper Cups Plain</h4>
                 <p>6 box</p>
                </div> 
            </div>
      
            <div class="notifi-item">
              <img src="a8.png" alt="img">
              <div class="text">
                 <h4>Sando Bag </h4>
                 <p>10 ream</p>
                </div> 
            </div>
    
          </div>
        </nav>
        </nav>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <h2>I-TECH</h2>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="index.php" onclick="toggleMenu();">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="#Products" onclick="toggleMenu();">
              <span class="material-icons-outlined">inventory_2</span> Products
            </a>

          <li class="sidebar-list-item">
            <a href="#Reports" onclick="toggleMenu();">
              <span class="material-icons-outlined">poll</span> Reports
            </a>
          </li>

          <li class="sidebar-list-item">
            <a href="#Settings" onclick="toggleMenu();">
              <span class="material-icons-outlined">settings</span> Settings
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h1>DASHBOARD</h1>
        </div>

        <div class="main-cards">
          <div class="card">
            <div class="card-inner">
              <h3>PRODUCTS</h3>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <h1>16</h1>
          </div>

         <!-- <div class="card">
            <div class="card-inner">
              <h3>CATEGORIES</h3>
              <span class="material-icons-outlined">category</span>
            </div>
            <h1>0</h1>
          </div> -->
          
          <!-- <div class="card">
            <div class="card-inner">
              <h3>CUSTOMERS</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>0</h1>
          </div> -->

          <div class="card">
            <div class="card-inner">
              <h3>ALERTS</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <h1>4</h1> 
          </div>

        </div>


        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!--PPRODUCT-->

    <section class="Products" id="Products">
        <div class="title">
            <h1>Products</h1>
        </div>
        <div class="ListProduct">
            <div class="item">
                <img src="p1.png" alt="">
                <h2>Table Napkin</h2>
                <div class="price">47.00/pack</div>
            </div>
            
            <div class="item">
                <img src="p2.png" alt="">
                <h2>Bathroom Tissue</h2>
                <div class="price">10.00/pc</div>
            </div>

            <div class="item">
                <img src="p3.png" alt="">
                <h2>Paper Towel</h2>
                <div class="price">38.00/pc</div>
            </div>

            <div class="item">
                <img src="p4.png" alt="">
                <h2>Kitchen Towel</h2>
                <div class="price">47.00/pc</div>
            </div>

            <div class="item">
                <img src="p5.png" alt="">
                <h2>Jumbo Roll Tissue</h2>
                <div class="price">92.00/pc</div>
            </div>

            <div class="item">
                <img src="p6.png" alt="">
                <h2>Hand Roll Tissue</h2>
                <div class="price">198.00/pc</div>
            </div>

            <div class="item">
                <img src="a1.png" alt="">
                <h2>Paper Cups Plain</h2>
                <div class="price">740.00/box</div>
            </div>

            <div class="item">
                <img src="a2.png" alt="">
                <h2>Paper Bowl Printed</h2>
                <div class="price">2.00/pc</div>
            </div>

            <div class="item">
                <img src="a3.png" alt="">
                <h2>Spaghetti Box</h2>
                <div class="price">3.00/pc</div>
            </div>

            <div class="item">
                <img src="a4.png" alt="">
                <h2>Kikiam Plate</h2>
                <div class="price">15.00/pack</div>
            </div>

            <div class="item">
                <img src="a5.png" alt="">
                <h2>Paper Plate</h2>
                <div class="price">22.00/pack</div>
            </div>

            <div class="item">
                <img src="a6.png" alt="">
                <h2>Plastic Spoon,Fork,Knife</h2>
                <div class="price">97.00/per kilo</div>
            </div>

            <div class="item">
                <img src="a7.png" alt="">
                <h2>Trash Bag</h2>
                <div class="price">235.00/100pcs</div>
            </div>

            <div class="item">
                <img src="a8.png" alt="">
                <h2>Sando Bag</h2>
                <div class="price">115.00/ream</div>
            </div>

            <div class="item">
                <img src="a9.png" alt="">
                <h2>Paper Cups Printed</h2>
                <div class="price">2.00/pc</div>
            </div>

            <div class="item">
                <img src="a10.png" alt="">
                <h2>Paper Bowl Plain</h2>
                <div class="price">2.50/pc</div>
            </div>
        </div>
    </section>
   
    <!--END PRODUCT-->

    <!--REPORT PAGE-->
    <section class="Reports" id="Reports">
  <div class="container">
    <h1 class="mt-5 mb-5">Report</h1>
    <div class="mb-5">
       
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <label for="name">ID</label>
                <input 
                type="text" 
                name="title" 
                class="form-control"
                id="title" 
                placeholder="Enter ID"
                />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="age">Product Name</label>
                <input 
                type="text" 
                name="text" 
                class="form-control"
                id="text" 
                placeholder="EnterProduct"
                />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="age">Price</label>
                <input 
                type="text" 
                name="price" 
                class="form-control"
                id="price" 
                placeholder="Enter Price"
                />
            </div>

            <div class="form-group col-md-6 mb-3">
                <label for="age">Stock Quantity</label>
                <input 
                type="number" 
                name="stock" 
                class="form-control"
                id="stock" 
                placeholder="Enter Quantity"
                oninput="checkStockQuantity(this.value)"
                />
            </div>

                <div class="col-lg-12 mt-5">
                    <button class="btn btn-success" id="Submit" onclick="addData()">
                        Add Product
                        </button>

                        <button class="btn btn-primary" id="Update">Update
                        </button>
                </div>


                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-5"></div>
        <div class="col12">
            <table class="table table-bordered" id="postTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    </section>

            <script>
            function checkStockQuantity(stockQuantity, productId) {
                if (stockQuantity < 0) {
                    alert("Stock quantity is low! Please restock.");
                    addProductToNotification(productId);
                }
            }
            </script>
                
    <!--END REPORT PAGE-->

    <!--Setting-->
    <section class="Settings" id="Settings">
      <div class="setting">
        <div id="lo">
          <h1 class="lo">I-Tech</h1>
        </div>
  
        <div class="lbox">
          <nav>
            <a href="#" class="act">
              <i class="fa fa-user"></i>
            </a>
            <a href="#">
              <i class="fa fa-credit-card"></i>
            </a>
            <a href="#">
              <i class="fa fa-tv"></i>
            </a>
            <a href="#">
              <i class="fa fa-tasks"></i>
            </a>
            <a href="#">
              <i class="fa fa-cog"></i>
            </a>
          </nav>
        </div>
  
        <div class="rbox">
          <div class="prof">
            <h1>Personal Info</h1>
            <h2>Full Name</h2>
            <p>I-Tech <button class="tn">update</button></p>
            <h2>Birthday</h2>
            <p>January 5</p>
            <h2>Gender</h2>
            <p>Female</p>
            <h2>Email</h2>
            <p>itech@gmail.com <button class="tn">update</button></p>
            <h2>Password</h2>
            <p>******** <button class="tn">Change</button></p>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
  </body>
</html>
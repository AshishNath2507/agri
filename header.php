 <!-- ----Header---- -->
 <nav class="header">
        <div class="header-image">
            <img src="images/logo.png" alt="agri-img" srcset="">
        </div>

        <div class="nav-items">
            <a class="link" href="index.php">Home</a>
            <div class="dropdown" data-dropdown>
                <button class="link academics-dd" data-dropdown-button>Academics<sup>+</sup></span></button>
                <div class="dropdown-menu ">
                    <div>
                        <div class="dropdown-heading">Informations</div>
                        <div class="dropdown-links">
                            <a href="viewstd.php" class="link">Students</a>
                            <a href="viewfac.php" class="link">Faculty</a>
                            <a href="viewalumni.php" class="link">Alumni</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <a class="link" href="./contactus.php">Contact Us</a>
            <a class="link" href="#">About Us</a>
            
            <div class="dropdown" data-dropdown>
                <button class="link account-dd" data-dropdown-button>Account<sup>+</sup></span></button>
                <div class="dropdown-menu information-grid">
                    <!-- <div>
                        <div class="dropdown-heading">Admin</div>
                        <div class="dropdown-links">

                        </div>
                    </div> -->
                    <div>
                        <div class="dropdown-heading">Alumni</div>
                        <div class="dropdown-links">
                            <a href="#" class="link">Register</a>
                            <a href="#" class="link">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown" data-dropdown>
                <button class="link" data-dropdown-button>Admin Login<sup>+</sup></span></button>
                <div class="dropdown-menu admin-login">
                    <form action="adminlogin1.php" method="POST" class="login-form">
                        <label for="username">Username:</label>
                        <input type="text" name="uname" id="name" required>
                        <label for="password">Password:</label>
                        <input type="password" name="pswd" id="pswd" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <script src="demo.js" defer type="text/javascript"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Visiting Makhanda - Attractions</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="body-attractions">
    <header>
      <a class="home-logo-link" href="../index.php">
        <div class="logo-heading">
            <img width="30px" src="../Images/logo/potholeanddonkey_transparent.png" alt="logo">
            <h2> Visit Makhanda</h2>
        </div>
      </a>
      <input id="menu-toggle" type="checkbox">
      <div class="hamburger-container">  
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <nav><ul class="menu">
        <li> <a href="../index.php"> Home </a></li>
        <li> <a href="./About.php"> About </a></li>
        <li > <a class="active"  href="./Attractions.php"> Attractions
        <li><a href="./Login.php"> Login </a></li>
        <section class="toggle">
            <label class="toggle_bar round">
                <input type="checkbox">
                <span id="#slider-color" class="slider round"><i id="#toggle-icon" class="sun large icon"></i></span>
            </label>
        </section>
        </ul>
      </nav>
    </header>
    <main> 
<!-- 
        <h1 id="attractions-heading">Attractions</h1> -->
        <section class="form-section">
            <form action="" id="attraction-form">
                <section class="search-section">
                    <input id="search-input" size="50" type="text" placeholder="where do you want to go?"/>
                    <span class="search-button round">
                        <i class="search icon"></i>  
                    </span>
                </section>

                <section class="search-filters-section">
                    <label for="Sort-By-Dropdown"> 
                        <p> Sort by </p>
                        <select name="" id="Sort-By-Dropdown">
                            <option value="0">Default</option>
                            <option value="1">Popularity</option>
                            <option value="2">Rating</option>
                        </select>
                    </label>
                    <label for="">
                        <p>Filter by</p>
                         
                        <select name="Type" id="Attraction-Type-Dropdown">
                            <option value="0">All</option>
                            <option value="1">Restuarant</option>
                            <option value="2">Attraction</option>
                        </select>
    <!-- 
                        <select name="SubType" id="Attraction-SubType-Dropdown">
                        </select> -->
                    </label>
                </section>

                    
            </form>
        </section>
        <section class="search-results">
            
        </section>
    </main>
    <footer class="shift_attraction">
    
        <div class="footer-content">
            <section class="contact-us">
            <h3 id="contact-us-heading">Contact us</h3>
            <ul>
            <li>Emily Morgan: <a href="#"> e.morgan@ru.ac.za</a></li>
            <li>Sibusiso Dlamini:<a href="#"> s.dlamini@ru.ac.za</a> </li>
            <li>John Morrison:<a href="#"> j.morrison@ru.ac.za</a> </li>
            </ul>
            </section>
            <section class="terms_and_conds">
    
            <h3>Terms and Conditions</h3>
            <p>Click <a href="terms_and_conds.txt">here</a> for our terms and conditions.</p>
            </section>
        </div>
    
        <p class="copy-symbol">
            
            <small >Copyright &copy; 2022</small>
        </p>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>
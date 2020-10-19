<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projeto Bootstrap - CEAC">
    <meta name="keywords" content="HTML5, CSS3, Javascript, Bootstrap, Jquery, Projeto CEAC">
    <meta name="author" content="Rubens Batista">
    <title>Ourstore | Contact</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--DEFAULT CSS-->
    <link rel="stylesheet" href="style.css" type="text/css">
    <!--FAVICON IMG-->
    <link rel="icon" href="img/favicon-32x32.png" type="image/png" sizes="32x32">
    <!--FONTS GOOGLE-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--BOOTSTRAP JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"><!--Nav-->
      <div class="container"><!--Nav Container-->
              <a class="navbar-brand" href="index.php" style="max-width: 7em;">
                  <img src="img/logo-dark.png" alt="Logo Marca" class="img-fluid">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent"><!--Collapse Nav-->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><!--Dropdown menu-->
                      <a class="dropdown-item" href="#">Special Offers</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Bakery</a>
                      <a class="dropdown-item" href="#">Fruits and Vegetables</a>
                      <a class="dropdown-item" href="#">Dairy and Eggs</a>
                      <a class="dropdown-item" href="#">Meat and Poultry</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0"><!--Search Nav-->
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form><!--Fim Search Nav-->
              </div><!--Fim Collapse Nav-->
          </div>
      </nav><!--Fim Nav-->
        <!--JUMBOTRON-->
        <div class="jumbotron mt-5 pb-4 rounded-0">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 jumbotron-title">Contact</h1>
                </div>
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent float-right">
                        <li class="breadcrumb-item breadcrumb-text"><a href="index.html" class="text-secondary">Home</a></li>
                        <li class="breadcrumb-item active text-muted breadcrumb-text" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div><!--Fim JUMBOTRON-->
        <!--"Container Pages"-->
        <section class="container-fluid mt-n3"><!--Container Pages-->
            <div class="row"><!--Row-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-md-3 mb-sm-3"><!--Col-->
                    <div class="card-deck"><!--Card Deck-->
                        <div class="card"><!--Card-->
                            <div class="card-body text-center"><!--Card Body-->
                                <span>
                                    <svg class="bi bi-map text-success mb-3 contact-icons" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M15.817.613A.5.5 0 0116 1v13a.5.5 0 01-.402.49l-5 1a.502.502 0 01-.196 0L5.5 14.51l-4.902.98A.5.5 0 010 15V2a.5.5 0 01.402-.49l5-1a.5.5 0 01.196 0l4.902.98 4.902-.98a.5.5 0 01.415.103zM10 2.41l-4-.8v11.98l4 .8V2.41zm1 11.98l4-.8V1.61l-4 .8v11.98zm-6-.8V1.61l-4 .8v11.98l4-.8z" clip-rule="evenodd"/>
                                      </svg>
                                </span>
                                <h5 class="card-title title-footer">Main store adress</h5>
                                <p class="card-text text-secondary breadcrumb-text">
                                    369 Lillian Blvd, Holbrook, NY 11741, USA<br>
                                    <a href="https://www.google.com/maps?ll=40.79404,-73.073716&z=13&t=m&hl=en&gl=UA&mapclient=embed&q=396+Lillian+Blvd+Holbrook,+NY+11741+USA" class="card-link text-success">
                                        Click to see map
                                        <span>
                                          <svg class="bi bi-chevron-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </a>
                                </p>
                            </div><!--Fim Card Body-->
                        </div><!--Fim Card-->
                    </div><!--Fim Card Deck-->
                </div><!--Fim Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-md-3 mb-sm-3"><!--Col-->
                    <div class="card-deck"><!--Card Deck-->
                        <div class="card"><!--Card-->
                            <div class="card-body text-center"><!--Card Body-->
                                <span>
                                    <svg class="bi bi-clock text-success mb-3 contact-icons" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm8-7A8 8 0 110 8a8 8 0 0116 0z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 01.5.5v5.21l3.248 1.856a.5.5 0 01-.496.868l-3.5-2A.5.5 0 017 9V3.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                                      </svg>
                                </span>
                                <h5 class="card-title title-footer">Working hours</h5>
                                <p class="card-text text-secondary breadcrumb-text">Mon - Fri: 10AM - 7PM<br>Sta: 11AM - 5PM</p>
                            </div><!--Fim Card Body-->
                        </div><!--Fim Card-->
                    </div><!--Fim Card Deck-->
                </div><!--Fim Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-3"><!--Col-->
                    <div class="card-deck"><!--Card Deck-->
                        <div class="card"><!--Card-->
                            <div class="card-body text-center"><!--Card Body-->
                                <span>
                                    <svg class="bi bi-phone text-success mb-3 contact-icons" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                      </svg>
                                </span>
                                <h5 class="card-title title-footer">Phone numbers</h5>
                                <p class="card-text text-secondary breadcrumb-text">For customers:+1 (080) 44 357 260<br>Tech support:+1 00 33 169 7720</p>
                            </div><!--Fim Card Body-->
                        </div><!--Fim Card-->
                    </div><!--Fim Card Deck-->
                </div><!--Fim Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6"><!--Col-->
                    <div class="card-deck"><!--Card Deck-->
                        <div class="card"><!--Card-->
                            <div class="card-body text-center"><!--Card Body-->
                                <span>
                                    <svg class="bi bi-envelope text-success mb-3 contact-icons" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
                                        <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
                                      </svg>
                                </span>
                                <h5 class="card-title title-footer">Email addresses</h5>
                                <p class="card-text text-secondary breadcrumb-text">For customers:customer@example.com<br>Tech support:support@example.com</p>
                            </div><!--Fim Card Body-->
                        </div><!--Fim Card-->
                    </div><!--Fim Card Deck-->
                </div><!--Fim Col-->
            </div><!--Fim Row-->
        </section><!--Fim Container Pages-->
        <div class="container-fluid mt-5 pl-0 mb-n1">
            <div class="row border-top">
                <div class="col-lg-6 col-sm-12 pr-0">
                    <iframe class="iframe-full-height border-0" width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53357.14257194912!2d-73.07268695801845!3d40.78017062807504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396+Lillian+Blvd%2C+Holbrook%2C+NY+11741%2C+USA!5e0!3m2!1sen!2sua!4v1558703206875!5m2!1sen!2sua"></iframe>
                </div>
                <div class="col-lg-6 col-sm-12  mt-lg-0 mt-md-5 mt-sm-5 mt-5 pb-md-0 pb-lg-0 pb-sm-5 pb-5 align-self-center">
                    <form class="px-2 py-2">
                        <h4 class="mb-3">Drop us a line</h4>
                        <div class="row mb-3">
                          <div class="col">
                            <label for="yourname">Your name:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="John Doe" id="yourname">
                          </div>
                          <div class="col">
                            <label for="email">Email adress:<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="johndoe@email.com" id="email">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <label for="phone">Your phone:<span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="+1(212) 00 000 000" id="phone">
                          </div>
                          <div class="col">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" placeholder="Provide short title of your request" id="subject">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <label for="message">Message:<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" rows="7">Please describe in detail your request</textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                              <button type="submit" class="btn btn-outline-success btn-lg">Send message</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        <footer class="bg-dark text-white py-5"><!--Footer-->
          <div class="container-lg container-md container-sm"><!--Footer Container-->
            <div class="row row-cols-2 row-cols-lg-4"><!--Row-->
              <div class="col mb-4">
                <h4>OurStore&trade;</h4>
              </div>
              <div class="col mb-4"><!--Col-->
                <ul class="list-unstyled">
                  <h5 class="title-footer">Product catalog</h5>
                  <a href="#" class="text-secondary text-list-footer"><li>Special Offers</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Bakery</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Fruits and Vegetables</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Dairy and Eggs</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Meat and Poultry</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Fish and Seafood</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Sauces and Spices</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Canned Food and Oil</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Alcoholic Beverages</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Soft Drinks and Juice</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Packets, Cereals and Poultry</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Frozen</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Personal Hygiene</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>Kitchenware</li></a>
                </ul>
              </div><!--Fim Col-->
              <div class="col mb-4"><!--Col-->
                <ul class="list-unstyled">
                  <h5 class="title-footer">Product catalog</h5>
                  <a href="index.html" class="text-secondary text-list-footer"><li>Home</li></a>
                  <a href="about.html" class="text-secondary text-list-footer"><li>About</li></a>
                  <a href="shop.html" class="text-secondary text-list-footer"><li>Shop</li></a>
                  <a href="#" class="text-secondary text-list-footer"><li>FAQ</li></a>
                  <a href="contact.html" class="text-secondary text-list-footer"><li>Contacts</li></a>
                </ul>
                <ul class="list-inline">
                  <h5 class="title-footer">Follow us</h5>
                  <a href="#" class="text-white mr-2 social-icons-footer"><li class="list-inline-item">
                    <i class="fab fa-twitter"></i>
                  </li></a>
                  <a href="#" class="text-white mx-2 social-icons-footer"><li class="list-inline-item">
                    <i class="fab fa-facebook-f"></i>
                  </li></a>
                  <a href="#" class="text-white mx-2 social-icons-footer"><li class="list-inline-item">
                    <i class="fab fa-instagram"></i>
                  </li></a>
                  <a href="#" class="text-white mx-2 social-icons-footer"><li class="list-inline-item">
                    <i class="fab fa-youtube"></i>
                  </li></a>
                </ul>
              </div><!--Fim Col-->
              <div class="col mb-4"><!--Col-->
                <form class="form-group">
                  <h5 class="title-footer">Stay informed</h5>
                  <div class="form-group has-envelope">
                    <span class="form-control-feedback">
                      <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
                        <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
                      </svg>
                    </span>
                    <input type="email" class="form-control input-your-email" placeholder="Your email" aria-describedby="emailHelp">
                    <button class="btn btn-primary btn-subscribe mt-2" type="button">Subscribe*</button>
                  </div>
                </form>
                <small id="emailHelp" class="form-text text-muted">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
              </div><!--Fim Col-->
            </div><!--Fim Row-->
          </div><!--Fim Footer Container-->
        </footer><!--Fim Footer-->
        <footer class="copyright-footer pt-3"><!--Footer Copyright-->
          <div class="container"><!--Container Copyright-->
            <div class="row"><!--Row Copyright-->
              <div class="col"><!--Col Copyright-->
                <p class="text-list-footer text-secondary">© Projeto bootstrap. Programação web CEAC</p>
              </div><!--Fim Col Copyright-->
              <div class="col"><!--Col Copyright-->
                <img src="img/cards-alt.png" class="img-fluid float-right" style="width: 12em;" alt="">
              </div><!--Fim Col Copyright-->
            </div><!--Fim Row Copyright-->
          </div><!--Fim Container Copyright-->
        </footer><!--Fim Footer Copyright-->
</body>
</html>
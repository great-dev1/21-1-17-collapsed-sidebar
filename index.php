<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Collapsed Sidebar</title>

  <!-- Google Fonts -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/css/purpose-blue-light.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- <img src="../Capture.PNG" style="position: absolute; z-index: 99; top: 0; left: 0; opacity: 0.7"> -->

  <div id="mySidebar" class="sidebar">
    <div class="sidebar-header">
      <span class="open-btn">☰</span>
      <span class="close-btn">&times;</span>

      <div class="sidebar-header-content">
        <a class="side-link" href="#">
          <div class="d-flex align-items-center">
            <img class="avatar-img" src="assets/img/avatar.png" alt="avatar">

            <div class="header-text">
              <p class="user-name">Twenty August</p>
              <p class="company-name">Twenty August's Company</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="sidebar-main">
      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M426.666667 853.333333V597.333333h170.666666v256h213.333334V512h128L512 128 85.333333 512h128v341.333333z" />
        </svg>
        <span class="link-text">Dashboard</span>
      </a>

      <hr class="split-line">

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M512 597.994667q108.010667 0 225.002667 46.997333t116.992 123.008l0 85.994667-684.010667 0 0-85.994667q0-76.010667 116.992-123.008t225.002667-46.997333zM512 512q-69.994667 0-120-50.005333t-50.005333-120 50.005333-121.002667 120-51.008 120 51.008 50.005333 121.002667-50.005333 120-120 50.005333z" />
        </svg>
        <span class="link-text">People</span>
      </a>

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M688 736h80v-80h-80v80z m-64-224h-80v80h80v-80z m-240-144v496H160V160h384v144h80V80H80v864h384V448h384v416H624v-64h-80v144h384V368H384z m160 368h80v-80h-80v80z m224-224h-80v80h80v-80zM240 736h80v-80h-80v80z m80-512h-80v80h80v-80z m144 80v-80h-80v80h80z m-144 64h-80v80h80v-80z m0 144h-80v80h80v-80z" />
        </svg>
        <span class="link-text">Companies</span>
      </a>

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M778.285714 677.142857q0 87.428571-56.857143 150.571429T573.714286 905.714286v100q0 8-5.142857 13.142857t-13.142858 5.142857H478.285714q-7.428571 0-12.857143-5.428571T460 1005.714286v-100q-37.714286-5.142857-72.857143-17.714286T329.142857 862.571429t-42.285714-27.428572-26.571429-21.428571-10-10.285715q-9.714286-12-1.142857-23.428571l58.857143-77.142857q4-5.714286 13.142857-6.857143 8.571429-1.142857 13.714286 5.142857l1.142857 1.142857q64.571429 56.571429 138.857143 71.428572 21.142857 4.571429 42.285714 4.571428 46.285714 0 81.428572-24.571428t35.142857-69.714286q0-16-8.571429-30.285714t-19.142857-24-33.428571-21.428572-37.714286-18.285714-45.714286-18.571429q-22.285714-9.142857-35.142857-14.285714T418.857143 542t-35.714286-17.714286T350.857143 504t-30.571429-24.285714-24.857143-28-20.285714-33.142857-12-38-4.857143-44.571429q0-78.857143 56-138.285714t145.714286-76.571429V18.285714q0-7.428571 5.428571-12.857143T478.285714 0h77.142857q8 0 13.142858 5.142857t5.142857 13.142857v100.571429q32.571429 3.428571 63.142857 13.142857t49.714286 19.142857T722.857143 172.571429t22.285714 16.571428 8.571429 8q9.714286 10.285714 2.857143 21.714286l-46.285715 83.428571q-4.571429 8.571429-13.142857 9.142857-8 1.714286-15.428571-4-1.714286-1.714286-8.285715-6.857142t-22.285714-15.142858-33.428571-18.285714-42.571429-14.857143T526.285714 245.714286q-54.285714 0-88.571428 24.571428t-34.285715 63.428572q0 14.857143 4.857143 27.428571t16.857143 23.714286 22.571429 18.857143 32 17.714285 34.571428 15.428572 40 15.714286q30.285714 11.428571 46.285715 18t43.428571 20 43.142857 24.285714 35.428572 28.571428 30.285714 36.285715 18 43.714285 7.428571 53.714286z" />
        </svg>
        <span class="link-text">Opportunities</span>
      </a>

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M847.7696 325.71392h-108.76928v-103.60832a40.96 40.96 0 0 0-40.96-40.96h-314.92096a40.96 40.96 0 0 0-40.96 40.96v103.60832h-108.81024a61.44 61.44 0 0 0-61.44 61.44v394.24a61.44 61.44 0 0 0 61.44 61.44h614.4a61.44 61.44 0 0 0 61.44-61.44v-394.24a61.39904 61.39904 0 0 0-61.41952-61.44z m-423.69024-62.62784h233.00096v62.64832h-233.00096v-62.64832z" />
        </svg>
        <span class="link-text">Projects</span>
      </a>

      <hr class="split-line">

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M810.666 128H213.334C166.396 128 128 166.396 128 213.334v597.332C128 857.604 166.396 896 213.334 896h597.332C857.604 896 896 857.604 896 810.666V213.334C896 166.396 857.604 128 810.666 128z m-384 597.334L213.334 512l59.728-59.728 153.604 153.604 324.272-324.272 59.728 59.73-384 384z" />
        </svg>
        <span class="link-text">Tasks</span>
      </a>

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M874.664 160H149.336C102.398 160 64 198.396 64 245.334v533.332C64 825.604 102.398 864 149.336 864h725.328C921.602 864 960 825.604 960 778.666V245.334C960 198.396 921.602 160 874.664 160zM864 341.334L512 576 160 341.334V256l352 234.666L864 256v85.334z" />
        </svg>
        <span class="link-text">My Tracked Emails</span>
      </a>

      <a class="side-link" href="#">
        <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M128 128h768a42.666667 42.666667 0 0 1 42.666667 42.666667v682.666666a42.666667 42.666667 0 0 1-42.666667 42.666667H128a42.666667 42.666667 0 0 1-42.666667-42.666667V170.666667a42.666667 42.666667 0 0 1 42.666667-42.666667z m170.666667 426.666667v170.666666h85.333333v-170.666666H298.666667z m170.666666-256v426.666666h85.333334V298.666667h-85.333334z m170.666667 128v298.666666h85.333333v-298.666666h-85.333333z" />
        </svg>
        <span class="link-text">Reports</span>
      </a>

      <hr class="split-line">

      <div class="side-link" href="#">
        <a class="setting-link" href="#">
          <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M368.558 164.905V27.307A27.307 27.307 0 0 1 395.865 0h204.8a27.307 27.307 0 0 1 27.306 27.307v127.48a374.627 374.627 0 0 1 118.648 64.055l106.55-61.515a27.307 27.307 0 0 1 37.301 9.995l102.4 177.356a27.307 27.307 0 0 1-9.994 37.301L880.75 440.95c4.41 23.005 6.718 46.762 6.718 71.051 0 19.845-1.543 39.335-4.506 58.348l124.136 71.673a27.307 27.307 0 0 1 9.994 37.3l-102.4 177.357a27.307 27.307 0 0 1-37.3 9.995l-120.832-69.769a374.886 374.886 0 0 1-128.588 72.308v127.481A27.307 27.307 0 0 1 600.665 1024h-204.8a27.307 27.307 0 0 1-27.307-27.307V859.095a375.521 375.521 0 0 1-102.414-63.31l-122.777 70.888a27.307 27.307 0 0 1-37.301-9.995L3.666 679.322a27.307 27.307 0 0 1 9.987-37.301l127.113-73.394A378.43 378.43 0 0 1 136.533 512c0-23.702 2.199-46.886 6.397-69.366L37.88 381.98a27.307 27.307 0 0 1-9.994-37.3l102.4-177.357a27.307 27.307 0 0 1 37.3-9.995l108.442 62.6a375.262 375.262 0 0 1 92.53-55.022zM512 696.32c101.8 0 184.32-82.52 184.32-184.32S613.8 327.68 512 327.68 327.68 410.2 327.68 512 410.2 696.32 512 696.32z" />
          </svg>
          <span class="link-text">Settings</span>
        </a>
        <a href="#">
          <button class="pink-btn">PURCHASE</button>
        </a>
      </div>
    </div>

    <div class="sidebar-footer">
      <a href="#">
        <img class="footer-img" src="assets/img/logo.svg" alt="logo">
      </a>
      <div class="d-flex justify-content-between align-items-center">
        <a class="footer-text" href="#">:copper</a>

        <div class="dropup">
          <i class="bi bi-three-dots dropdown-toggle" data-toggle="dropdown"></i>

          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Gmail & Mobile Apps</a>
            <a class="dropdown-item" href="#">Support</a>
            <a class="dropdown-item" href="#">Send Feedback</a>
            <a class="dropdown-item" href="#">Privacy Policy</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="logout-icon bi bi-box-arrow-in-right"></i>
              Log Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main id="main">
    <h2>Collapsed Sidebar</h2>
    <p>Click on the times icon to collapse the sidebar, and hamburger icon to expand it again.</p>
  </main>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- My JavaScript -->
  <script src="assets/js/script.js"></script>
</body>

</html>
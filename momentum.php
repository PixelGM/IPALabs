<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script defer src="theme.js"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
</head>
<!--                 CSS                   -->
<style>
  /* HUD */
  :root {
  font-size: 16px;
  font-family: 'Open Sans';
  --text-primary: #b6b6b6;
  --text-secondary: #ececec;
  --bg-primary: #23232e;
  --bg-secondary: #141418;
  --transition-speed: 600ms;
}

body {
  color: black;
  background-color: white;
  margin: 0;
  padding: 0;
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track {
  background: #1e1e24;
}

body::-webkit-scrollbar-thumb {
  background: #6649b8;
}

main {
  margin-left: 5rem;
  padding: 1rem;
}

.navbar {
  position: fixed;
  background-color: var(--bg-primary);
  transition: width 600ms ease;
  overflow: scroll;
}

.navbar-nav {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
}

.nav-item {
  width: 100%;
}

.nav-item:last-child {
  margin-top: auto;
}

.nav-link {
  display: flex;
  align-items: center;
  height: 5rem;
  color: var(--text-primary);
  text-decoration: none;
  filter: grayscale(100%) opacity(0.7);
  transition: var(--transition-speed);
}

.nav-link:hover {
  filter: grayscale(0%) opacity(1);
  background: var(--bg-secondary);
  color: var(--text-secondary);
}

.link-text {
  display: none;
  margin-left: 1rem;
}

.nav-link svg {
  width: 2rem;
  min-width: 2rem;
  margin: 0 1.5rem;
}

.fa-primary {
  color: #ff7eee;
}

.fa-secondary {
  color: #df49a6;
}

.fa-primary,
.fa-secondary {
  transition: var(--transition-speed);
}

.logo {
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 1rem;
  text-align: center;
  color: var(--text-secondary);
  background: var(--bg-secondary);
  font-size: 1.5rem;
  letter-spacing: 0.3ch;
  width: 100%;
}

.logo svg {
  transform: rotate(0deg);
  transition: var(--transition-speed);
}

.logo-text
{
  display: inline;
  position: absolute;
  left: -999px;
  transition: var(--transition-speed);
}

.navbar:hover .logo svg {
  transform: rotate(-180deg);
}

/* Small screens */
@media only screen and (max-width: 600px) {
  .navbar {
    bottom: 0;
    width: 100vw;
    height: 5rem;
  }

  .logo {
    display: none;
  }

  .navbar-nav {
    flex-direction: row;
  }

  .nav-link {
    justify-content: center;
  }

  main {
    margin: 0;
  }
}

/* Large screens */
@media only screen and (min-width: 600px) {
  .navbar {
    top: 0;
    width: 5rem;
    height: 100vh;
  }

  .navbar:hover {
    width: 16rem;
  }

  .navbar:hover .link-text {
    display: inline;
  }

  .navbar:hover .logo svg
  {
    margin-left: 11rem;
  }

  .navbar:hover .logo-text
  {
    left: 0px;
  }
}

.dark {
  --text-primary: #b6b6b6;
  --text-secondary: #ececec;
  --bg-primary: #23232e;
  --bg-secondary: #141418;
}

.light {
  --text-primary: #1f1f1f;
  --text-secondary: #000000;
  --bg-primary: #ffffff;
  --bg-secondary: #e4e4e4;
}

.solar {
  --text-primary: #576e75;
  --text-secondary: #35535c;
  --bg-primary: #fdf6e3;
  --bg-secondary: #f5e5b8;
}

.theme-icon {
  display: none;
}

.dark #darkIcon {
  display: block;
}

.light #lightIcon {
  display: block;
}

.solar #solarIcon {
  display: block;
}

/* Button CSS */
.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #3498db;
}
.btn3,.btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color: #fff;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}
</style>

<body>
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">IPALabs</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>

      <li class="nav-item">
        <a href="gaya.php" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="cat"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            class="svg-inline--fa fa-cat fa-w-16 fa-9x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M448 96h-64l-64-64v134.4a96 96 0 0 0 192 0V32zm-72 80a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm80 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm-165.41 16a204.07 204.07 0 0 0-34.59 2.89V272l-43.15-64.73a183.93 183.93 0 0 0-44.37 26.17L192 304l-60.94-30.47L128 272v-80a96.1 96.1 0 0 0-96-96 32 32 0 0 0 0 64 32 32 0 0 1 32 32v256a64.06 64.06 0 0 0 64 64h176a16 16 0 0 0 16-16v-16a32 32 0 0 0-32-32h-32l128-96v144a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V289.86a126.78 126.78 0 0 1-32 4.54c-61.81 0-113.52-44.05-125.41-102.4z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M376 144a16 16 0 1 0 16 16 16 16 0 0 0-16-16zm80 0a16 16 0 1 0 16 16 16 16 0 0 0-16-16zM131.06 273.53L192 304l-23.52-70.56a192.06 192.06 0 0 0-37.42 40.09zM256 272v-77.11a198.62 198.62 0 0 0-43.15 12.38z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">Gaya (F)</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="alien-monster"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            class="svg-inline--fa fa-alien-monster fa-w-18 fa-9x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M560,128H528a15.99954,15.99954,0,0,0-16,16v80H480V176a15.99954,15.99954,0,0,0-16-16H416V96h48a16.00079,16.00079,0,0,0,16-16V48a15.99954,15.99954,0,0,0-16-16H432a15.99954,15.99954,0,0,0-16,16V64H368a15.99954,15.99954,0,0,0-16,16v48H224V80a15.99954,15.99954,0,0,0-16-16H160V48a15.99954,15.99954,0,0,0-16-16H112A15.99954,15.99954,0,0,0,96,48V80a16.00079,16.00079,0,0,0,16,16h48v64H112a15.99954,15.99954,0,0,0-16,16v48H64V144a15.99954,15.99954,0,0,0-16-16H16A15.99954,15.99954,0,0,0,0,144V272a16.00079,16.00079,0,0,0,16,16H64v80a16.00079,16.00079,0,0,0,16,16h48v80a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V432a15.99954,15.99954,0,0,0-16-16H192V384H384v32H336a15.99954,15.99954,0,0,0-16,16v32a16.00079,16.00079,0,0,0,16,16h96a16.00079,16.00079,0,0,0,16-16V384h48a16.00079,16.00079,0,0,0,16-16V288h48a16.00079,16.00079,0,0,0,16-16V144A15.99954,15.99954,0,0,0,560,128ZM224,320H160V224h64Zm192,0H352V224h64Z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M160,320h64V224H160Zm192-96v96h64V224Z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">Momentum (p)</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="space-station-moon-alt"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            class="svg-inline--fa fa-space-station-moon-alt fa-w-16 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M501.70312,224H448V160H368V96h48V66.67383A246.86934,246.86934,0,0,0,256,8C119.03125,8,8,119.0332,8,256a250.017,250.017,0,0,0,1.72656,28.26562C81.19531,306.76953,165.47656,320,256,320s174.80469-13.23047,246.27344-35.73438A250.017,250.017,0,0,0,504,256,248.44936,248.44936,0,0,0,501.70312,224ZM192,240a80,80,0,1,1,80-80A80.00021,80.00021,0,0,1,192,240ZM384,343.13867A940.33806,940.33806,0,0,1,256,352c-87.34375,0-168.71094-11.46094-239.28906-31.73633C45.05859,426.01953,141.29688,504,256,504a247.45808,247.45808,0,0,0,192-91.0918V384H384Z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M256,320c-90.52344,0-174.80469-13.23047-246.27344-35.73438a246.11376,246.11376,0,0,0,6.98438,35.998C87.28906,340.53906,168.65625,352,256,352s168.71094-11.46094,239.28906-31.73633a246.11376,246.11376,0,0,0,6.98438-35.998C430.80469,306.76953,346.52344,320,256,320Zm-64-80a80,80,0,1,0-80-80A80.00021,80.00021,0,0,0,192,240Zm0-104a24,24,0,1,1-24,24A23.99993,23.99993,0,0,1,192,136Z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">Space</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.html" class="nav-link">
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="space-shuttle"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 512"
            class="svg-inline--fa fa-space-shuttle fa-w-20 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M32 416c0 35.35 21.49 64 48 64h16V352H32zm154.54-232h280.13L376 168C243 140.59 222.45 51.22 128 34.65V160h18.34a45.62 45.62 0 0 1 40.2 24zM32 96v64h64V32H80c-26.51 0-48 28.65-48 64zm114.34 256H128v125.35C222.45 460.78 243 371.41 376 344l90.67-16H186.54a45.62 45.62 0 0 1-40.2 24z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M592.6 208.24C559.73 192.84 515.78 184 472 184H186.54a45.62 45.62 0 0 0-40.2-24H32c-23.2 0-32 10-32 24v144c0 14 8.82 24 32 24h114.34a45.62 45.62 0 0 0 40.2-24H472c43.78 0 87.73-8.84 120.6-24.24C622.28 289.84 640 272 640 256s-17.72-33.84-47.4-47.76zM488 296a8 8 0 0 1-8-8v-64a8 8 0 0 1 8-8c31.91 0 31.94 80 0 80z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">To HomePage</span>
        </a>
      </li>

      <li class="nav-item" id="themeButton">
        <a href="#" class="nav-link">
          <svg
            class="theme-icon"
            id="lightIcon"
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="moon-stars"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            class="svg-inline--fa fa-moon-stars fa-w-16 fa-7x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <svg
            class="theme-icon"
            id="solarIcon"
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="sun"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            class="svg-inline--fa fa-sun fa-w-16 fa-7x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <svg
            class="theme-icon"
            id="darkIcon"
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="sunglasses"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            class="svg-inline--fa fa-sunglasses fa-w-18 fa-7x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M574.09 280.38L528.75 98.66a87.94 87.94 0 0 0-113.19-62.14l-15.25 5.08a16 16 0 0 0-10.12 20.25L395.25 77a16 16 0 0 0 20.22 10.13l13.19-4.39c10.87-3.63 23-3.57 33.15 1.73a39.59 39.59 0 0 1 20.38 25.81l38.47 153.83a276.7 276.7 0 0 0-81.22-12.47c-34.75 0-74 7-114.85 26.75h-73.18c-40.85-19.75-80.07-26.75-114.85-26.75a276.75 276.75 0 0 0-81.22 12.45l38.47-153.8a39.61 39.61 0 0 1 20.38-25.82c10.15-5.29 22.28-5.34 33.15-1.73l13.16 4.39A16 16 0 0 0 180.75 77l5.06-15.19a16 16 0 0 0-10.12-20.21l-15.25-5.08A87.95 87.95 0 0 0 47.25 98.65L1.91 280.38A75.35 75.35 0 0 0 0 295.86v70.25C0 429 51.59 480 115.19 480h37.12c60.28 0 110.38-45.94 114.88-105.37l2.93-38.63h35.76l2.93 38.63c4.5 59.43 54.6 105.37 114.88 105.37h37.12C524.41 480 576 429 576 366.13v-70.25a62.67 62.67 0 0 0-1.91-15.5zM203.38 369.8c-2 25.9-24.41 46.2-51.07 46.2h-37.12C87 416 64 393.63 64 366.11v-37.55a217.35 217.35 0 0 1 72.59-12.9 196.51 196.51 0 0 1 69.91 12.9zM512 366.13c0 27.5-23 49.87-51.19 49.87h-37.12c-26.69 0-49.1-20.3-51.07-46.2l-3.12-41.24a196.55 196.55 0 0 1 69.94-12.9A217.41 217.41 0 0 1 512 328.58z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M64.19 367.9c0-.61-.19-1.18-.19-1.8 0 27.53 23 49.9 51.19 49.9h37.12c26.66 0 49.1-20.3 51.07-46.2l3.12-41.24c-14-5.29-28.31-8.38-42.78-10.42zm404-50l-95.83 47.91.3 4c2 25.9 24.38 46.2 51.07 46.2h37.12C489 416 512 393.63 512 366.13v-37.55a227.76 227.76 0 0 0-43.85-10.66z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
          <span class="link-text">Themify</span>
        </a>
      </li>
    </ul>
  </nav>

  <main>
    <div>
      <h1>Momentum (p)</h1>
    </div>

    <div class="container" style="margin-top: 50px">
    
      <?php
      
        // If the submit button has been pressed
        if(isset($_POST['submit']))
        {
          // Check number values
          if(is_numeric($_POST['Massa']) && is_numeric($_POST['Kecepatan1']) && is_numeric($_POST['momentum']) && is_numeric($_POST['Kecepatan2']) && is_numeric($_POST['waktu']) && is_numeric($_POST['waktu']))
          {
            echo 'One variable has to be empty!';

            //Momentum (p) -> Need massa, kecepatan1. !Need  kecepatan2, momentum, waktu
          } elseif (is_numeric($_POST['Massa']) && is_numeric($_POST['Kecepatan1']) && !is_numeric($_POST['Kecepatan2']) && !is_numeric($_POST['momentum']) && !is_numeric($_POST['waktu'])) {

              $total = $_POST['Massa'] * $_POST['Kecepatan1'];
            

              echo "<h1> <strong>p</strong> = <mark><u><strong>{$total}<i> Ns</i></strong></u></h1></mark>";

            //Massa (M) -> Need momentum, kecepatan1. !Need kecepatan2, massa, waktu
          } elseif (is_numeric($_POST['momentum']) && is_numeric($_POST['Kecepatan1']) && !is_numeric($_POST['Kecepatan2']) && !is_numeric($_POST['Massa']) && !is_numeric($_POST['waktu'])) {

              $total = $_POST['momentum'] / $_POST['Kecepatan1'];
            
              echo "<h1> <strong>m</strong> = <mark><u><strong>{$total} kg</strong></u></h1></mark>";

            //Kecepatan(v) -> Need momentum, massa. !Need kecepatan2, kecepatan1, waktu
          } elseif (is_numeric($_POST['momentum']) && is_numeric($_POST['Massa']) && !is_numeric($_POST['Kecepatan2']) && !is_numeric($_POST['Kecepatan1']) && !is_numeric($_POST['waktu'])) {

              $total = $_POST['momentum'] / $_POST['Massa'];
            
              echo "<h1> <strong>v</strong> = <mark><u><strong>{$total} m/s</strong></u></h1></mark>";

            //Impuls (I) -> Need massa, kecepatan1, kecepatan2. !Need momentum, waktu
          } elseif (is_numeric($_POST['Massa']) && is_numeric($_POST['Kecepatan1']) && is_numeric($_POST['Kecepatan2']) && !is_numeric($_POST['momentum']) && !is_numeric($_POST['waktu'])) {

              $total = $_POST['Massa'] * ($_POST['Kecepatan2'] - $_POST['Kecepatan1']);
              
              echo "<h1> <strong>I</strong> = <mark><u><strong>{$total} Ns</strong></u></h1></mark>";

          } elseif (is_numeric($_POST['Massa']) && is_numeric($_POST['Kecepatan1']) && is_numeric($_POST['Kecepatan2']) && is_numeric($_POST['waktu']) && !is_numeric($_POST['momentum'])) {

              $total = $_POST['Massa'] * ($_POST['Kecepatan2'] - $_POST['Kecepatan1']) / $_POST['waktu'];
              
              echo "<h1> <strong>F</strong> = <mark><u><strong>{$total} N</strong></u></h1></mark>";

          }

          else {
            echo "Error Occured!";
          }

        }
      // end PHP. Code by webdevtrick.com
      ?>
        
        <!-- Calculator form by webdevtrick.com -->
        <form method="post" action="momentum.php" autocomplete="off">
            <label for="fname">p (Momentum)</label>
            <br>
            <input autocomplete="off" name="momentum" type="text" class="form-control" style="width: 150px; display: inline" /> Ns
            <br>
            <label for="fname">m (Massa)</label>
            <br>
            <input autocomplete="off" name="Massa" type="text" class="form-control" style="width: 150px; display: inline" /> kg
            <br>
            <label for="fname">v1 (Kecepatan 1)</label>
            <br>
            <input autocomplete="off" name="Kecepatan1" type="text" class="form-control" style="width: 150px; display: inline" /> m/s
            <br>
            <label for="fname">v2 (Kecepatan 2)</label>
            <br>
            <input autocomplete="off" name="Kecepatan2" type="text" class="form-control" style="width: 150px; display: inline" /> m/s
            <br>
            <label for="fname">t (Waktu)</label>
            <br>
            <input autocomplete="off" name="waktu" type="text" class="form-control" style="width: 150px; display: inline" /> s
            <br>
            <button name="submit" type="submit" class="btn btn2">Calculate</button>
            <!--<input name="submit" type="submit" value="Calculate" class="btn btn2" /> -->
        </form>
      
    </div>
  </main>
</body>
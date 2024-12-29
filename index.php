<!DOCTYPE html>
<html lang="en" data-bs-theme="">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CATS</title>
    <!-- bootsrap start -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- boostrap end -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />

    <style>
      .container1 {
  background-image: url('https://plus.unsplash.com/premium_photo-1677545182067-26ac518ef64f?q=80&w=1912&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
  background-size: cover;
  background-attachment: fixed;
  opacity: 0, 5;
}

.card-img-top {
  width: 100%;
  height: 200px;
  object-fit: cover; 
  object-position: center; 
}
.row {
  margin-bottom: 20px;
}

section {
  padding-top: 0;
  padding-bottom: 50px;
}

ul li a:hover {
  text-decoration: underline;
}
* {
  transition: 0.3s;
}

.navbar {
  transition: box-shadow 0.3s ease;
}

.navbar.scrolled {
  box-shadow: 0 4px 6px -4px rgba(0, 0, 0, 0.3);
}

.datetime {
  position: absolute;
  bottom: 20px;
  left: 20px;
  font-size: 18px;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px;
  border-radius: 5px;
}
.hero-section {
  position: relative;
}

@media (max-width: 768px) {
  .datetime {
    font-size: 14px;
    bottom: 10px;
    left: 10px;
  }
}

#gallery,
#article,
.footer img,
i {
  cursor: pointer;
}

.panah {
  text-align: right;
  padding: 10px;
  scroll-behavior: smooth;
}
    </style>


  </head>
  <body>
    <header>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg p-3 fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold fs-3" href="">KUC1NG</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link fs-5" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#article"
                  >Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="#galeri"
                  >Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 ms-0- ms-lg-3" href="login.php" target="_blank">Login</a>
              </li>

              <li class="nav-item dropdown">
                <button
                  class="btn nav-link fs-5 ms-0- ms-lg-3 dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i
                    class="bi-circle-half theme-icon-active"
                    data-theme-icon-active="bi-sun-fill"
                  ></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <button
                      id="light"
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="light"
                    >
                      <i
                        class="bi bi-sun-fill me-2 opacity-50"
                        data-theme-icon="bi-sun-fill"
                      ></i>
                      Light
                    </button>
                  </li>
                  <li>
                    <button
                      id="dark"
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="dark"
                    >
                      <i
                        class="bi bi-moon-fill me-2 opacity-50"
                        data-theme-icon="bi-moon-fill"
                      ></i>
                      Dark
                    </button>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
    </header>

    <!-- Hero Start -->
    <section id="home">
      <div class="container1">
        <div
          class="d-flex flex-column justify-content-center vh-100 align-items-center"
        >
          <h1 class="fw-bold text-center text-light">
            <br />
            Species of Cats
          </h1>

          <a href="#article" class="btn btn-dark fs-5 fw-bold mt-2">
            Here we go
          </a>
        </div>
      </div>
      <div id="datetime" class="datetime"></div>
    </section>
    <!-- Hero End -->

    <!-- Article Start -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 pt-5">Artikel</h1>
        <div class="row gy-5 justify-content-center pt-3 pb-3">
          <div class="col-12 col-lg-6">
            <img
              src="./img/cat5.jpg"
              alt=""
              class="img-fluid rounded-5"
            />
          </div>
          <div class="col-12 col-lg-6">
            <p style="text-align: justify">
             
              Kucing adalah hewan peliharaan yang sangat populer di seluruh dunia karena sifatnya yang lucu, penuh kasih sayang, dan cenderung mudah dirawat. Berasal dari keluarga Felidae, kucing memiliki tubuh yang fleksibel, cakar yang tajam, dan refleks yang sangat cepat. Sebagai hewan karnivora, mereka memiliki gigi dan cakar yang dirancang untuk berburu. 
              Kucing dikenal memiliki sifat yang independen, tetapi mereka juga bisa menjadi sangat penyayang dan setia pada pemiliknya. Kebanyakan kucing berkomunikasi dengan mengeong, mendengkur, atau mengibaskan ekornya untuk mengekspresikan berbagai emosi, mulai dari kegembiraan hingga ketidaknyamanan.
            </p>
            <p style="text-align: justify">
              Ada berbagai ras kucing, seperti Persia, Maine Coon, British Short Hair, dan Bengal, yang masing-masing memiliki karakteristik fisik dan temperamen yang berbeda.
              Selain sebagai teman yang setia, kucing juga dikenal sebagai hewan yang suka menjaga kebersihan dirinya sendiri dengan menjilati tubuhnya. Mereka memiliki sifat penasaran, dan banyak dari mereka suka bermain dengan objek kecil, mengejar cahaya, atau hanya menjelajahi lingkungan di sekitarnya.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Article End -->

    <!-- Gallery Start -->
    <section id="galeri">
      <div class="container" style="padding-top: 100px">
        <div class="title text-center mb-5">
          <h1 class="fw-bold">Galeri</h1>
          <p>Ada beberapa jenis kucing</p>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/persian.jpg"  
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Persian
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/bengal.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Bengal
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/mainecoon.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Maine Coon
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/bsh.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                 British Short Hair
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/scottish.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                 Scottish Fold
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <img
                src="./img/rex.jpeg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                 Devon Rex
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="schedule">
      <div class="container mt-4" style="padding-top: 100px">
        <div class="title text-center mb-5">
          <h1 class="fw-bold">Jadwal</h1>
        </div>
        <div class="row">
          <div class="col-md-3 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text text-center">
                  SENIN <hr>
                </p>
              </div>
              <p class="card-text text-center">
                Technopreneurship <br>
                08.40-10.20 | Kulino <br> <br> <hr>
              </p>
              <p class="card-text text-center">
                Pendidikan Kewarganegaraan <br>
                18.30-21.00 | Aula H7 <br> <br><br>
              </p>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text text-center">
                  SELASA <hr>
                </p>
              </div>
              <p class="card-text text-center">
                Basis Data <br>
                12.30-13.10 | D.3.H <br> <br> <hr>
              </p>
              <p class="card-text text-center">
                Kecerdasan Buatan <br>
                18.30-21.00 | H.4.11 <br><br><br>
              </p>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text text-center">
                  RABU <hr>
                </p>
              </div>
              <p class="card-text text-center">
                Pemrograman Berbasis Web <br>
                10.20-12.00 | D.2.J <br> <br> <hr>
              </p>
              <p class="card-text text-center">
                Kriptografi <br>
                12.30-15.00 | H.5.9 <br><br><br>
              </p>
            </div>
          </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-center">
                    KAMIS <hr>
                  </p>
                </div>
                <p class="card-text text-center">
                  Rekayasa Perangkat Lunak <br>
                  09.30-12.00 | H.4.5 <br> <br> <hr>
                </p>
                <p class="card-text text-center">
                  Basis Data <br>
                  12.30-14.10 | H.5.6 <br><br><br>
                </p>
              </div>
            </div>
            <br>
        </div>

        <div class="container mt-4 text-end " style="padding-top: 10px">
        <div class="row">
        <div class="col-md-3 mb-4">
          </div>
          <div class="col-md-3 mb-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text text-center">
                  JUM'AT <hr>
                </p>
              </div>
              <p class="card-text text-center">
                Sistem Operasi <br>
                07.00-09.30 | H.4.10 <br> <br> <hr>
              </p>
              <p class="card-text text-center">
                Probabilitas dan Statistika <br>
                09.30-12.00 | H.3.8 <br><br><br>
              </p>
            </div>
          </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-text text-center">
                    SABTU <hr>
                  </p>
                </div>
                <p class="card-text text-center">
                  FREE<br>
                  <br> <br> <hr>
                </p>
                <p class="card-text text-center">
                   <br>
                  TIDUR<br><br><br>
                </p>
              </div>
            </div>
            <br>
        </div>
        

      </div>
    </div>
  </div>
    </section>

    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 pt-5">Profil</h1>
        <div class="row gy-5 justify-content-center pt-3 pb-3">
          <div class="col-12 col-lg-6">
            <img
              src="./img/s.jpg"
              alt=""
              class="img-fluid rounded-5"
            />
          </div>
          <div class="col-12 col-lg-6">
            <p style="text-align: justify">
              <br>
              <Span class="">NIM : A11.2023.15021</Span> <br>
             <span class=""><b>Nama: Abdurrahman Bayu Ammar</b></span>
            </p>
            <p style="text-align: justify">
              Program Studi Teknik Informatika <br>
              Universitas Dian Nuswantoro
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery End -->

    <!-- Footer Start -->

    <footer class="footer text-center p-3 shadow-lg">
      Copyright © 2024 rienshii. All Rights Reserved
      <div>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-twitter-x"></i>
        <i class="bi bi-whatsapp"></i>
      </div>
    </footer>

    <!-- Footer End -->

    <!-- Js Bootstraps -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Js dark dan light mode start -->
    <script>
      /*!
       * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
       * Copyright 2011-2024 The Bootstrap Authors
       * Licensed under the Creative Commons Attribution 3.0 Unported License.
       */

      (() => {
        "use strict";

        const getStoredTheme = () => localStorage.getItem("theme");
        const setStoredTheme = (theme) => localStorage.setItem("theme", theme);

        const getPreferredTheme = () => {
          const storedTheme = getStoredTheme();
          if (storedTheme) {
            return storedTheme;
          }

          return window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        };

        const setTheme = (theme) => {
          if (theme === "auto") {
            document.documentElement.setAttribute(
              "data-bs-theme",
              window.matchMedia("(prefers-color-scheme: dark)").matches
                ? "dark"
                : "light"
            );
          } else {
            document.documentElement.setAttribute("data-bs-theme", theme);
          }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
          const themeSwitcher = document.querySelector("#bd-theme");

          if (!themeSwitcher) {
            return;
          }

          const themeSwitcherText = document.querySelector("#bd-theme-text");
          const activeThemeIcon = document.querySelector(".theme-icon-active");
          const btnToActive = document.querySelector(
            `[data-bs-theme-value="${theme}"]`
          );
          const iconOfActiveBtn =
            btnToActive.querySelector("i").dataset.themeIcon;

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((element) => {
              element.classList.remove("active");
              element.setAttribute("aria-pressed", "false");
            });

          btnToActive.classList.add("active");
          btnToActive.setAttribute("aria-pressed", "true");
          activeThemeIcon.classList.remove(
            activeThemeIcon.dataset.themeIconActive
          );
          activeThemeIcon.classList.add(iconOfActiveBtn);
          activeThemeIcon.dataset.iconActive = iconOfActiveBtn;
          const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
          themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

          if (focus) {
            themeSwitcher.focus();
          }
        };

        window
          .matchMedia("(prefers-color-scheme: dark)")
          .addEventListener("change", () => {
            const storedTheme = getStoredTheme();
            if (storedTheme !== "light" && storedTheme !== "dark") {
              setTheme(getPreferredTheme());
            }
          });

        window.addEventListener("DOMContentLoaded", () => {
          showActiveTheme(getPreferredTheme());

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((toggle) => {
              toggle.addEventListener("click", () => {
                const theme = toggle.getAttribute("data-bs-theme-value");
                setStoredTheme(theme);
                setTheme(theme);
                showActiveTheme(theme, true);
              });
            });
        });
      })();
    </script>
    <!-- Js dark dan light mode end -->

    <!-- shadow navbar start -->
    <script>
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 0);
      });
    </script>
    <!-- shadow navbar end -->

    <!-- Js real date time start -->
    <script>
      function updateTime() {
        const now = new Date();
        const options = {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
        };
        const formattedTime = now.toLocaleDateString("en-US", options);
        document.getElementById("datetime").textContent = formattedTime;
      }

      // Update the time every second
      setInterval(updateTime, 1000);
      updateTime(); // Initial call to display time immediately on load
    </script>
    <!-- Js real date time end -->
  </body>
</html>

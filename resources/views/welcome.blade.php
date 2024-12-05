<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>the news dispatch.</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- css custom -->
    <link rel="stylesheet" href="assets/main.css" />
  </head>
  <body>
    <header>
      <!-- Top Navigation Bar -->
      <div class="bg-light py-2">
        <div class="container d-flex justify-content-between align-items-center">
          <!-- Search Box -->
          <input type="text" class="form-control w-25" placeholder="Search" />

          <!-- Logo -->
          <h1 class="m-0 text-center" style="font-family: 'Georgia', serif">the news<br />dispatch.</h1>

          <!-- Buttons -->
          <div>
            <a href="admin" class="btn btn-outline-dark me-2">Sign in</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Subscribe
            </button>
          </div>
        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="emailInput" id="emailInput" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm" id="submitEmailBtn">Next</button>
            </div>
        </div>
        </div>
    </div>

      <!-- Main Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-top">
        <div class="container">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link active" href="#">LATEST</a></li>
            <li class="nav-item"><a class="nav-link" href="#">WORLD</a></li>
            <li class="nav-item"><a class="nav-link" href="#">SPORTS</a></li>
            <li class="nav-item"><a class="nav-link" href="#">CULTURE</a></li>
            <li class="nav-item"><a class="nav-link" href="#">WELLNESS</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ECONOMY</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container my-5">
      <!-- Podcast Episodes -->
      <section>
        <h3 class="mb-4">Podcast episodes</h3>
        <div class="row g-3">
          <div class="col-12">
            <div class="d-flex align-items-center p-3 border bg-light">
              <div class="me-3">
                <span class="fw-bold">Daily Minute: Reports from around the world</span><br />
                <small>Nicole Schulz</small>
              </div>
              <div class="ms-auto">22:10</div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Articles -->
      <section class="my-5">
        <div class="row g-3">
          <div class="col-md-4">
            <div class="p-3 border bg-light">
              <strong>NEWS</strong><br />
              Lost cat found the way back to her home<br />
              <small>Tom Jerry - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 border bg-light">
              <strong>CULTURE</strong><br />
              Best summer reads for your vacation<br />
              <small>David Brooks - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 border bg-light">
              <strong>SPORTS</strong><br />
              Footballer leads Argentina to victory<br />
              <small>Fred Ballad - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 border bg-light">
              <strong>NEWS</strong><br />
              Major cyberattack happened<br />
              <small>Peter Courtney - 13 June 2023</small>
            </div>
          </div>
        </div>
      </section>
      <hr />
      <!-- Food and Drink -->
      <section class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4>Food and Drink</h4>
          <a href="#" class="text-decoration-none">See all</a>
        </div>
        <div class="row g-3">
          <div class="col-md-3">
            <div class="p-3 border bg-light">
              <strong>DRINKS</strong><br />
              On a hunt for the best kombucha<br />
              <small>Jane Drews - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3 border bg-light">
              <strong>FOOD</strong><br />
              Shoreditch's best bodegas<br />
              <small>Toby Hardy - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3 border bg-light">
              <strong>FOOD</strong><br />
              Cooking on budget<br />
              <small>Tom Jerry - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="p-3 border bg-light">
              <strong>DRINKS</strong><br />
              Best alcohol-free cocktails<br />
              <small>Jane Drews - 13 June 2023</small>
            </div>
          </div>
        </div>
      </section>
      <hr />
      <!-- Editor's Picks -->
      <section class="my-5">
        <h4>Editor's picks</h4>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="p-3 border bg-light text-center">
              <h1>1</h1>
              <strong>NEWS</strong><br />
              People are happy and healthy everywhere<br />
              <small>Toby Hardy - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 border bg-light text-center">
              <h1>2</h1>
              <strong>SPORTS</strong><br />
              Hockey Championship is about to start<br />
              <small>Mike Sporty - 13 June 2023</small>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 border bg-light text-center">
              <h1>3</h1>
              <strong>CULTURE</strong><br />
              Finally a good theatre!<br />
              <small>Maria Drama - 13 June 2023</small>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="bg-light py-4">
      <div class="container text-center">
        <!-- Brand Name -->
        <h5 class="mb-3">the news dispatch.</h5>

        <!-- Social Media Icons -->
        <div class="mb-3">
          <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
        </div>

        <!-- Footer Links -->
        <div class="d-flex justify-content-center mb-3">
          <a href="#" class="text-decoration-none text-dark mx-2">About</a>
          <a href="#" class="text-decoration-none text-dark mx-2">Authors</a>
          <a href="#" class="text-decoration-none text-dark mx-2">Archive</a>
          <a href="#" class="text-decoration-none text-dark mx-2">Terms and Conditions</a>
          <a href="#" class="text-decoration-none text-dark mx-2">Cookie Policy</a>
        </div>

        <!-- Copyright -->
        <div class="text-muted">© Utzard News</div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        document.getElementById("submitEmailBtn").addEventListener("click", function () {
          const email = document.getElementById("emailInput").value;
          if (email) {
            alert("Terima kasih telah berlangganan situs berita kami.");
            $("#emailModal").modal("hide");
          } else {
            alert("Harap masukkan email yang valid.");
          }
        });
      </script>
  </body>
</html>

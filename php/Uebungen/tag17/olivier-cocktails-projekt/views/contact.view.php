<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/design/cocktail1.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50">Contact us</p>
</header>

<div class="bg-main p-5">
<main>
<div class="row">
      <div class="col-md-6">
        <h2 class ="color-2">Email</h2>
        <p class="text-light">Email: <a href="mailto:info@example.com">info@worldcocktails.com</a></p>

        <h2 class ="color-2">Phone</h2>
        <p class="text-light">Phone: <a href="tel:+491234567890">+491234567890</a></p>

        <h2  class="color-2">Address</h2>
        <p class="text-light">Musterstrasse 123,<br>
            82000, Munsterstadt, Bayern,<br>
           Germany</p>
      </div>

      <div class="col-md-6">
        <h2 class ="color-2">Contact Form</h2>
        <form method="post" action="contact.php">
          <div class="mb-3">
            <label for="name" class="form-label text-light">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required disabled>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label text-light">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required disabled>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label text-light">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4" required disabled></textarea>
          </div>

          <button type="submit" class="btn btn-info" disabled>Submit</button>
        </form>
      </div>
    </div>
</main>
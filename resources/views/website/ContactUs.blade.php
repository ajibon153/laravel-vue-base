<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach($pages as $page)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/page/{{$page->id}}">{{ $page->name }}</a>
        </li>
        @endforeach
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ContactUs">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form method="post" action="/ContactUs/sendMessage" class="container">
  @csrf
  <div class="form-group mb-3">
    <label for="name" class="form-label">Name : </label>
    <input type="text" class="form-control" id="name" name="name" >
  </div>
  <div class="form-group mb-3">
    <label for="email" class="form-label">Email address :</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group mb-3">
    <label for="Message" class="form-label">Message : </label>
    <textarea class="form-control" id="Message" name="Message" rows="3"></textarea>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
</div>
</body>
</html>
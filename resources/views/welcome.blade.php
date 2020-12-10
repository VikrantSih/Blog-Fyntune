<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-home.css" rel="stylesheet">
  <style type="text/css">
    .card , .card-body{
      background: #f6f6f6;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#eee;">
    <div class="container">
      <a class="navbar-brand" href="/" style="margin-left:50%;color: #000">Blog</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/" style="color: #000">Home

              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login" style="color: #000">Login</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8"><br><br><br><br>

        @foreach ($posts as $item)

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="/upload/{{ $item->images[0]}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $item->title}}</h2>
            <p class="card-text">{{ substr($item->description,0,210) }}</p>
            <a href="/view/{{ $item->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted By {{ $item->auther }} On {{ $item->created_at->format('d-M-Y') }}
          </div>
        </div>

        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          {{ $posts->links()}}
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
        </div><br><br>

        <!-- Categories Widget -->
        <div class="card my-4" style="margin-top: 10%">
          <h5 class="card-header">Filter By Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  @foreach ($categories as $item)
                  <li>
                    <a href="/category/{{ $item->id}}">{{ $item->name}}</a>
                  </li>
                  @endforeach


                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
  <script src="/vendor2/jquery/jquery.min.js"></script>
  <script src="/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

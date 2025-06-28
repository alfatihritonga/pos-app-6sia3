<nav class="navbar navbar-expand-lg bg-body-tertiary container">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('category.index') }}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('product.index') }}">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('transaction.index') }}">Transaction</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
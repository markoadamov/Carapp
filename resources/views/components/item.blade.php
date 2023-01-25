<div class="col">
    <div class="card shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="10px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="{{$car->imgurl}}" class="card-img-top" alt="..."></svg>
      <div class="card-body">
        <p class="card-text">{{$car->description}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
              <a href="/cars/{{$car->id}}">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read More</button>
              </a>
          </div>
          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>
@include('header')


<div class="container">
    <div class="carousel slide" data-ride="carousel" id="multi_item" data-intervale="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div id="banner-one" class="col-sm">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="1 slide">
                        <div class="card-body">
                            <h5 class="card-title">Stage</h5>
                            <p class="card-text">
                                Thales recrute un stagiaire en informatique pour du développement.
                            </p>
                            <a href="#" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                    <div id="banner-two" class="col-sm">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="2 slide">
                        <div class="card-body">
                            <h5 class="card-title">Stage</h5>
                            <p class="card-text">
                                Thales recrute un stagiaire en informatique pour du développement.
                            </p>
                            <a href="#" class="btn btn-primary">Aller voir</a>
                        </div>
                    </div>
                    <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="3 slide"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="4 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="5 slide"></div>
                    <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="6 slide"></div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



@include('footer')

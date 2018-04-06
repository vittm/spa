
@extends('layout')

@section('content')
<!-- Page Content -->
<div class="container detail">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4 font-elsie ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </h1>

    <!-- Author -->
    <div class="author" ><p><i class="fa fa-calendar-alt"></i> August 24, 2014</p><p ><i class="fa fa-user"></i> by <a href="">Super User</a></p></div>


    <!-- Post Content -->
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
    <blockquote class="col-md-offset-1 col-md-11  blockquote blockquote__detail">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <!-- <footer class="blockquote-footer">Someone famous in
        <cite title="Source Title">Source Title</cite>
      </footer> -->
    </blockquote>

    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

    <hr>
    <!-- Preview Image -->
    <img class="img-fluid rounded img-responsive" src="http://placehold.it/900x300" alt="">
    <p class="text-right top30"> Bảo Anh </p>
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4 pl0">

    <!-- Side Widget -->
    <div class="card my-4">
      <h2 class="card-header font-elsie ">Recent News</h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>Lorem ipsum dolor sit amet</h3>
                        <span><i class="fa fa-calendar-alt"></i> March 01, 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>Lorem ipsum dolor sit amet</h3>
                        <span><i class="fa fa-calendar-alt"></i> March 01, 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl0" data-aos="fade-right">
            <div class="col-lg-6 col-xs-12 pl0">
                <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
            </div>
        
            <div class="col-lg-6 col-xs-12 pl0 pr0">
                    <div class="blog-column">
                    <h3>Lorem ipsum dolor sit amet</h3>
                        <span><i class="fa fa-calendar-alt"></i> March 01, 2017</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.</p>
                </div>
            </div>
        </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection
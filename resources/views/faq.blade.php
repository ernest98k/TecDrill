@extends("layout.master")

@section("title","FAQ's")

@section('content')


<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">FAQ's</h1>
          <span class="color-text-a">Se tiver duvidas não hesite em contactarnos</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              FAQ's
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Single Star /-->
<section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">

      <style>input[type=text] {
    width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url(images/EG/lupa.png);
    background-position: 50px 50px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}</style>


      <div class="col-sm-12">
      <center><h3 class="title-d">Em que podemos ajudá-lo?</h3></center><br><span class="color-text-a"></span>
      <form class="" action="index.html" method="post">
        <center><input type="text" name="search" value="" placeholder="Pesquisar"></center>
      </form>
    </div>

      <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
        <div class="title-box-d"><br><br>
          <h3 class="title-d">1. Qual é o horário da empresa ?</h3>
          <span class="color-text-a">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </span>
        </div>

        <div class="title-box-d"><br><br>
          <h3 class="title-d">2. Quanto tempo demora uma encomenda a chegar ?</h3>
          <span class="color-text-a">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </span>
        </div>

        <div class="title-box-d"><br><br>
          <h3 class="title-d">3. O cliente pode pagar a prestações ?</h3>
          <span class="color-text-a">Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </span>
        </div>


      </div>
    </div>
  </div>
</section>



@endsection

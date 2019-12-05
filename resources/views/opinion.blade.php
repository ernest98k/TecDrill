@extends("layout.master")

@section('content')

<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Opiniões</h1>
          <span class="color-text-a">Deixe a sua opinião no formulário</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Opiniões
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
      <div class="col-sm-12">
        <div class="news-img-box">
          <img src="img/tec2.jpg" alt="" class="img-fluid">
        </div>
      </div>

      <div class="form-comments">
        <div class="title-box-d"><br><br>
          <h3 class="title-d"> Leave a Reply</h3>
        </div>
        <form class="form-a">
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="inputName">Enter name</label>
                <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *"
                  required>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="inputEmail1">Enter email</label>
                <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                  placeholder="Email *" required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="inputUrl">Enter website</label>
                <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="textMessage">Enter message</label>
                <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                  rows="8" required></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-a">Send Message</button>
            </div>
          </div>
        </form>
      </div>


      <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
        <div class="title-box-d"><br><br>
          <h3 class="title-d">Comments (4)</h3>
        </div>
        <div class="box-comments">
          <ul class="list-comments">
            <li>
              <div class="comment-avatar">
                <img src="img/author-2.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Emma Stone</h4>
                <span>18 Sep 2017</span>
                <p class="comment-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
            <li class="comment-children">
              <div class="comment-avatar">
                <img src="img/author-1.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Oliver Colmenares</h4>
                <span>18 Sep 2017</span>
                <p class="comment-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
            <li>
              <div class="comment-avatar">
                <img src="img/author-2.jpg" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author">Emma Stone</h4>
                <span>18 Sep 2017</span>
                <p class="comment-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                  ipsam temporibus maiores
                  quae natus libero optio.
                </p>
                <a href="3">Reply</a>
              </div>
            </li>
          </ul>
        </div>



      </div>
    </div>
  </div>
</section>



@endsection

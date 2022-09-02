@extends('components.corpo')
@section('corpo')

<body>
    @component('components.topo')@endcomponent

    @component('components.bannerInterno', ['tituloBanner' => $tituloBanner])@endcomponent

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 ftco-animate">
              <p>
                <img src="images/ximage_5.jpg.pagespeed.ic.23By3USd_v.jpg" alt="" class="img-fluid">
              </p>
              <h2 class="mb-3">It is a long established fact a reader be distracted</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam
                doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente
                officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis,
                iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
              <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
                doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam
                incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit.
                Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
              <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
              <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
                Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore
                voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui
                officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Life</a>
                  <a href="#" class="tag-cloud-link">Sport</a>
                  <a href="#" class="tag-cloud-link">Tech</a>
                  <a href="#" class="tag-cloud-link">Travel</a>
                </div>
              </div>
              <div class="pt-5 mt-5">
                <h3 class="mb-5">1 Comentario</h3>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/xperson_1.jpg.pagespeed.ic.-t4-hiuHmD.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">October 03, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                        ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                        impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>

                </ul>
    
                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Comente sobre a publicação</h3>
                  <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                      <label for="name">Nome *</label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="message">Mensagem</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Comentar" class="btn py-3 px-4 btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon icon-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>

              <div class="sidebar-box ftco-animate">
                <h3>Recent Blog</h3>
                @for ($i = 0; $i < 3; $i++)
              @component('Blog.apoio.miniCard')@endcomponent
              @endfor
              </div>
            </div>
          </div>
        </div>
      </section>

  </body>
@endsection
@extends('layouts.mahasiswa.main')

@section('container')
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-tittle">Instansi</h4>
      </div>
      <div class="form-group">
        <div class="input-icon">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-icon-addon">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <img src="{{ url('template/assets/img/cat.png') }}" class="card-img-top" alt="Gambar Instansi">
              <div class="card-body">
                <h5 class="card-title">Instansi ABC</h5>
                <div class="row mt-3">
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Lowongan</h6>
                      <p>10</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Terisi</h6>
                      <p>7</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Tersisa</h6>
                      <p>3</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <img src="{{ url('template/assets/img/cat.png') }}" class="card-img-top" alt="Gambar Instansi">
              <div class="card-body">
                <h5 class="card-title">Instansi ABC</h5>
                <div class="row mt-3">
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Lowongan</h6>
                      <p>10</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Terisi</h6>
                      <p>7</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card-text">
                      <h6>Jumlah Tersisa</h6>
                      <p>3</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Instansi</h4>
      </div>
      <div class="form-group">
        <div class="input-icon">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-icon-addon">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Nav Pills Without Border (Horizontal Tabs)</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd"
                    role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd"
                    role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd"
                    role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel"
                  aria-labelledby="pills-home-tab-nobd">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>

                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                    paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel"
                  aria-labelledby="pills-profile-tab-nobd">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.</p>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                    Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                    put her initial into the belt and made herself on the way.
                  </p>
                </div>
                <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel"
                  aria-labelledby="pills-contact-tab-nobd">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a
                    copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a
                    thousand times and everything that was left from its origin would be the word "and" and the Little
                    Blind Text should turn around and return to its own, safe country.</p>

                  <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                    Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                    they abused her for their</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Nav Pills Without Border (Horizontal Tabs)</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd"
                    role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd"
                    role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd"
                    role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel"
                  aria-labelledby="pills-home-tab-nobd">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>

                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                    paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel"
                  aria-labelledby="pills-profile-tab-nobd">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.</p>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                    Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                    put her initial into the belt and made herself on the way.
                  </p>
                </div>
                <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel"
                  aria-labelledby="pills-contact-tab-nobd">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a
                    copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a
                    thousand times and everything that was left from its origin would be the word "and" and the Little
                    Blind Text should turn around and return to its own, safe country.</p>

                  <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                    Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                    they abused her for their</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Nav Pills Without Border (Horizontal Tabs)</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd"
                    role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd"
                    role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd"
                    role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel"
                  aria-labelledby="pills-home-tab-nobd">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>

                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                    paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel"
                  aria-labelledby="pills-profile-tab-nobd">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.</p>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                    Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                    put her initial into the belt and made herself on the way.
                  </p>
                </div>
                <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel"
                  aria-labelledby="pills-contact-tab-nobd">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a
                    copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a
                    thousand times and everything that was left from its origin would be the word "and" and the Little
                    Blind Text should turn around and return to its own, safe country.</p>

                  <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                    Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                    they abused her for their</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Nav Pills Without Border (Horizontal Tabs)</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd"
                    role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd"
                    role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd"
                    role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Contact</a>
                </li>
              </ul>
              <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel"
                  aria-labelledby="pills-home-tab-nobd">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>

                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                    paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel"
                  aria-labelledby="pills-profile-tab-nobd">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.</p>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                    Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                    put her initial into the belt and made herself on the way.
                  </p>
                </div>
                <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel"
                  aria-labelledby="pills-contact-tab-nobd">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a
                    copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a
                    thousand times and everything that was left from its origin would be the word "and" and the Little
                    Blind Text should turn around and return to its own, safe country.</p>

                  <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy
                    Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where
                    they abused her for their</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection

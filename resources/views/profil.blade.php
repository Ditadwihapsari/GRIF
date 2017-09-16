@extends('template.templatevar')

@section('isi')
  <div class="container profil-guide">
          <div class="row">
            @foreach ($profil as $dataguide)
              <a href="profil/{{$dataguide->Nomor}}">
              <div class="detail">
                      <img  src="../{{$dataguide->foto }}">
                      <div class="detail">
                          <p class="text-bold">{{$dataguide->nama }}</p>
                          <p>{{$dataguide->tempat }}</p>
                          <p class="rego">{{$dataguide->harga }}/day</p>
                      </div>
                      <div class="detail">
                        <div class="rating">
                          <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                          <p class="cilik">Rated by {{$dataguide->Nomor }} users</p>
                        </div>
                        <a href="/confirm/{{$dataguide->Nomor}}" class="btn btn-green">Hire</a>
                      </div>
              </div>
              <h3>Bio</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h3>Skills</h3>
              <p>Fluently speaks indonesian, buginese, english</p>
              <h3>Contact</h3>
              <span class="fa-whatsapp"></span>
              <p>081294798327</p>
              <span class="fa-instagram"></span>
              <p>@esmeralda</p>
              <span class="fa-phone"></span>
              <p>08124935042</p>
            </a>
            @endforeach

          </div>
  </div>
@endsection

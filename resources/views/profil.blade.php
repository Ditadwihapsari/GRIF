@extends('template.templatevar')

@section('isi')
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
  <link href="../css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
  <link href="../css/search/style.css" rel="stylesheet">
  <div class="container">
          <div class="row">
            @foreach ($profil as $dataguide)
              <a href="profil/{{$dataguide->Nomor}}">
              <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
                  <div class="card">
                      <img  src="../{{$dataguide->foto }}">
                            <div class="col-sm-12 col-md-4 col-lg-4 mt-4">

                              <h5 class="text-bold">{{$dataguide->nama }}</h5>
                              <p>{{$dataguide->tempat }}</p>
                              <p class="rego">{{$dataguide->harga }}/day</p>
                            </div>
                          <div class="col-sm-12 col-md-4 col-lg-4 mt-4">
                              <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                <p class="cilik">Rated by {{$dataguide->Nomor }} users</p>
                              </div>
                            </div>

                      </div>
                  </div>
              </div>
            </a>
            @endforeach

          </div>
  </div>
@endsection

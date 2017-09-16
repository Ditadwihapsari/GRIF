@extends('template.template')

@section('isi')
  <div class="book-form">

    <h3>Pick your guide to make your trip experience become memorable</h3>
       <form action="#" method="post">


        <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="opt">
            <label for="sel1">Destination</label>
            <input type="text"  name="City" placeholder="Destination" required="" />
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="opt">
            <label for="sel1">Date</label>
            <input placeholder="DD/MM/YYY" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
        <div class="opt">
          <label for="sel1">Gender</label>
          <select class="form-control" id="sel1">
            <option>All</option>
            <option>Male</option>
            <option>Female</option>
          </select>
          <div class="w3ls-field submit-w3ls-field">
              <input type="submit" value="Submit">
          </div>
        </div>
        </div>

        </div>
            <div class="clearfix"> </div>
      </form>
    </div>
</div>
<!-- //Header -->

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
  <link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
  <link href="css/search/style.css" rel="stylesheet">
  <div class="container">
          <div class="row">
              @foreach ($fromDB as $dataguide)
                <a href="profil/{{$dataguide->Nomor}}">
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{$dataguide->foto }}">
                        <div class="card-block">

                            <div class="row">
                              <div class="col-md-8">
                                <h5 class="text-bold">{{$dataguide->nama }}</h5>
                                <p>{{$dataguide->tempat }}</p>
                                <p class="rego">{{$dataguide->harga }}/day</p>
                              </div>
                              <div class="col-md-4">
                                <div class="rating">
                                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                  <p class="cilik">Rated by {{$dataguide->Nomor }} users</p>
                                </div>
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

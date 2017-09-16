@extends('template.templatevar')

@section('isi')
  <div class="container profil-guide">
          <div class="row">
            @foreach ($confirm as $dataguide)

              <div class="detail">
                      <img  src="../{{$dataguide->foto }}">
                      <div class="detail">
                          <p class="text-bold">{{$dataguide->nama }}</p>
                          <p>{{$dataguide->tempat }}</p>

                      </div>

              </div>

            @endforeach

          </div>
  </div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                 <div class="mb-2">
                      <form class="form-inline" action="">
                      <label for="genre_filter">Filter By Category &nbsp;</label>
                       <select class="form-control" id="genre_filter" name="genre_id[]" >
                        <option value="">Select Category</option>
                       @if(count($genres))
                          @foreach($genres as $genre)
                             <option value="{{$genre->id}}"  {{(Request::query('genre_id') && Request::query('genre_id')==$genre->name)?'selected':''}}  >{{$genre->name}}</option>

                          @endforeach
                        @endif


                      </select>
                      
                      <span>&nbsp;</span>
                       <button type="button" onclick="search_dj()" class="btn btn-primary" >Search</button>
                       @if(Request::query('genre_id'))
                        <a class="btn btn-success" href="{{route('eventmanager.page.search')}}">Clear</a>
                       @endif
                    </form>
                  </div>
                        @if(count($genres))
                        <div class="album py-5 ">
      <div class="container">
                          <div class="row">
                            @foreach($genres as $genre)
                                @foreach ($genre->dj as $dj)
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card1">


                                    <div class="card1-content ordering">
                                    <a href="{{ route('eventmanager.page.profile.show', $dj->id) }} " <h1>{{ $dj->user->name}}</h1></a>
                                    <h2>{{ $dj->price }} </h2>
                                    <h3>{{ $genre->name }} </h3>



                                    </div>
                                   </div>
                          </div>

                          @endforeach
                          @endforeach
                          </div>
                        @else

                          <tr>
                            <td colspan="6" >No posts found</td>

                          </tr>
                        @endif
</div>
</div>





                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/orderBy.js') }}"></script>
</div>




@endsection

@section('javascript')
<script type="text/javascript">

  var query=<?php echo json_encode((object)Request::only(['genre_id','keyword'])); ?>;


  function search_dj(){

    Object.assign(query,{'genre_id': $('#genre_filter').val()});
    Object.assign(query,{'keyword': $('#keyword').val()});

    window.location.href="{{route('eventmanager.page.search')}}?"+$.param(query);

  }

</script>
@endsection

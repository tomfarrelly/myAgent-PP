<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between" >
                        <div>Posts</div>
                          <div><a href="{{route('eventmanager.events.create')}}" class="btn btn-success">Create Post</a></div>
                    </div>
                </div>

                <div class="card-body">
                 <div class="mb-2">
                      <form class="form-inline" action="">
                      <label for="venue_filter">Filter By Category &nbsp;</label>
                       <select class="form-control" id="venue_filter" name="venue">
                        <option value="">Select Category</option>
                       @if(count($venues))
                          @foreach($venues as $venue)
                             <option value="{{$venue->name}}"  {{(Request::query('venue') && Request::query('venue')==$venue->name)?'selected':''}}  >{{$venue->name}}</option>
                          @endforeach
                        @endif


                      </select>
                      <label for="keyword">&nbsp;&nbsp;</label>
                      <input type="text" class="form-control"  name="keyword" placeholder="Enter keyword" id="keyword">
                      <span>&nbsp;</span>
                       <button type="button" onclick="search_event()" class="btn btn-primary" >Search</button>
                       @if(Request::query('venue') || Request::query('keyword'))
                        <a class="btn btn-success" href="{{route('eventmanager.home')}}">Clear</a>
                       @endif

                    </form>
                  </div>



                  <form name="sortDj" id="sortDj" class="form-horizontal" >
                    <div class="control-group">
                      <label class="control-label"> Sort By </label>
                      <select name="sort" id="sort">
                        <option value="">Select</option>
                        <option value="djprice_lowest"> Low</option>
                        <option value="djprice_heighest"> High</option>
                      </select>
                    </div>

                  </form>



                        @if(count($futureevents))
                        <div class="album py-5 ">
      <div class="container">
                          <div class="row">
                                @foreach ($futureevents as $event)
                                  <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card1">
                                    <div class="card1-img" style="background-image:url({{ asset('uploads/event/'.$event->cover) }});">
                                      <div class="overlay">
                                        <div class="overlay-content">
                                          <a href="{{ route('eventmanager.events.show', $event->id) }}">View Event</a>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="card1-content ">

                                        <h1>{{ $event->name }}</h1>
                                        <h1>{{ $event->date }}</h1>
                                         <h2>{{$event->venue->name}}</h2>
                                         <div class="row">
                                         <div class="col-6">
                                        <p>{{ $event->description }}</p>
                                       </div>
                                       <div class="col-4">
                                       <p>{{ $event->user->name }}</p>
                                     </div>
                                   </div>




                                    </div>
                                   </div>
                          </div>

                          @endforeach
                          </div>
                        @else

                          <tr>
                            <td colspan="6" >No posts found</td>

                          </tr>
                        @endif
</div>
</div>


  @if(count($futureevents))
   {{$futureevents->appends(Request::query())->links()}}
  @endif


                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
<div class="col-4">
<h3>Past Events</h3>
</div>
</div>
<hr>
<br>
@endsection







@section('javascript')
<script type="text/javascript">
  var query=<?php echo json_encode((object)Request::only(['venue','keyword'])); ?>;


  function search_event(){

    Object.assign(query,{'venue': $('#venue_filter').val()});
    Object.assign(query,{'keyword': $('#keyword').val()});

    window.location.href="{{route('eventmanager.home')}}?"+$.param(query);

  }

  $(document).ready(function(){
     $("#sort").on('change', function(){
       this.form.submit();
     });
  });



</script>
@endsection

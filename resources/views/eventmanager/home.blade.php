
@extends('layouts.app')


@section('content')
@include('layouts.ehome1')

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

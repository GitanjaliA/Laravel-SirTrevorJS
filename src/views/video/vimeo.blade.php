@extends('sirtrevorjs::video.base')

@section('video')
  <iframe src="//player.vimeo.com/video/{!! $remote !!}?title=0&amp;byline=0" width="580" height="320" frameborder="0"
    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
@stop

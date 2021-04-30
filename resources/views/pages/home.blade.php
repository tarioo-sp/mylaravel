@php
  $title          = seo('page')->title ?? null ?: '';
  $description    = seo('page')->description ?? null ?: '';
  $og_title       = seo('page')->og_title ?? null ?: $title;
  $og_description = seo('page')->og_description ?? null ?: $description;
  $og_image       = seo('page')->og_image ?? null ?: '';
@endphp

@section('title', $title)
@section('description', $description)
@section('og_title', $og_title)
@section('og_description', $og_description)
@section('og_image', $og_image)

@extends('masterpage')

@section('css')
  <style>

  </style>
@endsection

@section('content')
  <div id="home">

  </div>
@endsection

@section('javascript')
  <script>

  </script>
@endsection

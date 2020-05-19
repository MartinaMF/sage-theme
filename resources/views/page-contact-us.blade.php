@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{the_title()}}</h1>
<h1>{{the_permalink()}}</h1>
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
    @include('partials.content-page')
  @endwhile
</div>
@endsection
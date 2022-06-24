@extends('home.layouts.master')

@section('loader')
    @include('home.sections.loader')
@endsection

@section('content')

<main>
    <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<div></div>
				<h1>۴۰۴</h1>
			</div>
			<h2>صفحه یافت نشد</h2>
			<p>صفحه مورد نظر شما ممکن است در صورت تغییر نام حذف شده باشد یا به طور موقت در دسترس نباشد.</p>
			<a class="secondary-btn" href="{{ route('home.index') }}">صفحه اصلی</a>
		</div>
	</div>
</main>
@endsection


@section('js')
    
@endsection

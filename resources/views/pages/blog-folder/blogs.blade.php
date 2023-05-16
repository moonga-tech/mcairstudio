@extends('layouts.app')
@section('page-title', 'Mcair-Studio-Tech | blogs')
@section('meta_keywords', '')
@section('meta_description', 'https://mcairstudiotech.art/blogs,')

@section('content')
<div class="container">
    <div class="blogs">
        <div class="text-center">
            <h4 class="text-success">{{session('msg')}}</h4>
        </div>        

        @foreach($data as $blogs)
        <div class="card shadow text-center" style="width: 40rem;">
            <div class="card-header">
                <h1 class="card-title font-weight-bold">{{$blogs->blog_title}}</h1>
            </div>
            <div class="card-wrapper">
                <a href="{{route('services')}}">
                    <img src="asset/images/code.jpg" class="card-img-top img-fluid" alt="...">
                </a>
                <div class="card-body">
                    <section>{!! $blogs->editor !!}</section>
                    <a href="/blogs/{$blogs->id}">
                        <button type="button" class="btn btn-secondary mr-2 btn-md">View More</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
<div id="transcroller-body" class="aos-all">
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>1</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>2</h3></div>
      </div>
      <div class="aos-item" data-aos="zoom-out-down">
        <div class="aos-item-inner"><h3>3</h3></div>
      </div>
      <div class="aos-item" data-aos="flip-down">
        <div class="aos-item-inner"><h3>4</h3></div>
      </div>
      <div class="aos-item" data-aos="flip-up">
        <div class="aos-item-inner"><h3>5</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>6</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-in">
        <div class="aos-item-inner"><h3>7</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>8</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-in">
        <div class="aos-item-inner"><h3>9</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>10</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>11</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>12</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-in">
        <div class="aos-item-inner"><h3>13</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>14</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-in">
        <div class="aos-item-inner"><h3>15</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>16</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-down">
        <div class="aos-item-inner"><h3>17</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>18</h3></div>
      </div>
      <div class="aos-item" data-aos="zoom-out">
        <div class="aos-item-inner"><h3>19</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-up">
        <div class="aos-item-inner"><h3>20</h3></div>
      </div>
      <div class="aos-item" data-aos="zoom-out">
        <div class="aos-item-inner"><h3>21</h3></div>
      </div>
      <div class="aos-item" data-aos="zoom-out-up">
        <div class="aos-item-inner"><h3>23</h3></div>
      </div>
      <div class="aos-item" data-aos="zoom-out-down">
        <div class="aos-item-inner"><h3>24</h3></div>
      </div>
      <div class="aos-item" data-aos="fade-in">
        <div class="aos-item-inner"><h3>25</h3></div>
      </div>
    </div>

@endsection
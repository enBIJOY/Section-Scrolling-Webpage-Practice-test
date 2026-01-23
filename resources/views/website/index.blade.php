@extends('website.layout.master')

@section('title','Home Page')
@section('content')

<div class="container">


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{('img/m1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m5.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m6.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m7.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{('img/m4.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning">First slide label</h2>
        <p>Some representative placeholder content for the first slide. Some representative for the first slide.<h4>Some representative placeholder</h4> content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section id="home"class="py-5">
    <h1>{{__('This is my Home Page')}}</h1>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi asperiores explicabo ut voluptatibus culpa molestiae alias cumque a sequi.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae natus officiis ipsam in, aliquam numquam id reiciendis quos, dolor totam fugit voluptates, voluptate fuga iusto. Illum ab consequatur delectus minima accusamus odit perspiciatis unde voluptatum repellendus eius voluptas tempora facilis voluptate rem vel, inventore amet rerum aliquam ratione sed doloremque.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, officiis?')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum delectus perspiciatis sit quibusdam eaque totam voluptatibus, officiis ut inventore asperiores!')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, officiis quo consequuntur necessitatibus voluptas laudantium atque voluptatem alias, voluptatum molestias recusandae dignissimos maxime eligendi mollitia inventore fugit odit? Consectetur officia, quas fugit numquam quod quis sunt accusamus maiores, eveniet accusantium ut praesentium perferendis, rem modi quibusdam ipsam quae repellat aperiam?')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
</section> 

<section id="about"class="py-5">
    <h1>{{__('About Us')}}</h1>
    <p>{{__('About section content...')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi asperiores explicabo ut voluptatibus culpa molestiae alias cumque a sequi.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae natus officiis ipsam in, aliquam numquam id reiciendis quos, dolor totam fugit voluptates, voluptate fuga iusto. Illum ab consequatur delectus minima accusamus odit perspiciatis unde voluptatum repellendus eius voluptas tempora facilis voluptate rem vel, inventore amet rerum aliquam ratione sed doloremque.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, officiis?')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
</section>

<section id="features"class="py-5">
    <h1>{{__('Features')}}</h1>
    <p>{{__('Features section content...')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi asperiores explicabo ut voluptatibus culpa molestiae alias cumque a sequi.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, officiis?')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae natus officiis ipsam in, aliquam numquam id reiciendis quos, dolor totam fugit voluptates, voluptate fuga iusto. Illum ab consequatur delectus minima accusamus odit perspiciatis unde voluptatum repellendus eius voluptas tempora facilis voluptate rem vel, inventore amet rerum aliquam ratione sed doloremque.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
</section>

<section id="contact"class="py-5">
    <h1>{{__('Contact Us')}}</h1>
    <p>{{__('Contact section content...')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi asperiores explicabo ut voluptatibus culpa molestiae alias cumque a sequi.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur natus sequi ipsum dolor vero debitis consequuntur quae placeat fuga cupiditate assumenda nam corrupti repudiandae aliquid tenetur quidem architecto autem ex, ipsa distinctio rerum commodi blanditiis! Repellendus facere optio aut saepe ex nostrum officiis, iusto odit inventore rerum eligendi delectus minus cupiditate dolore accusantium! Tenetur, fugiat iure quam nostrum id distinctio vel. Amet esse corrupti, libero assumenda autem qui culpa praesentium, quidem earum, eaque totam. Laboriosam mollitia dolores omnis officiis nisi quas corporis deserunt ipsa similique dignissimos eos dolorem fuga maiores accusantium architecto sunt dicta reiciendis sequi eius natus, pariatur aliquid.')}}</p>
    <p>{{__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, officiis?')}}</p>

    <div class="container col-md-6 mt-5 mb-4">

        <p class="mb-4" style="border-style: inset;">
            Stay updated with our latest news and offers.
        </p>

        <section class="newsletter mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center">
                        <h2 class="mb-4">SUBSCRIBE TO OUR NEWSLETTER</h2>
                        <form id="newsletterForm">
                            @csrf
                            <div class="input-group">
                                <input type="name" class="form-control" placeholder="Enter your name" id="name" required>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email" id="email" required>
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                            <p id="successMsg"></p>
                            <p id="errorMsg"></p>
                            <script>
                                $('#newsletterForm').submit(function(e){
                                    e.preventDefault(); // 🚫 page reload বন্ধ

                                    $.ajax({
                                        url: "{{ route('newsletter') }}",
                                        method: "POST",
                                        data: {
                                            name: $('#name').val(),
                                            email: $('#email').val(),
                                            _token: "{{ csrf_token() }}"
                                        },
                                        success: function(response){
                                            $('#successMsg').text(response.message);
                                            $('#errorMsg').text('');
                                            $('#newsletterForm')[0].reset();
                                        },
                                        error: function(xhr){
                                            $('#errorMsg').text(xhr.responseJSON.message);
                                            $('#successMsg').text('');
                                        }
                                    });
                                });
                            </script>
                    </div>
                </div>
            </div>
        </section>

    </div>

</section>

</div>


@endsection
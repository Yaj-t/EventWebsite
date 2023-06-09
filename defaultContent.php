<head>
  <style>
    .jumbotron {
      background-image: url(background1.jpg);
      background-size: cover;
      background-position: 50% 50%;
      color:white;
      text-shadow: 2px 2px 4px #000000;
      animation: slide 15s infinite;
    }

    @keyframes slide {
      25% {
        background-image: url(background2.jpg);
      }
      50% {
        background-image: url(background3.jpg);
      }
      75% {
        background-image: url(background4.jpg);
      }
      100% {
        background-image: url(background1.jpg);
      }
    }
  </style>
</head>
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="display-4">Discover Exciting Events</h1>
      <p class="lead">Find and join events happening near you!</p>
      <a id href="#browse-content" class="btn btn-primary">Browse Events</a>
    </div>
  </section>
<section class="container my-5">
    <h2 class="text-center mb-4">About Us</h2>
    <div class="row">
      <div class="col-md-6">
        <img src="eventPic.jpg" class="img-fluid" alt="About Us">
      </div>
      <div class="col-md-6">
        <h3>Who We Are</h3>
        <p>We are a group of passionate students dedicated to connecting people with amazing events. Our platform is designed to make it easy for event organizers to showcase their offerings and for individuals to discover and participate in exciting events happening in their area.</p>
        <h3>Our Mission</h3>
        <p>At GROUPR, our mission is to create a vibrant and inclusive community where people can explore, create, and share memorable experiences. We believe that events have the power to inspire, educate, and bring people together. Through our platform, we aim to foster a culture of discovery, creativity, and connection.</p>
      </div>
    </div>
  </section>
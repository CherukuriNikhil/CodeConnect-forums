<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>


    <!-- Header -->

    <?php
      include('partials/connect.php');
      include('partials/header.php');
    ?>

    <div class="container my-3 bg-dark rounded-5 py-2">
      <div class="text-center  text-light py-1 border border-light rounded-4 my-2">
          <h3>About Us</h3>
          <p class="px-5"> Welcome to CodeConnect - Your Ultimate Coding Community! Whether you are a beginner taking your first steps into the world of programming or a seasoned coder seeking to expand your skills, you've found the right place.At CodeConnect, we aim to be more than just a forum; we're a tight-knit community dedicated to fostering curiosity, creativity, and camaraderie among tech enthusiasts worldwide.</p>
      </div>
      <div class="row justify-content-around">
        <div class="card rounded-4 my-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center border border-primary rounded-4 py-2 bg-dark text-light ">Our Journey</h5>
            <p class="card-text text-center">Our journey began with a simple yet ambitious goal - to create a vibrant online space for tech enthusiasts, developers, and innovators from all walks of life.I've grown into a thriving community that fosters collaboration, learning, and inspiration.</p>
          </div>
        </div>
        <div class="card rounded-4 my-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center border border-primary rounded-4 py-2 bg-dark text-light ">Features and Benefits</h5>
            <p class="card-text text-center">Ask and answer questions, exchange coding tips, and seek solutions to programming challenges from a diverse community of coders. Experiment with code, share snippets, and receive constructive feedback on your projects in a safe and supportive environment.</p>
          </div>
        </div>

        <div class="card rounded-4 my-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center border border-primary rounded-4 py-2 bg-dark text-light ">Join Our Journey</h5>
            <p class="card-text text-center">We invite you to be part of the CodeConnect community, where you can shape your tech destiny, forge lasting friendships, and make a positive impact on the world through the power of code. Together, let's unlock limitless possibilities and inspire the next generation of tech innovators.</p>
          </div>
        </div>
        

        <div class="card rounded-4 my-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center border border-primary rounded-4 py-2 bg-dark text-light ">Values</h5>
            <p class="card-text text-center">We value openness, respect, and a positive learning environment. We believe in the power of community-driven support to nurture aspiring coders and empower experienced professionals.</p>
          </div>
        </div>
        <div class="card rounded-4 my-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center border border-primary rounded-4 py-2 bg-dark text-light ">Mission</h5>
            <p class="card-text text-center">Our mission at CodeConnect is to create a collaborative and inclusive platform where coders and tech enthusiasts can connect, share knowledge, and grow together.</p>
          </div>
        </div>
      </div>
    </div>

    <?php
     include('partials/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>


</body>

</html>
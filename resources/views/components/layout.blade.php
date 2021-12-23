<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

  <title>Laravel From Scratch Blog</title>
</head>

<body>
  <section class="px-6 py-4">
    <nav class="md:flex md:justify-between md:items-center">
      <div>
        <a href="#">
          <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16" />
        </a>
      </div>
      <div class="mt-8 lg:mt-0">
        <a href="/" class="text-xs font-bold uppercase">Home Page</a>
        <a href="#" class="
              bg-blue-500
              ml-3
              rounded-full
              text-xs
              font-semibold
              text-white
              uppercase
              py-3
              px-5
            ">Subscribe for Updates</a>
      </div>
    </nav>
    {{ $slot }}
    <footer class="
          bg-gray-100
          border border-black border-opacity-5
          rounded-xl
          text-center
          py-16
          px-10
          mt-16
        ">
      <img src="/images/lary-newsletter-icon.png" alt="Newsletter Icon of Lary" class="mx-auto" style="width: 145px" />
      <h5 class="text-3xl">Stay in touch with the latest posts</h5>
      <p class="text-sm">Promise to keep the inbox clean. No bugs</p>
      <div class="mt-10">
        <div class="
              relative
              inline-block
              lg:bg-gray-200
              mx-auto
              rounded-full
            ">
          <form action="#" method="post" class="lg:flex text-sm">
            <div class="lg:py-3 lg:px-5 inline-flex items-center">
              <label for="email" class="hidden lg:tw-inline-block">
                <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
              </label>

              <input id="email" type="text" placeholder="Your email address"
                class="lg:bg-transparent pl-4 focus-within:outline-none" />
            </div>

            <button type="submit" class="
                  bg-blue-500
                  mt-4
                  lg:mt-0
                  lg:ml-3
                  hover:bg-blue-600
                  rounded-full
                  text-xs
                  font-semibold
                  text-white
                  uppercase
                  py-3
                  px-8
                ">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </footer>
  </section>
</body>

</html>
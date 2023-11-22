<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Toko Bunga Lokal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body style="background: lightgray">
  <div class="bg-white">
    <header>
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Beranda</a>
          <a href="/produk" class="text-sm font-semibold leading-6 text-gray-500">Produk Kami</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="/login"
            class="rounded-md bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
        </div>
      </nav>
      <!-- Mobile menu, show/hide based on menu open state. -->
      <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
          class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="/"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Beranda</a>
                <a href="/produk"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-500 hover:bg-gray-50">Produk
                  Kami</a>
              </div>
              <div class="py-6">
                <a href="/login"
                  class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                  in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 bg-dark">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Cek Produk dari Kami</h2>
      <p class="text-sm tracking-tight text-gray-900">Lihat produk yang kami punya</p>

      <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($flowers as $flower)
        <div class="group relative">
          <div
            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            @if ($flower->image)
            <img src="{{ asset('/storage/' . $flower->image) }}" alt="Uploaded Image"
              class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            @else
              <div class="h-full w-full flex flex-col items-center justify-center">
                <svg height="48" viewBox="0 -960 960 960" width="48" class="fill-current text-gray-500">
                  <path d="M793-272 672-393q38-23 80.5-35t87.5-12q0 45-12 87.5T793-272Zm-120 52-53-52q-21 25-37.5 54T555-155q35-11 64-27t54-38Zm194 108-43 43-108-108q-49 45-109.602 71Q545.796-80 480-80q0-65.796 26-126.398Q532-267 577-316l-68-68q-7 2-14 3t-15 1q-37 0-66-21.5T370.556-458q-5.556 0-12.056.5-6.5.5-12.5.5-48 0-82-34t-34-82q0-18.097 6-34.548Q242-624 253-639L85-807l43-43 739 738ZM480-920q37 0 66 21.5t43 56.5q6 0 12.5-.5t12.5-.5q47.84 0 81.42 34.063Q729-774.873 729-727q0 21-8 40.5T699-650q14.444 17 22.222 36.5Q729-594 729-573q0 48-33.5 82T614-457h-6L447-618l-69-68q6-17 16.5-31.5T420-743l-42.378-29.815Q371-778 363-780.5t-17-2.5q-12.5 0-23.75 5.5T303-762l-43-42q20-23 49.989-31.5Q339.977-844 371-842q14-35 43-56.5t66-21.5Zm134.2 403q22.8 0 39.3-16.425Q670-549.85 670-572.967q0-17.033-9-29.533T637-623l-47-23q-2 14-6 26.5t-10.042 23.618q-6.041 11.117-14.5 21Q551-565 540-557l42.378 29.815Q589-522 596.8-519.5q7.8 2.5 17.4 2.5ZM590-654l47-23q15-8 23.5-21.241t8.5-28.889q0-22.87-15.889-39.37Q637.222-783 614-783q-9 0-16.667 2.5Q589.667-778 582-773l-44 30q11 8 20 17.6 9 9.6 15 20.4 7 11 11 23.5t6 27.5Zm-159-94q14-6 26.5-9t22.5-3q10 0 22.5 3t26.5 9l7-62q2-21-16-35.5T480.5-860q-21.5 0-40 14.773Q422-830.455 424-810l7 62Zm49.5 143q18.5 0 31.5-13.5t13-32q0-18.5-12.938-31.5-12.937-13-32.062-13-18 0-31.5 12.938Q435-669.125 435-650q0 18 13.5 31.5t32 13.5Zm93.5 9Zm-1-109Zm-93-55Zm0 680q0-70-30-135t-80-115q-50-50-115-80t-135-30q0 70 30 135t80 115q50 50 115 80t135 30Zm-75-75q-80-26-133-79t-79-133q80 26 133 79.5T405-155Zm150 0Zm-150 0Z"/>
                </svg>
                <p class="text-gray-500 text-sm mt-4">
                  <span class="font-bold">Gambar</span>
                  <span class="italic">tidak ditemukan</span>
                </p>
              </div>
            @endif
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-base text-indigo-600 font-bold">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ $flower-> name}}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ $flower-> category}}</p>
            </div>
            <p class="text-base font-bold text-gray-900">Rp. {{ $flower-> price}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</body>

</html>
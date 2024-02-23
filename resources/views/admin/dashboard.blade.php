<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"  content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Toko Bunga Lokal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=pink&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reports</a>
            </div>
          </div>
        </div>
        <div class="md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="relative rounded-full bg-gray-900 p-1 text-sm text-gray-400 rounded-md px-3 py-2 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                Logout
              </button>
            </form>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
  <main class="m-8 relative">
    <a href="{{ route('admin.create') }}" class="cursor-pointer rounded-md bg-pink-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600 flex">
      <span class="material-symbols-outlined">add_box</span>
      <span class="ml-2">Tambah Barang</span>
    </a>

  <div class="mt-8">
    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden">
    <div style="background-position: 10px 10px;" class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] "></div>
    <div class="relative rounded-xl overflow-auto">
      <div class="shadow-sm overflow-hidden my-8">
        <table class="border-collapse table-fixed w-full text-sm">
          <thead>
            <tr>
              <th
                class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">
                Gambar</th>
              <th
                class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">
                Nama</th>
              <th
                class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                Harga</th>
              <th
                class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                Stok</th>
              <th
                class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                Action</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($flowers as $flower)
            <tr>
              <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                @if ($flower->image)
                  <img src="{{ $flower->image }}" alt="Uploaded Image"
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                @else
                <div class="h-full w-full flex flex-col items-center justify-center bg-gray-50 p-2">
                  <svg height="48" viewBox="0 -960 960 960" width="48" class="fill-current text-gray-300">
                    <path d="M793-272 672-393q38-23 80.5-35t87.5-12q0 45-12 87.5T793-272Zm-120 52-53-52q-21 25-37.5 54T555-155q35-11 64-27t54-38Zm194 108-43 43-108-108q-49 45-109.602 71Q545.796-80 480-80q0-65.796 26-126.398Q532-267 577-316l-68-68q-7 2-14 3t-15 1q-37 0-66-21.5T370.556-458q-5.556 0-12.056.5-6.5.5-12.5.5-48 0-82-34t-34-82q0-18.097 6-34.548Q242-624 253-639L85-807l43-43 739 738ZM480-920q37 0 66 21.5t43 56.5q6 0 12.5-.5t12.5-.5q47.84 0 81.42 34.063Q729-774.873 729-727q0 21-8 40.5T699-650q14.444 17 22.222 36.5Q729-594 729-573q0 48-33.5 82T614-457h-6L447-618l-69-68q6-17 16.5-31.5T420-743l-42.378-29.815Q371-778 363-780.5t-17-2.5q-12.5 0-23.75 5.5T303-762l-43-42q20-23 49.989-31.5Q339.977-844 371-842q14-35 43-56.5t66-21.5Zm134.2 403q22.8 0 39.3-16.425Q670-549.85 670-572.967q0-17.033-9-29.533T637-623l-47-23q-2 14-6 26.5t-10.042 23.618q-6.041 11.117-14.5 21Q551-565 540-557l42.378 29.815Q589-522 596.8-519.5q7.8 2.5 17.4 2.5ZM590-654l47-23q15-8 23.5-21.241t8.5-28.889q0-22.87-15.889-39.37Q637.222-783 614-783q-9 0-16.667 2.5Q589.667-778 582-773l-44 30q11 8 20 17.6 9 9.6 15 20.4 7 11 11 23.5t6 27.5Zm-159-94q14-6 26.5-9t22.5-3q10 0 22.5 3t26.5 9l7-62q2-21-16-35.5T480.5-860q-21.5 0-40 14.773Q422-830.455 424-810l7 62Zm49.5 143q18.5 0 31.5-13.5t13-32q0-18.5-12.938-31.5-12.937-13-32.062-13-18 0-31.5 12.938Q435-669.125 435-650q0 18 13.5 31.5t32 13.5Zm93.5 9Zm-1-109Zm-93-55Zm0 680q0-70-30-135t-80-115q-50-50-115-80t-135-30q0 70 30 135t80 115q50 50 115 80t135 30Zm-75-75q-80-26-133-79t-79-133q80 26 133 79.5T405-155Zm150 0Zm-150 0Z"/>
                  </svg>
                  <p class="text-gray-300 text-sm mt-4">
                    <span class="font-bold">Gambar</span>
                    <span class="italic">tidak ditemukan</span>
                  </p>
                </div>
                @endif
              </td>
              <td class="border-b border-slate-100 p-4 text-slate-500">
                {{ $flower->name }}</td>
              <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                {{ $flower->price }}</td>
              <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                {{ $flower->stock }}</td>
              <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                <form action="{{ route('admin.destroy', $flower->id) }}" method="post">
                  <a href="{{ route('admin.edit', $flower->id) }}"
                    class="rounded-md bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 cursor-pointer
                                  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">Edit</a>
                
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="rounded-md bg-rose-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-rose-500 cursor-pointer
                                  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-600">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl"></div>
  </div>
</div>
</main>
</body>

</html>
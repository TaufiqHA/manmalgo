@extends('layouts.main')

@section('main')

@push('style')
<style>
  body {
      font-family: 'Poppins', sans-serif;
      color: #1f2937;
  }
  .reading-progress {
      position: fixed;
      top: 0;
      left: 0;
      height: 3px;
      background-color: #3b82f6;
      z-index: 9999;
      width: 0%;
      transition: width 0.2s ease;
  }
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }
  .custom-checkbox {
      appearance: none;
      width: 18px;
      height: 18px;
      border: 2px solid #d1d5db;
      border-radius: 4px;
      position: relative;
      cursor: pointer;
      transition: all 0.2s;
  }
  .custom-checkbox:checked {
      background-color: #3b82f6;
      border-color: #3b82f6;
  }
  .custom-checkbox:checked::after {
      content: '';
      position: absolute;
      top: 3px;
      left: 6px;
      width: 4px;
      height: 8px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
  }
</style>
@endpush

<main class="container mx-auto px-4 py-30 flex flex-col lg:flex-row gap-8">
  <!-- Main Content -->
  <div class="lg:w-3/4">
      <!-- Featured Story -->
      <section class="mb-10 bg-white rounded-lg shadow-sm overflow-hidden">
          <div class="relative">
              <img src="https://public.readdy.ai/ai/img_res/627117893ed4dc6d47e6749d1ddf9d56.jpg" alt="Climate Summit" class="w-full h-[400px] object-cover object-top">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white">
                  <span class="inline-block px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full mb-3">Breaking News</span>
                  <h1 class="headline text-3xl md:text-4xl font-bold mb-3">Global Climate Summit Reaches Historic Agreement on Emissions</h1>
                  <p class="text-gray-200 mb-4 max-w-3xl">World leaders have reached a landmark agreement at the 2025 Climate Summit, pledging to reduce carbon emissions by 50% before 2035 in what experts are calling a "turning point" for global climate action.</p>
                  <div class="flex items-center space-x-4">
                      <img src="https://public.readdy.ai/ai/img_res/9becce01462bc9f60ff2d651e466e01b.jpg" alt="Reporter" class="w-10 h-10 rounded-full object-cover">
                      <div>
                          <p class="font-medium">By Eleanor Richardson</p>
                          <p class="text-sm text-gray-300">April 8, 2025 • 8 min read</p>
                      </div>
                      <div class="ml-auto flex space-x-2">
                          <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition !rounded-button">
                              <i class="ri-bookmark-line text-white"></i>
                          </button>
                          <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition !rounded-button">
                              <i class="ri-share-line text-white"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Category Filters -->
      <div class="flex items-center justify-between mb-6">
          <h2 class="text-xl font-bold">Latest News</h2>
          <div class="bg-white rounded-full p-1 shadow-sm inline-flex">
              <button class="px-4 py-2 text-sm font-medium bg-green-500 text-white rounded-full !rounded-button whitespace-nowrap">All</button>
              <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-full !rounded-button whitespace-nowrap">Politics</button>
              <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-full !rounded-button whitespace-nowrap">Tech</button>
              <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-full !rounded-button whitespace-nowrap">Business</button>
          </div>
      </div>

      <!-- News Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
          <!-- News Card 1 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/f732542bd31dc5a224f5cb4c26c1677f.jpg" alt="Tech News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">Technology</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">Tech Giant Unveils Revolutionary AI Assistant for Healthcare</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">The new AI system promises to transform patient care by providing real-time health monitoring and personalized treatment recommendations to medical professionals.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 8, 2025</span>
                      <span>4 min read</span>
                  </div>
              </div>
          </article>
          <!-- News Card 2 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/036982cbbf878d4fb032b4da02256363.jpg" alt="Politics News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-red-500 text-white text-xs font-semibold rounded-full">Politics</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">Presidential Candidates Face Off in First Debate of Election Season</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">The highly anticipated debate covered key issues including economic policy, healthcare reform, and international relations as candidates made their case to voters.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 7, 2025</span>
                      <span>6 min read</span>
                  </div>
              </div>
          </article>
          <!-- News Card 3 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/c771bb5815d104b7437272989442389a.jpg" alt="Business News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">Business</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">Global Markets Rally as Central Banks Announce Coordinated Policy Shift</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">Stock indices worldwide surged following the announcement of synchronized interest rate adjustments aimed at stabilizing economic growth amid inflation concerns.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 7, 2025</span>
                      <span>5 min read</span>
                  </div>
              </div>
          </article>
          <!-- News Card 4 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/4024f70c1469f861ba0e62c795cd8299.jpg" alt="Sports News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-yellow-500 text-white text-xs font-semibold rounded-full">Sports</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">Underdog Team Stuns Champions in Dramatic Cup Final Upset</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">In a match that will go down in sporting history, the underdogs overcame a two-goal deficit to claim their first major trophy in over three decades.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 6, 2025</span>
                      <span>4 min read</span>
                  </div>
              </div>
          </article>
          <!-- News Card 5 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/0ee8fc9b6f31f43b23c1a9426452890d.jpg" alt="Health News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-purple-500 text-white text-xs font-semibold rounded-full">Health</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">Breakthrough Treatment Shows Promise in Early Cancer Detection</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">Researchers have developed a new blood test that can detect multiple types of cancer at early stages with unprecedented accuracy, potentially revolutionizing cancer screening.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 6, 2025</span>
                      <span>5 min read</span>
                  </div>
              </div>
          </article>
          <!-- News Card 6 -->
          <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
              <div class="relative">
                  <img src="https://public.readdy.ai/ai/img_res/e5fbd7096234245597fe2aab91e959f8.jpg" alt="Entertainment News" class="w-full h-48 object-cover object-top">
                  <span class="absolute top-3 left-3 px-3 py-1 bg-pink-500 text-white text-xs font-semibold rounded-full">Entertainment</span>
              </div>
              <div class="p-4">
                  <h3 class="headline text-lg font-bold mb-2 line-clamp-2">International Film Festival Opens with Star-Studded Premiere</h3>
                  <p class="text-gray-600 text-sm mb-3 line-clamp-3">The prestigious event kicked off with the world premiere of an eagerly anticipated drama featuring an ensemble cast of award-winning actors and actresses.</p>
                  <div class="flex items-center justify-between text-xs text-gray-500">
                      <span>April 5, 2025</span>
                      <span>3 min read</span>
                  </div>
              </div>
          </article>
      </div>

      <!-- Load More Button -->
      <div class="text-center mb-10">
          <button class="px-6 py-3 bg-green-500 text-white font-medium rounded-lg hover:bg-green-500/90 transition shadow-sm !rounded-button whitespace-nowrap">
              Load More News
          </button>
      </div>
  </div>

  <!-- Sidebar -->
  <aside class="lg:w-1/4 space-y-8">
      <!-- Trending News -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4 flex items-center">
              <div class="w-5 h-5 flex items-center justify-center mr-2 text-green-500">
                  <i class="ri-fire-line"></i>
              </div>
              Trending Now
          </h3>
          <div class="space-y-4">
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">01</span>
                  <p class="headline font-medium text-sm">Space Tourism Company Announces First Commercial Flight to Lunar Orbit</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">02</span>
                  <p class="headline font-medium text-sm">Major Cryptocurrency Exchange Faces Regulatory Scrutiny After Security Breach</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">03</span>
                  <p class="headline font-medium text-sm">Renowned Chef Opens Innovative Restaurant Focusing on Sustainable Cuisine</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">04</span>
                  <p class="headline font-medium text-sm">Tech Company Unveils Next-Generation Foldable Smartphone with Holographic Display</p>
              </div>
              <div class="flex items-start gap-3">
                  <span class="text-xl font-bold text-green-500">05</span>
                  <p class="headline font-medium text-sm">International Music Festival Announces Lineup Featuring Legendary Performers</p>
              </div>
          </div>
      </div>

      <!-- Popular Categories -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4">Popular Categories</h3>
          <div class="flex flex-wrap gap-2">
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Politics</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Technology</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Business</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Sports</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Health</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Entertainment</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Science</a>
              <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">Travel</a>
          </div>
      </div>

      <!-- Social Media -->
      <div class="bg-white rounded-lg shadow-sm p-5">
          <h3 class="text-lg font-bold mb-4">Follow Us</h3>
          <div class="flex justify-around">
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition">
                  <i class="ri-facebook-fill"></i>
              </a>
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-sky-500 text-white hover:bg-sky-600 transition">
                  <i class="ri-twitter-x-fill"></i>
              </a>
              <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-pink-600 text-white hover:bg-pink-700 transition">
                  <i class="ri-instagram-fill"></i>
              </a>
          </div>
      </div>
  </aside>
</main>

@endsection
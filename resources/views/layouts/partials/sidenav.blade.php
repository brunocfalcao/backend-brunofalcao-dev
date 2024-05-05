  <!-- Static sidebar for desktop -->
  <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-primary px-6">
          <div class="flex h-16 shrink-0 items-center mt-10">
              <img class="h-8 w-auto" src="{{ Vite::image('mastering-nova-mascot.svg') }}" alt="mastering nova">

              <span class="leading-normal tracking-tighter font-medium ml-2 text-2xl text-white">
                  {{ Nereus::backend()->name }}
              </span>
          </div>
          <nav class="flex flex-1 flex-col">
              <ul role="list" class="flex flex-1 flex-col gap-y-7">
                  <li>
                      <ul role="list" class="-mx-2 space-y-1">
                          <li>
                              <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                              <a href="#"
                                  class="text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-normal">
                                  <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                      stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                  </svg>
                                  Dashboard
                              </a>
                          </li>
                          <li>
                              <a href="#"
                                  class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-normal">

                                  <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                      stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                  </svg>

                                  Explore
                              </a>
                          </li>
                          <li>
                              <a href="#"
                                  class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-normal">

                                  <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                      stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                  </svg>

                                  Profile
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="-mx-6 mt-auto">
                      <a href="#"
                          class="flex items-center gap-x-4 px-6 py-3 text-sm font-normal leading-6 text-white hover:bg-gray-800">
                          <img class="h-8 w-8 rounded-full bg-gray-800"
                              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1TpLsndh5IH12-dgRc8bNj3180oL8hIcyYEDQzM6cqw&s"
                              alt="">
                          <span class="sr-only">Your profile</span>
                          <span aria-hidden="true">Bruno Falcão</span>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </div>


  {{-- mobile sticky top bar  --}}
  <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-gray-900 px-4 py-4 shadow-sm sm:px-6 lg:hidden">
      <button type="button" class="-m-2.5 p-2.5 text-gray-400 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
      </button>
      <div class="flex-1 text-sm font-normal leading-6 text-white">Dashboard</div>
      <a href="#">
          <span class="sr-only">Your profile</span>
          <img class="h-8 w-8 rounded-full bg-gray-800"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt="">
      </a>
  </div>

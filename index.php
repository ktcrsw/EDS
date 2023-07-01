<?php 

    include "./components/assets/header.php";
    // header("location: ./components/login.php");

?> 
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">


<!-- Container for demo purpose -->
  <nav
    class="relative flex w-full items-center justify-between py-2 shadow-sm shadow-neutral-700/10 dark:bg-neutral-800 dark:shadow-black/30 lg:flex-wrap lg:justify-start"
    data-te-navbar-ref style="background-color: #1F2735;">
    <!-- Container wrapper -->
    <div class="flex w-full flex-wrap items-center justify-between px-6">
      <div class="flex items-center">
        <!-- Toggle button -->
        <button
          class="block border-0 bg-transparent py-2 pr-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
          <span class="[&>svg]:w-7">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
              <path fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Navbar Brand -->
        <a class="text-primary dark:text-primary-400" href="#!">
          <span class="[&>svg]:ml-2 [&>svg]:mr-3 [&>svg]:h-6 [&>svg]:w-6 [&>svg]:lg:ml-0">
          <img src="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png" class="h-10 mr-3 mb-2" alt="EDS Logo" />              
          </span>
        </a>
      </div>

      <!-- Collapsible wrapper -->
      <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
        id="navbarSupportedContentY" data-te-collapse-item>
        <!-- Left links -->
        <ul class="mr-auto lg:flex lg:flex-row" data-te-navbar-nav-ref>
          <li data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light"
              disabled>EDS</a>
          </li>
          <li data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Team</a>
          </li>
          <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="https://github.com/dadaKitt/EDS" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Github</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="my-1 flex items-center lg:my-0 lg:ml-auto">
        <button type="button"
          class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white  transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-primary-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
          data-te-ripple-init data-te-ripple-color="light">
          เข้าสู่ระบบ
        </button>
        <button type="button"
          class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init data-te-ripple-color="light">
          สมัครใช้งาน
        </button>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
<div class="container " style="background-color: #1F2735;">
  <!-- Section: Design Block -->
  <section class="">
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="relative overflow-hidden bg-cover bg-no-repeat" style="
        background-position: 50%;
        background-image: url('https://cdn.discordapp.com/attachments/960423388369813514/1124697325223288902/Screenshot_2023-07-01_115046.png');
        height: 500px;
      ">
    <div
      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
            EDS <br /><span>Education System</span>
          </h1>
          <a href="components/login.php">          <button type="button"
            class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-100 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
            data-te-ripple-init data-te-ripple-color="light">
            เริ่มต้นใช้งาน
          </button></a>

        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
  <section class="background-radial-gradient mb-32" style="background-color: #1F2735;">

        
    <div class="px-6 py-12 text-center md:px-12 lg:text-left">
      <div class="container mx-auto">
        <div class="grid items-center gap-12 lg:grid-cols-2">
          <div class="mt-12 lg:mt-0">
            <h1 class="mb-12 text-5xl font-bold tracking-tight text-[hsl(0,0%,100%)] md:text-6xl xl:text-7xl">
              คุณรู้จักเรารึยัง? <br /><span class="text-[hsl(218,81%,75%)]">EDS</span>
            </h1>
            <p class="text-lg text-[hsl(0,0%,100%)]">
            เว็บไซต์ “EDS แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคอุดรธานี” หรือเรียกสั้นๆว่า “EDS” จัดทำขึ้นมาเพื่อบุคลากรทางการศึกษาเช่น ครู นักเรียน และ สถานศึกษา จากที่สอบถามและลองใช้มาตลอดพบว่ามีบางระบบที่ไม่สามารถสนองความต้องการของนักเรียนหรือคุณครูได้ “EDS” เลยจัดการปัญหาส่วนนั้น ด้วยการออกแบบที่ทันสมัยทำให้เว็บไซต์ใช้งานได้ง่ายมากขึ้นและเหมาะสำหรับบุคลากรทางการศึกษาทุกคน 
            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
              style="padding-top: 56.25%">
              <img class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-500 w-500"
                src="https://cdn.discordapp.com/attachments/960423388369813514/1124696616079728650/CTC_DEVELOPER__1_-removebg-preview.png"
                allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615"></img>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->

  <!-- Section: Design Block -->
<!-- Container for demo purpose -->
<div class="container mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class=" text-center">
    <h2 class="mb-12 text-3xl font-bold">
    EDS Website Development Team - Education System
</u>
    </h2>

    <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">
      <div class="mb-6 lg:mb-0">
        <div
          class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="relative overflow-hidden bg-cover bg-no-repeat">
            <img src="https://cdn.discordapp.com/attachments/960423388369813514/1124714857292370021/356256285_1353393758545720_2372837090686903326_n.jpg" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute text-white dark:text-neutral-700 left-0 bottom-0" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 1440 320">
              <path fill="currentColor"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Kittichai Raksawong</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">Backend Developer</p>
            <ul class="mx-auto flex list-inside justify-center">
              <a href="#!" class="px-2">
                <!-- GitHub -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-4 w-4 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Twitter -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-4 w-4 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Linkedin -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div
          class="block rounded-lg bg-white ">
          <div class="relative overflow-hidden bg-cover bg-no-repeat">
            <img src="https://cdn.discordapp.com/attachments/960423388369813514/1124716047879110717/288951402_757155428975607_149806113358416937_n.jpg" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute text-white dark:text-neutral-700  left-0 bottom-0" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 1440 320">
              <path fill="currentColor"
                d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Bongkotpethr Yodkratok
</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">FrontEnd Developer</p>
            <ul class="mx-auto flex list-inside justify-center">
              <a href="#!" class="px-2">
                <!-- Facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary dark:text-primary-400"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Twitter -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-4 w-4 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Linkedin -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="">
        <div
          class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="relative overflow-hidden bg-cover bg-no-repeat">
            <img src="https://scontent.futh1-1.fna.fbcdn.net/v/t39.30808-6/306484822_788240948925325_7901346849077965875_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFTeM_foatiuwkdVU9fHoBwHr8pUf_HNYcevylR_8c1h7ZQgdireqaV1GuxVnGXETh2jwzfqtp1OfdzFM48_0zT&_nc_ohc=PKCtNS9umxQAX9HETev&_nc_ht=scontent.futh1-1.fna&oh=00_AfCOGihHu-6GDdPrRSY5SNQ4IMts5-3goFvnT7Y5b4V2sA&oe=64A4D1FC" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute text-white dark:text-neutral-700 left-0 bottom-0" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 1440 320">
              <path fill="currentColor"
                d="M0,288L48,256C96,224,192,160,288,160C384,160,480,224,576,213.3C672,203,768,117,864,85.3C960,53,1056,75,1152,69.3C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="mb-4 text-lg font-bold">Teerasak Pholmuengnit
</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">Journal</p>
            <ul class="mx-auto flex list-inside justify-center">
              <a href="#!" class="px-2">
                <!-- Dribbble -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-4 w-4 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M12 0c-6.628 0-12 5.373-12 12s5.372 12 12 12 12-5.373 12-12-5.372-12-12-12zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073-.244-.563-.497-1.125-.767-1.68 2.31-1 4.165-2.358 5.548-4.082 1.35 1.594 2.197 3.619 2.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68-1.016-1.861-2.178-3.676-3.488-5.438.779-.197 1.591-.314 2.431-.314 2.275 0 4.368.779 6.043 2.072zm-10.516-.993c1.331 1.742 2.511 3.538 3.537 5.381-2.43.715-5.331 1.082-8.684 1.105.692-2.835 2.601-5.193 5.147-6.486zm-5.44 8.834l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48-1.432-1.719-2.296-3.927-2.296-6.334zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027.928 2.42 1.609 4.91 2.043 7.46-3.349 1.291-6.953.666-9.641-1.433zm11.586.43c-.438-2.353-1.08-4.653-1.92-6.897 1.876-.265 3.94-.196 6.199.196-.437 2.786-2.028 5.192-4.279 6.701z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Linkedin -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-3.5 w-3.5 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
              </a>
              <a href="#!" class="px-2">
                <!-- Instagram -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  class="h-4 w-4 text-primary dark:text-primary-400">
                  <path fill="currentColor"
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->
<!-- Container for demo purpose -->
<!-- Container for demo purpose -->
<!-- Section: Design Block -->

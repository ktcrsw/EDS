<?php
session_start();
include '../db/connect.db.php';
include '../../Frontend/assets/admin_nav.php';


?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- component -->
<form>
  <div class="">
    <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
      <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD POST</h1>
      <div class="space-y-4">
        <div>
          <label for="title" class="text-lx font-serif">Title:</label>
          <input type="text" placeholder="title" id="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div>
          <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
          <textarea id="description" cols="30" rows="10" placeholder="whrite here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
        </div>
        <div>
          <label for="name" class="text-lx font-serif">Name:</label>
          <input type="text" placeholder="name" id="name" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <div>
          <label for="email" class="text-lx font-serif">Email:</label>
          <input type="text" placeholder="name" id="email" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        </div>
        <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600  ">ADD POST</button>
      </div>
    </div>
  </div>
</form>
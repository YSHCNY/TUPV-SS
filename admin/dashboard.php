<?php 
session_start();
include '../php/session.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/main.css">
    <title>Document</title>
</head>
<body class="bg-light-100">

<?php 
$page = 'dashboard';
include '../php/header.php' 
?>

<div class="absolute w-full">
   <img src="../src/img/admin_bg.png" class="object-cover w-full z-0 h-[16rem]" srcset="">
</div>
<div class="p-4 sm:ml-64 relative">
   <div class="p-4 mt-14">
      <div class="mb-10">
         <h1 class="text-4xl font-bold text-light">Hello Admin!</h1>
         <h4 class="text-light text-xl">Welcome Back!</h4>
      </div>
      <div class="grid grid-cols-4 gap-6 mb-6">
         <div class="flex items-center bg-light p-6 border border-light-200 rounded-lg">
            <div class="bg-light-100 p-4 rounded-lg me-6">
               <svg class="w-[32px] h-[32px] text-main dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4"/>
               </svg>
            </div>
            <div>
               <h1 class="text-2xl font-bold text-dark">148</h1>
               <h3 class="text-sm text-secondary">Modules Uploaded</h3>
            </div>
         </div>
         <div class="flex items-center bg-light p-6 border border-light-200 rounded-lg">
            <div class="bg-light-100 p-4 rounded-lg me-6">
               <svg class="w-[32px] h-[32px] text-main dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
               </svg>
            </div>
            <div>
               <h1 class="text-2xl font-bold text-dark">1024</h1>
               <h3 class="text-sm text-secondary">Questions Made</h3>
            </div>
         </div>
         
         <div class="col-span-2 flex items-center bg-light p-6 border border-light-200 rounded-lg">
            <div class="bg-light-100 p-4 text-center rounded-lg me-6">
               <h1 class="font-bold text-main text-3xl">24</h1>
               <h3 class="text-dark text-sm text-secondary">September</h3>
            </div>
            <div>
               <h3 class="text-sm text-secondary">Upcoming Events</h3>
               <h1 class="text-2xl font-bold text-dark">Prelim Examination</h1>
            </div>
         </div>
      </div>
      <div class="flex">
         <div class="w-1/3 h-full">
            <h1 class="text-2xl font-bold mb-2">Recent</h1>
            <div class="bg-light p-6 border border-light-200 rounded-lg">
               <h2 class="font-bold text-secondary mb-4">Activity Log</h2>
               <div>
                  <div class="flex px-4 items-center py-2 border border-light-100 rounded-lg">
                     <svg class="me-2 w-[32px] h-[32px] text-main dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                     </svg>
                     <div class="text-sm">
                        <h3 class="text-main"><span>Question Bank    </span>•<span class="text-light-200 italic">    Sept. 5, 2023 at 6:35 PM</span></h3>
                        <h3>Accepted <span class="text-main italic">Question</span> Submitted by <span class="font-bold">Ramon Lito</span> </h3>
                        <h3 class="text-light-200">What is the main component of the Earth's atmosphere?</h3>
                     </div>
                  </div>
                  


               </div>
            </div>
         </div>
         <div class="w-2/3 h-full">
            <h1 class="text-2xl font-bold mb-2">Quick Actions</h1>
            <div class="flex flex-col">
               <div class="bg-light p-6 border border-light-200 rounded-lg h-50">
                  1
               </div>
               <div class="bg-light p-6 border border-light-200 rounded-lg h-50">
                  2
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="grid grid-cols-3 gap-6 mb-6">
         <div class="col-span-1">
            <h1 class="text-2xl font-bold mb-2">Recent</h1>
            <div class="bg-light p-6 border border-light-200 rounded-lg h-">
               <h2 class="font-bold text-secondary">Activity Log</h2>
            </div>
         </div>
         <div class="col-span-2">
            <h1 class="text-2xl font-bold mb-2">Quick Actions</h1>
            <div class="grid grid-rows-2 gap-6">
               <div class="bg-light p-6 border border-light-200 rounded-lg">
                  1
               </div>
               <div class="bg-light p-6 border border-light-200 rounded-lg">
                  2
               </div>
            </div>
         </div>
      </div> -->






      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
      <div class="grid grid-cols-2 gap-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
   </div>
</div>
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
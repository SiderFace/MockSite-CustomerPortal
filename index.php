

<?php get_header(); ?>

<main class="container mx-auto py-12 text-center">
<!-- Tailwind test -->
<h1 class="text-4xl font-bold text-blue-600">
   Hello Tailwind
</h1>
<p class="mt-4 text-gray-700">
   If this ↑ text ↑ is blue and styled, Tailwind is working!
</p>

<br> <br> <br>
<p class="text-fuchsia-600 text-3xl font-bold">
  Tailwind Watch Test
</p>


<!-- Alpine.js test -->
<div x-data="{ open: false }" class="mt-8">
   <button 
      @click="open = !open" 
      class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
      Toggle Message
   </button>

   <p x-show="open" x-transition class="mt-4 text-lg text-green-700">
      Alpine.js is working too!
   </p>
</div>
</main>

<?php get_footer(); ?>

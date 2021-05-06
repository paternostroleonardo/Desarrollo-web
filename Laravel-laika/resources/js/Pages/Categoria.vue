<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<div class="bg-gradient-to-br from-purple-900 to-purple-500 min-h-screen overflow-auto">
  <div class="container max-w-5xl mx-auto px-4 ">
    <div class="w-4/5 flex justify-between">
      <div class="mt-32 text-white text-9xl font-bold flex justify-end"> Laika <br /> <span class="py-24 mx-3 text-6xl text-yellow-400 whitespace-pre">Universo Peludo</span></div>
      <div class="flex flex mt-6 h-90 w-80">
      <img class="object-contain mx-20 px-1 mt-2" src="https://laika.com.co/assets/imagen_phone_r.png" alt="">
      </div>
    </div>
    <p class="text-gray-300 font-bold text-xl"> Productos para perros y gatos</p>
    <div class="hidden sm:block opacity-50 z-0">
      <div class="shadow-2xl w-96 h-96 rounded-full -mt-72"></div>
      <div class="shadow-2xl w-96 h-96 rounded-full -mt-96"></div>
      <div class="shadow-xl w-80 h-80 rounded-full ml-8 -mt-96"></div>
    </div>
    <div class="text-white relative mt-3 py-5">
      <h3 class="text-uppercase font-semibold">Categorias</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 sm:gap-5 uppercase">
        <div class="group flex items-center bg-purple-900 bg-opacity-40 shadow-xl gap-5 px-6 py-5 rounded-lg ring-2 ring-yellow-300 mt-4 cursor-pointer hover:bg-purple-900 hover:bg-opacity-100 transition">
          <img class="w-9" src="https://laikapp.s3.amazonaws.com/images_categories/categoria_higiene.png" alt="" />
          <div>
            <span>Higiene</span>
            <span class="text-xs text-yellow-400 block">Laika</span>
          </div>
          <div>
            <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
          </div>
        </div>

        <div class="group flex items-center bg-purple-900 bg-opacity-40 shadow-xl gap-5 px-6 py-5 rounded-lg ring-2 ring-yellow-300 mt-4 cursor-pointer hover:bg-purple-900 hover:bg-opacity-100 transition">
          <img class="w-9" src="https://laikapp.s3.amazonaws.com/images_categories/categoria_petlover.png" alt="" />
          <div>
            <span>Veterinaria</span>
            <span class="text-xs text-yellow-400 block">Laika</span>
          </div>
          <div>
            <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
          </div>
        </div>

        <div class="group flex items-center bg-purple-900 bg-opacity-40 shadow-xl gap-5 px-6 py-5 rounded-lg ring-2 ring-yellow-300 mt-4 cursor-pointer hover:bg-purple-900 hover:bg-opacity-100 transition">
          <img class="w-9" src="https://laikapp.s3.amazonaws.com/images_categories/categoria_alimento-min.png" alt="" />
          <div>
            <span>Alimentos</span>
            <span class="text-xs text-yellow-400 block">Laika</span>
          </div>
          <div>
            <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
          </div>
        </div>

        <div class="group flex items-center bg-purple-900 bg-opacity-40 shadow-xl gap-5 px-6 py-5 rounded-lg ring-2 ring-yellow-300 mt-4 cursor-pointer hover:bg-purple-900 hover:bg-opacity-100 transition">
          <img class="w-9" src="https://laikapp.s3.amazonaws.com/images_categories/categoria_juguetes.png" alt="" />
          <div>
            <span>Juguetes</span>
            <span class="text-xs text-yellow-400 block">Laika</span>
          </div>
          <div>
            <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <slot>
  </slot>
</div>
</template>


<script>
 export default {
     props: {},
 };

</script>

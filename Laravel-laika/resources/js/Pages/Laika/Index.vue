<template>
    <app-layout>
    <CategoriaLayout>
    </CategoriaLayout>
      <div id="container" class="w-4/5 mx-auto py-20">
    <div class="flex flex-col sm:flex-row">
      <!-- Card 1 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto"
              src="https://laikapp.s3.amazonaws.com/dev_images_products/19078_COLLAR_ATTACK_1603409524_441x441.png"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Collar Attack</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
          <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoUno"> {{ vendedor.name }} </h2>
          <br />
          <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 2 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://s3.us-east-1.amazonaws.com/laikapp/images_products/1_3205__Galletas_de_Cordero_y_arroz_Laika_by_Rausch_500X500.jpg"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Galletas Laika</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoDos"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>
       <!-- Card 2 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="data:image/jpeg;base64,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"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Galletas Pug</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoTres"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 3 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://laikapp.s3.amazonaws.com/dev_images_products/3665_Nutrion_Elite_1598658932_600x600.jpg"
              alt=""
            />
          </div>
           <h2 class="text-xl font-medium text-purple-900 text-bold underline">Nutrition</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoUno"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 4 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://laikapp.s3.amazonaws.com/dev_images_products/3663_Nutrion_Galletas_1598658898_1000x1000.jpg"
              alt=""
            />
          </div>
        <h2 class="text-xl font-medium text-purple-900 text-bold underline">Galletas Love</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoDos"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>
    </div>
    <div class="flex flex-col sm:flex-row">
      <!-- Card 1 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto"
              src="http://canamor.com/wp-content/uploads/2017/03/Hueso_de_carnaza_natural_para_perroH5X2-600x600.jpg"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Huesos Caninos</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
          <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoDos"> {{ vendedor.name }} </h2>
          <br />
          <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 2 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://pukipetshop.com/wp-content/uploads/2020/05/2-BEEPS-CAT-CARE-SHAMPOO-X-502-mL17OZ.jpg"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Shampoo Cat</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoUno"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>
       <!-- Card 2 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://images-eu.ssl-images-amazon.com/images/I/41tR7I1fpML.jpg"
              alt=""
            />
          </div>
          <h2 class="text-xl font-medium text-purple-900 text-bold underline">Casita Para Gatos</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoDos"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 3 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://m.media-amazon.com/images/I/71bsQF3t6dL._AC_SX425_.jpg"
              alt=""
            />
          </div>
           <h2 class="text-xl font-medium text-purple-900 text-bold underline">Dispensador De Agua</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoTres"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>

      <!-- Card 4 -->
      <div class="sm:w-1/4 p-2">
        <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
          <div class="mb-3">
            <img
              class="w-auto mx-auto rounded-full"
              src="https://pukipetshop.com/wp-content/uploads/2020/05/1-BEEPS-2-in-1-SHAMPOO-X-502-mL17OZ.jpg"
              alt=""
            />
          </div>
        <h2 class="text-xl font-medium text-purple-900 text-bold underline">Shampoo Dog</h2>
          <h2 class="text-gray-700 block">Vendedores</h2>
           <h2 class="text-sm font-medium text-yellow-500" v-for="vendedor in GrupoDos"> {{ vendedor.name }} </h2>
         <br />
         <a href="#" class="px-4 py-2 bg-purple-900 text-white rounded-full"
            >Comprar</a
          >
        </div>
      </div>
    </div>
  </div>
    </app-layout>
    <Testimonial>
    </Testimonial>
    <TailwindCSS>
    </TailwindCSS>
    <FooterLayout>
    </FooterLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import CategoriaLayout from '@/Pages/Categoria'
import FooterLayout from '@/Pages/Footer'
import Testimonial from '@/Pages/Testimonio'
import TailwindCSS from '@/Pages/TailwindCSS'


export default {
    components: {
        AppLayout,
        Welcome,
        CategoriaLayout,
        FooterLayout,
        Testimonial,
        TailwindCSS
    },
    props: {
        ApiLaika: Object,
    },
     data(){
            return{
                q:'',
            }
        },
        watch: {
            q: function (value){
                this.$inertia.replace(this.route('laika.index', {q: value}))
            }
        },
        computed: {
            GrupoUno: function(){
                return this.ApiLaika.filter(function (usuarios){
                    return usuarios.id > 8
                } )
            },
             GrupoDos: function(){
                return this.ApiLaika.filter(function (usuarios){
                    return usuarios.id < 3
                } )
            },
             GrupoTres: function(){
                return this.ApiLaika.find(function (usuarios){
                    return usuarios.id == 5
                } )
            }
        }
    }
</script>


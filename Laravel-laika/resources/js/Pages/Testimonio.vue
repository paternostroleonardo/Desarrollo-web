<template>
<body class="bg-gray-200 py-30">
    <div class="w-full h-screen">
      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-4 2xl:row-span-2 2xl:pb-8 ml-2 pt-4 px-6">

        <div class="bg-indigo-600 lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0">
          <div class="mx-6 my-8 2xl:mx-10">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 ml-1 lg:ml-3 2xl:ml-0 md:-mt-1 2xl:-mt-4" src="data:image/jpeg;base64,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" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-20 2xl:mx-8">Daniela Anillo</h1>
            <h2 class="text-white text-opacity-50 text-xs md:text-base 2xl:text-2xl pl-12 lg:pl-16 2xl:pl-20 2xl:my-2 2xl:mx-8">Usuario</h2>
          </div>
          <div class="-mt-6 relative">
            <p class="text-white text-xl 2xl:text-4xl font-bold px-7 lg:px-9 2xl:pt-6 2xl:mx-2">Conoci a Laika por medio de una amiga de la universidad y me ha servido muchisimo para llevar el día a día de mi mascota.</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-7 lg:px-9 mb-3 2xl:pb-8 2xl:mx-2">“Me ha gustado demasiado la plataforma, son super cumplidos con las entregas y algo que me encanta es que uno puede poner el lapso de tiempo en el cual desea recibir el pedido y lo mejor es que todo el tiempo te están avisando de cuando salen promociones. ”</p>
          </div>
        </div>

        <div class="bg-gray-900 lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl pb-4 mb-5 lg:mb-0">
          <div class="mx-8 2xl:mx-10 my-10">
            <img class="w-8 md:w-9 2xl:w-20 h-8 md:h-9 2xl:h-20 rounded-full border-2 -ml-1 -mt-2 lg:-mt-4" src="https://www.infobae.com/new-resizer/p1Bkoh5blfiUCSf7z2lvwcdAeNE=/420x236/filters:format(jpg):quality(85)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/02/24183536/sofia-pachano.jpg" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 2xl:-mt-16"> Alexandra Quintana</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-11 md:pl-12 2xl:pl-24">Usuario</h2>
          </div>
          <div class="-mt-8 mx-1 lg:mx-2">
            <p class="text-white text-lg lg:text-xl 2xl:text-4xl font-semibold pt-1 px-6 2xl:px-8 lg:pl-5 lg:pr-8">Laika de motiva a darle lo mejor a mi mascota</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl pl-6 lg:pl-5 pr-4 -mt-1 lg:mt-6 2xl:mt-2 2xl:px-8">“ Me encantó la aplicación, compré medicamentos y arena para gato, en la tarde ¡ya había recibido mi pedido! el precio del envio me pareció económico. Me encantó el hecho de que te den un detalle por la compra de la membresía (aunque tengo un gato y el regalo era para un perro). ”</p>
          </div>
        </div>

        <div class="bg-primary-color-white lg:order-3 lg:row-span-2 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8">
          <div class="mx-8 my-10 lg:my-8">
            <img class="w-8 md:w-9 lg:w-11 2xl:w-20 h-8 md:h-9 lg:h-11 2xl:h-20 rounded-full border-2 -mt-3 -ml-1 lg:-ml-0" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Melissa Guerrero</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 lg:pl-14 2xl:pl-24">Usuario</h2>
          </div>
          <div class="-mt-4 ml-5 mr-11">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-bold px-2 lg:px-3 -mt-6 lg:-mt-5 2xl:mt-12 2xl:pb-6">Me encanto la experiencia</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl pl-2 lg:pl-3 lg:pr-4 mb-6 2xl:pt-2 -mt-3">“ Me gustó mucho, el pedido me llegó tal cual como decía en la app, no tuve problema para ingresar y menos para realizar el pedido. ”</p>
          </div>
        </div>

        <div class="bg-purple-800 lg:order-4 lg:row-span-2 2xl:row-span-1 col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8 lg:pb-14 2xl:pb-20">
          <div class="mx-8 my-8">
            <img class="w-8 md:w-9 lg:w-10 2xl:w-20 h-8 md:h-9 lg:h-10 2xl:h-20 rounded-full border-2 lg:-mt-3" src="https://images.pexels.com/photos/3778603/pexels-photo-3778603.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
            <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-12 md:pl-14 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-11 2xl:-mt-16">Juan Serrano</h1>
            <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-12 md:pl-14 2xl:pl-24">Usuario</h2>
          </div>
          <div class="px-3 -mt-3 mb-5 lg:mb-0">
            <p class="text-white text-lg 2xl:text-4xl font-semibold px-4 -mt-3 lg:-mt-6 2xl:mt-8">El servicio prestado por la empresa es excelente en cuanto a productos y atención.</p>
            <br />
            <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl px-4 mt-1 lg:-mt-3 2xl:mt-6">“ Me encanta pedir los productos para mis mascotas. Son puntuales, precios accesibles, buen trato al cliente y el repartidor muy accesible y buena onda. Creo que no solo venden por vender, sino que te dan una grata experiencia. Super recomendable y la app funcional y facil de usar. ”</p>
          </div>
        </div>

        <div class="bg-primary-color-white lg:order-2 lg:row-span-4 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:pb-4 2xl:h-screen">
          <div class="mx-8 my-8 lg:pl-1">
            <img class="w-8 md:w-9 lg:w-12 2xl:w-20 h-8 md:h-9 lg:h-12 2xl:h-20 rounded-full border-2 lg:-mt-4 -ml-1 lg:-ml-4" src="https://images.pexels.com/photos/3762804/pexels-photo-3762804.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
            <h1 class="primary-color-blackish-blue text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 lg:-mt-12 2xl:-mt-16"> Diana Meza</h1>
            <h2 class="primary-color-blackish-blue-opacity text-xs md:text-base 2xl:text-2xl pl-10 md:pl-12 2xl:pl-24">Usuario</h2>
          </div>
          <div class="px-3 lg:px-5 lg:-mt-4 mb-5 lg:mb-0">
            <p class="primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0">Excelente servicio. Los domiciliarios son muy atentos y el servicio de atención al cliente vía telefónica y por WhatsApp es excelente, siempre encuentran solución a todas las inquietudes.</p>
            <br />
            <p class="primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64">“Super cumplidos y excelentes precios, gracias por los descuentos que ofrecen para el bienestar tanto de nuestro bolsillo como el de las mascotas, me encanta lo que es laika, gracias por la pañoleta navideña como regalo.  El concentrado bien empacado me gustaría, me gustaría que amenudo sacarán los envíos $0 así podríamos comprar más cosas a nuestros peludos los felicitó por esta aplicación servicio nunca me han fallado...”</p>
          </div>
        </div>

      </div>
      <slot>
    </slot>
    </div>
  </body>
</template>


<script>
 export default {
     props: {},
 };

</script>

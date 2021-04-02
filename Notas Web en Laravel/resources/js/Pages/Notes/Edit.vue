<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="md:grid md:grid-cols-3 md:gap_6">
                    <div class="md:col-span-1">
                        <div class="p3-4 sm:px-0">
                            <h3 class="text-lg text-gray-900">Editar una nota</h3>
                            <p class="text-sm text-gray-600">Si editas no podrás volver al estado anterior</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                     <div class="shadow bg-white md:rounded-md p-4">
                       <form @submit.prevent="submit">
                           <label class="block font-medium text-sm text-gray-700">
                               Resume
                           </label>
                           <textarea class="form-input w-full rounded-md shadow-sm"
                               v-model="form.excerpt">
                           </textarea>
                               <label class="block font-medium text-sm text-gray-700">
                               Contenido
                           </label>
                           <textarea class="form-input w-full rounded-md shadow-sm"
                               v-model="form.content"
                               rows="8">
                           </textarea>
                           <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"> Editar </button>
                      <a href="#" @click.prevent="destroy">
                           Eliminar Nota
                       </a>
                       </form>
                     </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: {
            note: Object,
        },
        data () {
           return {
               form:{
                excerpt: this.note.excerpt,
                content: this.note.content,
                }
            }
         },
         methods: {
             submit() {
                 this.$inertia.put(this.route('notes.update', this.note.id), this.form)
             },
             destroy() {
                 if (confirm('¿Desea Eliminar?')){
                     this.$inertia.delete(this.route('notes.destroy', this.note.id))
                 }
             }
         }
        }
</script>

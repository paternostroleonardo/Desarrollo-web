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
                            <h3 class="text-lg text-gray-900">Detalle de la nota</h3>
                            <p class="text-sm text-gray-600">{{ note.excerpt }}</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                     <div class="shadow bg-white md:rounded-md p-4">
                         <p>{{ note.content }}</p>
                         <hr class="my-6">
                         <inertia-link :href="route('notes.index')">Volver</inertia-link>
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
        }
    }
</script>

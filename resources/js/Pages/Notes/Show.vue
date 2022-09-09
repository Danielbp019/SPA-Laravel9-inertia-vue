<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3'; //para que funcione el link
</script>
    
<template>
    <AppLayout title="Notas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <!-- en orden de lectura pantalla mediana, 3 columnas y 6 espacios -->
                    <div class="md:col-span-1">
                        <!-- si pantalla mediana espaciado de 1 -->
                        <div class="px-4 sm:px0">
                            <!-- si la pantalla es pequeña no poner padding -->
                            <h3 class="text-lg text-gray-900">Detalle de una nota</h3>
                            <!-- texto grande en color gris de 900 intensidad -->
                            <p class="text-sm text-gray-600">{{note.excerpt}}</p>
                            <!-- texto mediano color gris intensidad 600 -->
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <p>{{note.content}}</p>
                            <hr class="my-6"> <!-- margen superior e inferior 6 -->

                            <Link :href="route('notes.index')"
                                class="inline-block align-baseline font-bold text-md text-blue-500 hover:text-blue-800">
                            Volver</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
export default {
    components: {
        AppLayout,
    },
    props: {
        note: Object,
    },
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
        
<template>
    <AppLayout title="Notes">
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
                            <h3 class="text-lg text-gray-900">Editar una nota</h3>
                            <!-- texto grande en color gris de 900 intensidad -->
                            <p class="text-sm text-gray-600">Si editas no podrás volver al estado anterior</p>
                            <!-- texto mediano color gris intensidad 600 -->
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <form>
                                <label class="block font-medium text-sm text-gray-700">Resumen</label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.excerpt"></textarea> <!-- v-model para conectarlo con vue -->

                                <label class="block font-medium text-sm text-gray-700">Contenido</label>
                                <textarea class="form-input w-full rounded-md shadow-sm" v-model="form.content"
                                    rows="8"></textarea> <!-- v-model para conectarlo con vue -->
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Editar</button>
                            </form>
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
    data() {
        return {
            form: {
                excerpt: this.note.excerpt, /* la nota sale de la base de datos y esa nota tiene un extracto */
                content: this.note.content, /* la nota tiene adentro un contenido */
            }
        }
    }
}
</script>
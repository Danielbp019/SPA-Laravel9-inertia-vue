<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    </script>
    
    <template>
        <AppLayout title="Dashboard">
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Modulo de notas
                </h2>
            </template>
    
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="md:grid md:grid-cols-3 md:gap-6"> <!-- en orden de lectura pantalla mediana, 3 columnas y 6 espacios -->
                        <div class="md:col-span-1"> <!-- si pantalla mediana espaciado de 1 -->
                            <div class="px-4 sm:px0"> <!-- si la pantalla es pequeña no poner padding -->
                                <h3 class="text-lg text-gray-900">Listado de notas</h3> <!-- texto grande en color gris de 900 intensidad -->
                                <p class="text-sm text-gray-600">Toma un registro y ejecuta una función</p> <!-- texto mediano color gris intensidad 600 -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </template>
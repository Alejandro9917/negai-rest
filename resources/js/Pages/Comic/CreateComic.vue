<template>
    <app-layout title="Negai | Comics">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Comics
            </h2>
        </template>

        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form @submit.prevent="submit">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                </div>

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tag_id" class="block text-sm font-medium text-gray-700">Elegir tag</label>
                                        <select id="tag_id" v-model="form.tag_id" name="tag_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="" disabled selected>Elige una opción</option>
                                            <option v-for="tag in tags" :key="tag.id" v-bind:value="tag.id">{{ tag.tag }}</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="collection_id" class="block text-sm font-medium text-gray-700">Elegir colección</label>
                                        <select id="collection_id" v-model="form.collection_id" name="collection_id" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="" disabled selected>Elige una opción</option>
                                            <option v-for="collection in collections" :key="collection.id" v-bind:value="collection.id">{{ collection.name }}</option>
                                        </select>
                                    </div>

                                    <label for="name" class="block text-x1 font-medium text-gray-900">Nombre del comic:</label>
                                    <input id="name" v-model="form.name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="author" class="block text-x1 font-medium text-gray-900">Nombre del autor:</label>
                                    <input id="author" v-model="form.author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="price" class="block text-x1 font-medium text-gray-900">Precio del manga:</label>
                                    <input id="price" v-model="form.price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="description" class="block text-x1 font-medium text-gray-900">Descripción del manga:</label>
                                    <input id="description" v-model="form.description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="publisher" class="block text-x1 font-medium text-gray-900">Editorial:</label>
                                    <input id="publisher" v-model="form.publisher" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="type" class="block text-x1 font-medium text-gray-900">Tipo de tapa del manga:</label>
                                    <input id="type" v-model="form.type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="edition" class="block text-x1 font-medium text-gray-900">Edición del manga:</label>
                                    <input id="edition" v-model="form.edition" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>

                                    <label for="image" class="block text-x1 font-medium text-gray-900">Imagen para el manga:</label>
                                    <input id="image" v-model="form.image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-inner bg-gray-200 sm:text-lg border-gray-800 rounded-md"/>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nombre del Comic
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ultima actualización
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Opciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr v-for="comic in comics" :key="comic.id">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-center text-sm text-gray-900">{{ comic.name}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <div class="text-center">{{ comic.updated_at }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import axios from 'axios'

    export default {
        props: [
            'comics', 
            'collections',
            'tags',
            ],

        components: {
            AppLayout,
        },

        data() {
            return {
                form: {
                    tag_id: null,
                    collection_id: null,
                    name: null,
                    author: null,
                    price: null,
                    description: null,
                    publisher: null,
                    type: null,
                    edition: null,
                    image: null,
                    state: 1,
                },
            }
        },

        methods: {
            submit() {
                //console.log(this.form)
                axios.post('/comics', this.form)
                    .then(function(response){
                        alert(response.data.name)
                    })
                    .catch(function(error){
                        alert(error)
                    });
            },
        },
    }
</script>
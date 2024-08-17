<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class='bx bxs-dashboard'></i>
                <span class="text">{{ $title }}</span>
            </div>
        </div>

        <div class="mx-auto max-w-screen-xl pt-6">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button type="button" id="addDataButton" data-modal-target="addData" data-modal-toggle="addData"
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add Data
                    </button>
                </div>
            </div>
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-8">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Gambar</th>
                                <th scope="col" class="px-4 py-3">File</th>
                                <th scope="col" class="px-4 py-3">Audio</th>
                                <th scope="col" class="px-4 py-3">Video</th>
                                <th scope="col" class="px-4 py-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_file as $data)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 cursor-pointer"
                                        data-modal-target="{{ $data->id_file }}-gambar-modal"
                                        data-modal-toggle="{{ $data->id_file }}-gambar-modal">
                                        <img src="{{ asset('storage/img/' . $data->gambar) }}" alt=""
                                            class="h-16 w-16 object-cover rounded-lg">
                                    </td>
                                    <td class="px-4 py-3 cursor-pointer"
                                        data-modal-target="{{ $data->id_file }}-file-modal"
                                        data-modal-toggle="{{ $data->id_file }}-file-modal">
                                        Lihat File
                                    </td>
                                    <td class="px-4 py-3 cursor-pointer"
                                        data-modal-target="{{ $data->id_file }}-audio-modal"
                                        data-modal-toggle="{{ $data->id_file }}-audio-modal">
                                        Lihat Audio
                                    </td>
                                    <td class="px-4 py-3 cursor-pointer"
                                        data-modal-target="{{ $data->id_file }}-video-modal"
                                        data-modal-toggle="{{ $data->id_file }}-video-modal">
                                        Lihat video
                                    </td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button id="{{ $data->id_file }}-dropdown-button"
                                            data-dropdown-toggle="{{ $data->id_file }}-dropdown"
                                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id="{{ $data->id_file }}-dropdown"
                                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="{{ $data->id_file }}-dropdown-button">
                                                <li>
                                                    <button id="{{ $data->id_file }}Button"
                                                        data-modal-target="{{ $data->id_file }}update"
                                                        data-modal-toggle="{{ $data->id_file }}update" type="button"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <button id="{{ $data->id_file }}Button"
                                                    data-modal-target="{{ $data->id_file }}delete"
                                                    data-modal-toggle="{{ $data->id_file }}delete" type="button"
                                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal gambar -->
                                <div id="{{ $data->id_file }}-gambar-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 capitalize">
                                                    gambar
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="{{ $data->id_file }}-gambar-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <img src="{{ asset('storage/img/' . $data->gambar) }}" alt=""
                                                    class="object-cover w-full rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal file -->
                                <div id="{{ $data->id_file }}-file-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 capitalize">
                                                    file
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="{{ $data->id_file }}-file-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <iframe src="{{ asset('storage/doc/' . $data->file) }}"
                                                    width="600" height="400"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal audio -->
                                <div id="{{ $data->id_file }}-audio-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 capitalize">
                                                    audio
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="{{ $data->id_file }}-audio-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <audio controls class="w-full">
                                                    <source src="{{ asset('storage/audio/' . $data->audio) }}"
                                                        type="audio/mpeg">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Video -->
                                <div id="{{ $data->id_file }}-video-modal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 capitalize">
                                                    Video
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="{{ $data->id_file }}-video-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <video class="h-80 w-full" controls>
                                                    <source src="{{ asset('storage/video/' . $data->video) }}"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- update --}}
                                <div class=" h-full flex justify-center items-center w-full">
                                    <div id="{{ $data->id_file }}update" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Update Data ke
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="{{ $data->id_file }}update">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form action="{{ route('file.update', $data->id_file) }}"
                                                    enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="grid gap-4 mb-4">
                                                        <div>
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                                            <div id="card_image_update"
                                                                class="relative mb-4 max-w-64 w-full aspect-video rounded-md overflow-hidden hover-overlay">
                                                                <img id="image_update"
                                                                    class="object-cover w-full h-full"
                                                                    src="{{ asset('storage/img/' . $data->gambar) }}"
                                                                    alt="" srcset="">
                                                            </div>
                                                            <input id="image-update" type="file" name="gambar"
                                                                accept="image/*" value="{{ $data->gambar }}"
                                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                                        </div>
                                                        <div>
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File</label>
                                                            <div id="previewContainer" class="mb-2">
                                                                <iframe id="filePreviewUpdate"
                                                                    src="{{ asset('storage/doc/' . $data->file) }}"
                                                                    class="w-full h-64 border border-gray-300 rounded-lg"></iframe>
                                                            </div>
                                                            <input type="file" id="fileUpdate" name="file"
                                                                value="{{ $data->file }}"
                                                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
                                                                accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.odt,.ods,.odp,.txt,.rtf,.csv,.html,.xml,.epub,.mobi" />
                                                        </div>
                                                        <div>
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Audio</label>
                                                            <audio id="audioPlayerUpdate" controls
                                                                class="mb-4 w-full">
                                                                <source
                                                                    src="{{ asset('storage/audio/' . $data->audio) }}">
                                                            </audio>
                                                            <input type="file" id="audioUpdate" accept="audio/*"
                                                                name="audio" value="{{ $data->audio }}"
                                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                                        </div>
                                                        <div>
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video</label>
                                                            <video id="videoPlayerUpdate" class="mb-4 h-80 w-full"
                                                                controls>
                                                                <source
                                                                    src="{{ asset('storage/video/' . $data->video) }}">
                                                            </video>
                                                            <input type="file" id="videoUpdate" accept="video/*"
                                                                name="video" value="{{ $data->video }}"
                                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- delete --}}
                                <div id="{{ $data->id_file }}delete" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 mx-auto z-50 justify-center items-center w-full inset-0 h-modal h-full">
                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <!-- Modal header -->
                                            <div
                                                class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                    Hapus Data
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="{{ $data->id_file }}delete">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="{{ route('file.delete', $data->id_file) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <div class="mb-4">
                                                    <p class="text-center text-slate-900">
                                                        Apakah anda yakin ingin menghapus data ini?
                                                    </p>
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                                                    <button type="submit"
                                                        class="w-full text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Ya
                                                    </button>
                                                    <button type="button"
                                                        data-modal-toggle="{{ $data->id_file }}delete"
                                                        class="w-full text-white items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                        Tidak
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr class="border-b dark:border-gray-700">
                                    <td colspan="5" class="px-3 py-2 text-center">Data belum ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- add data --}}
        <div class=" h-full flex justify-center items-center w-full">
            <div id="addData" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create Data
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="addData">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid gap-4 mb-4">
                                <div>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                                    <div id="card_image"
                                        class="relative mb-4 hidden max-w-64 w-full aspect-video rounded-md overflow-hidden hover-overlay">
                                        <img id="image" class="object-cover w-full h-full"
                                            src="../src/asset/image/ahmad.jpg" alt="" srcset="">
                                    </div>
                                    <input id="image-input" type="file" name="gambar" accept="image/*"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                </div>
                                <div>
                                    {{-- untuk format file pengguna bisa memilih sesuai dengan keinginan, tapi saya saran menggunakan format pdf yang sudah di support oleh browser untuk ditampilkan di tag iframe --}}
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File</label>
                                    <div id="previewContainer" class="hidden  mb-2">
                                        <iframe id="filePreview"
                                            class="w-full h-64 border border-gray-300 rounded-lg"></iframe>
                                    </div>
                                    <input type="file" id="fileInput" name="file"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
                                        accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.odt,.ods,.odp,.txt,.rtf,.csv,.html,.xml,.epub,.mobi" />
                                </div>
                                <div>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Audio</label>
                                    <audio id="audioPlayer" controls class="hidden mb-4 w-full">
                                    </audio>
                                    <input type="file" id="audioInput" accept="audio/*" name="audio"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                </div>
                                <div>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video</label>
                                    <video id="videoPlayer" class="hidden mb-4 h-80 w-full" controls>
                                    </video>
                                    <input type="file" id="videoInput" accept="video/*" name="video"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/js/file.js') }}"></script>
</x-layout>

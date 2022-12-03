<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $view->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $view->nama }}
                </div>
            </div>

            <div class="bg-white mt-2 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  text-gray-900">
                    <table>
                        <tr>
                            <td>Nama Makam</td>
                            <td>{{ $view->nama }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Makam</td>
                            <td>{{ $view->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Agama Makam</td>
                            <td>{{ $view->agama }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Tersedia di Makam</td>
                            <td>{{ $view->tempat_tersedia }}</td>
                        </tr>

                    </table>

                    <a href="/makam/order/{{ $user->id }}/{{ $view->id }}"><button
                            class="btn btn-light mt-2">Pesan Tempat</button></a>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>

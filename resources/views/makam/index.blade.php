<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Makam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Daftar Makam') }}

                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Nama Makam</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Tempat Tersedia</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($makam as $m)
                                <tr>
                                    <td>
                                        {{ $m->id }}
                                    </td>
                                    <td>{{ $m->nama }}</td>
                                    <td>{{ $m->alamat }}</td>
                                    <td>{{ $m->agama }}</td>
                                    <td>{{ $m->tempat_tersedia }}</td>
                                    <td><a href="/makam/{{ $m->id }}">Lihat Makam</a></td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

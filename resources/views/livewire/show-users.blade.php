<div class="col col-lg-7">
    @include('pages.modale')


    @if(session()->has("user"))
    {{session()->get("user")}}
    @else
    <br>
    {{"nu esti logat"}}
    <br>
    @endif
    <br>

    @if(session()->has("success"))
    <div class="alert alert-success">{{session()->get("success")}}</div>
    @else
    <p class="text-success">
    <div class="alert alert-danger">nui suceess</div>
    </p>
    @endif



    @foreach($entitati as $entitate)
    <small class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">
        {{$entitate->nume}} <!-- {{$entitate->id}}  -->
    </small>

    <table id="mesaje" style="width:100%" class="table table-bordered table-striped table-hover">
        <thead>
            <th>Username</th>
            <th>Sterge</th>
            <th>Editeaza</th>
            <th>Convoaca</th>
        </thead>

        <?php
        //var_dump($entitate->users)


        ?>
        @foreach($entitate->users as $user)
        <tr>
            <td width='25%'>{{$user->username}}</td>
            <td>
                <button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#stergeModal" wire:click="alegeUser('{{$user->id}}')">Sterge</button>

            </td>
            <td>
                <button class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#editeazaModal" wire:click="editeazaUser('{{$user->id}}')">
                    Editeaza</button>
            </td>
            <td>


                <!-- convoaca modal -->
                <a class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#convoacaModal" wire:click="alegeDestinatar({{$user->id}})">
                    Convoaca </a>
                {{--wire:click="alegeUser({{$destinatar}}) wire:click="resetFields"--}}


                {{--<livewire:convoaca-form wire:key="convoacaform-{{ $user->id}}" :destinatar="$user->id" />
                @livewire('convoaca-form', ['destinatar' => $user->id]) --}}

                {{-- <x-alert :destinatar="$user->id" wire:key="id{{ $user->id}}" /> --}}
                <!-- deci componenta asta care nue livewire merge ,
                 dar modalul se inchide cind apesi butonul nu se vede validarea dar ea exista-->

            </td>
            @endforeach
    </table>
    {{-- {{$entitate->users()->paginate(3)->links()}}  --}}

    @endforeach

    <!-- wire:click = 'alegeUser({{$user->id}})  '-->




    <x-anonima>
        <x:slot:title>Titlu comp anonima</x:slot:title>
        Slot componenta anonima
    </x-anonima>

    <br>

    <x-anonima2>
        <x-slot:title>
            Titlu comp anonima2
            </x-slot>

            <strong>Whoops!</strong> Slot comp anonima2
    </x-anonima2>

    @section('scripts')
    <script>
        window.addEventListener("close-modal", function() {
            $("#convoacaModal").modal('hide');
            $("#adaugaUser").modal('hide');
            $("#editeazaModal").modal('hide');
        })
    </script>
    @endsection('scripts')

    {{-- @livewire('convoaca-form')  --}}
    {{-- <livewire:convoaca-form />  --}}
</div>
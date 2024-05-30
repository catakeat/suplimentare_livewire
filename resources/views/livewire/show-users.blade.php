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
    <span class="alert text-danger">{{session()->get("success")}}</span>
    @else
    <span class="alert text-danger">nui suceess</span>
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
                <button class="btn btn-primary trimite_email">
                    Editeaza</button>
            </td>
            <td>
                {{-- <livewire:convoaca-form wire:key="id{{ $user->id}}" :destinatar="{{$user->id}}" /> --}}
                @livewire('convoaca-form', ['destinatar' => $user->id])

                {{-- <x-alert :destinatar="$user->id" wire:key="id{{ $user->id}}" /> --}}<!-- deci componenta asta care nue livewire merge ,
                 dar modalul se inchide cind apesi butonul nu se vede validarea dar ea exista-->

            </td>
            @endforeach
    </table>
    <!-- {{$entitate->users()->paginate(3)->links()}}  -->

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
        document.addEventListener('livewire:load', function() {
            Livewire.on('close-modal', function() {
                var myModal = new bootstrap.Modal(document.getElementById('convoacaModal'));
                myModal.hide();
            });
        });


        window.addEventListener("close-modal", function() {
            $("#convoacaModal").modal('hide');
        })
    </script>
    @endsection('scripts')

    {{-- @livewire('convoaca-form')  --}}
    {{-- <livewire:convoaca-form />  --}}
</div>
<div class="col col-lg-7">
    @include('pages.modale')

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
                <button  class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="alegeUser('{{$user->id}}')">Sterge</button>

            </td>
            <td>
                <button  class="btn btn-primary trimite_email">
                    Editeaza</button>
            </td>
            <td>
                <a class="btn btn-primary trimite_email" data-bs-toggle="modal" data-bs-target="#convoacaModal" wire:click.prevent="alegeUser('{{$user->id}}')">
                    Convoaca</a>
            </td>
            @endforeach
    </table>
    <!-- {{$entitate->users()->paginate(3)->links()}}  -->

    @endforeach

    <!-- wire:click = 'alegeUser({{$user->id}})  '-->
    <x-anonima />
</div>